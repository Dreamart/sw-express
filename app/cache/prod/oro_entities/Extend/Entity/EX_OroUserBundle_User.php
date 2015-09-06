<?php

namespace Extend\Entity;

abstract class EX_OroUserBundle_User extends \Oro\Bundle\UserBundle\Entity\AbstractUser implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $title;
    protected $phone;
    protected $googleId;
    protected $avatar;
    protected $ac_last_contact_date_out;
    protected $ac_last_contact_date_in;
    protected $ac_last_contact_date;
    protected $ac_contact_count_out;
    protected $ac_contact_count_in;
    protected $ac_contact_count;

    public function setTitle($value)
    {
        $this->title = $value; return $this;
    }

    public function setPhone($value)
    {
        $this->phone = $value; return $this;
    }

    public function setGoogleId($value)
    {
        $this->googleId = $value; return $this;
    }

    public function setAvatar($value)
    {
        $this->avatar = $value; return $this;
    }

    public function setAcLastContactDateOut($value)
    {
        $this->ac_last_contact_date_out = $value; return $this;
    }

    public function setAcLastContactDateIn($value)
    {
        $this->ac_last_contact_date_in = $value; return $this;
    }

    public function setAcLastContactDate($value)
    {
        $this->ac_last_contact_date = $value; return $this;
    }

    public function setAcContactCountOut($value)
    {
        $this->ac_contact_count_out = $value; return $this;
    }

    public function setAcContactCountIn($value)
    {
        $this->ac_contact_count_in = $value; return $this;
    }

    public function setAcContactCount($value)
    {
        $this->ac_contact_count = $value; return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getGoogleId()
    {
        return $this->googleId;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function getAcLastContactDateOut()
    {
        return $this->ac_last_contact_date_out;
    }

    public function getAcLastContactDateIn()
    {
        return $this->ac_last_contact_date_in;
    }

    public function getAcLastContactDate()
    {
        return $this->ac_last_contact_date;
    }

    public function getAcContactCountOut()
    {
        return $this->ac_contact_count_out;
    }

    public function getAcContactCountIn()
    {
        return $this->ac_contact_count_in;
    }

    public function getAcContactCount()
    {
        return $this->ac_contact_count;
    }

    public function __construct()
    {
        parent::__construct();
    }
}