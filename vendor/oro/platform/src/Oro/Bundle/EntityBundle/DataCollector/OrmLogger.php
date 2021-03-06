<?php

namespace Oro\Bundle\EntityBundle\DataCollector;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Stopwatch\Stopwatch;

use Oro\Bundle\EntityBundle\ORM\OrmConfiguration;

class OrmLogger
{
    /** @var array */
    protected $hydrations = [];

    /** @var float */
    protected $startHydration;

    /** @var integer */
    protected $currentHydration = 0;

    /** @var array */
    protected $stats = [];

    /** @var float */
    protected $statsTime = 0;

    /** @var array */
    protected $startStack = [];

    /** @var Stopwatch|null */
    protected $stopwatch;

    /**
     * @param array           $hydrators
     * @param ManagerRegistry $doctrine
     * @param Stopwatch|null  $stopwatch
     */
    public function __construct(array $hydrators, ManagerRegistry $doctrine, Stopwatch $stopwatch = null)
    {
        // inject profiling logger and logging hydrators into a configuration of all registered entity managers
        foreach ($doctrine->getManagers() as $manager) {
            if ($manager instanceof EntityManagerInterface) {
                $configuration = $manager->getConfiguration();
                if ($configuration instanceof OrmConfiguration) {
                    $configuration->setAttribute('OrmProfilingLogger', $this);
                    $configuration->setAttribute('LoggingHydrators', $hydrators);
                }
            }
        }

        $this->stopwatch = $stopwatch;
    }

    /**
     * Gets all executed hydrations
     *
     * @return array
     */
    public function getHydrations()
    {
        return $this->hydrations;
    }

    /**
     * Gets statistic of all executed operations
     *
     * @return array
     */
    public function getStats()
    {
        foreach (['persist', 'detach', 'merge', 'remove', 'refresh', 'flush'] as $name) {
            if (!isset($this->stats[$name])) {
                $this->stats[$name] = ['count' => 0, 'time' => 0];
            }
        }

        return $this->stats;
    }

    /**
     * Gets a total time of all executed operations
     *
     * @return float
     */
    public function getStatsTime()
    {
        return $this->statsTime;
    }

    /**
     * Marks a hydration as started
     *
     * @param string $hydrationType
     */
    public function startHydration($hydrationType)
    {
        $this->startHydration = microtime(true);

        $this->hydrations[++$this->currentHydration]['type'] = $hydrationType;
        if ($this->stopwatch) {
            $this->stopwatch->start('doctrine.orm.hydrations', 'doctrine');
        }
    }

    /**
     * Marks a hydration as stopped
     *
     * @param int   $resultCount
     * @param array $aliasMap
     */
    public function stopHydration($resultCount, $aliasMap)
    {
        $this->hydrations[$this->currentHydration]['time']        = microtime(true) - $this->startHydration;
        $this->hydrations[$this->currentHydration]['resultCount'] = $resultCount;
        $this->hydrations[$this->currentHydration]['aliasMap']    = $aliasMap;
        if ($this->stopwatch) {
            $this->stopwatch->stop('doctrine.orm.hydrations');
        }
    }

    /**
     * Marks a persist operation as started
     */
    public function startPersist()
    {
        $this->startOperation('persist');
    }

    /**
     * Marks a persist operation as stopped
     */
    public function stopPersist()
    {
        $this->stopOperation('persist');
    }

    /**
     * Marks a detach operation as started
     */
    public function startDetach()
    {
        $this->startOperation('detach');
    }

    /**
     * Marks a detach operation as stopped
     */
    public function stopDetach()
    {
        $this->stopOperation('detach');
    }

    /**
     * Marks a merge operation as started
     */
    public function startMerge()
    {
        $this->startOperation('merge');
    }

    /**
     * Marks a merge operation as stopped
     */
    public function stopMerge()
    {
        $this->stopOperation('merge');
    }

    /**
     * Marks a refresh operation as started
     */
    public function startRefresh()
    {
        $this->startOperation('refresh');
    }

    /**
     * Marks a refresh operation as stopped
     */
    public function stopRefresh()
    {
        $this->stopOperation('refresh');
    }

    /**
     * Marks a remove operation as started
     */
    public function startRemove()
    {
        $this->startOperation('remove');
    }

    /**
     * Marks a remove operation as stopped
     */
    public function stopRemove()
    {
        $this->stopOperation('remove');
    }

    /**
     * Marks a flush operation as started
     */
    public function startFlush()
    {
        $this->startOperation('flush');
    }

    /**
     * Marks a flush operation as stopped
     */
    public function stopFlush()
    {
        $this->stopOperation('flush');
    }

    /**
     * @param string $name
     */
    protected function startOperation($name)
    {
        $startStopwatch = $this->stopwatch && !$this->hasNestedOperations();

        $this->startStack[$name][] = microtime(true);
        if ($startStopwatch) {
            $this->stopwatch->start('doctrine.orm.operations', 'doctrine');
        }
    }

    /**
     * @param string $name
     */
    protected function stopOperation($name)
    {
        $time = microtime(true) - array_pop($this->startStack[$name]);
        if (isset($this->stats[$name])) {
            $this->stats[$name]['count'] += 1;
        } else {
            $this->stats[$name] = ['count' => 1, 'time' => 0];
        }
        // add to an execution time only if there are no nested operations
        if (empty($this->startStack[$name])) {
            $this->stats[$name]['time'] += $time;
            // add to a total execution time only if there are no nested operations of any type
            if (!$this->hasNestedOperations()) {
                $this->statsTime += $time;
                if ($this->stopwatch) {
                    $this->stopwatch->stop('doctrine.orm.operations');
                }
            }
        }
    }

    /**
     * @return bool
     */
    protected function hasNestedOperations()
    {
        foreach ($this->startStack as $startStack) {
            if (!empty($startStack)) {
                return true;
            }
        }

        return false;
    }
}
