<?php return unserialize('a:5:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";N;s:8:"readOnly";b:0;}i:1;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:11:"orocrm_task";s:6:"schema";N;s:7:"indexes";a:2:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Index":4:{s:4:"name";s:17:"task_due_date_idx";s:7:"columns";a:1:{i:0;s:8:"due_date";}s:5:"flags";N;s:7:"options";N;}i:1;O:26:"Doctrine\\ORM\\Mapping\\Index":4:{s:4:"name";s:19:"task_updated_at_idx";s:7:"columns";a:1:{i:0;s:9:"updatedAt";}s:5:"flags";N;s:7:"options";N;}}s:17:"uniqueConstraints";N;s:7:"options";a:0:{}}i:2;O:42:"Doctrine\\ORM\\Mapping\\HasLifecycleCallbacks":0:{}i:3;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";s:57:"OroCRM\\Bundle\\TaskBundle\\Entity\\Repository\\TaskRepository";s:8:"readOnly";b:0;}i:4;O:56:"Oro\\Bundle\\EntityConfigBundle\\Metadata\\Annotation\\Config":5:{s:4:"mode";s:7:"default";s:9:"routeName";s:17:"orocrm_task_index";s:9:"routeView";s:16:"orocrm_task_view";s:11:"routeCreate";s:0:"";s:13:"defaultValues";a:8:{s:6:"entity";a:1:{s:4:"icon";s:10:"icon-tasks";}s:9:"ownership";a:5:{s:10:"owner_type";s:4:"USER";s:16:"owner_field_name";s:5:"owner";s:17:"owner_column_name";s:8:"owner_id";s:23:"organization_field_name";s:12:"organization";s:24:"organization_column_name";s:15:"organization_id";}s:8:"security";a:1:{s:4:"type";s:3:"ACL";}s:9:"dataaudit";a:1:{s:9:"auditable";b:1;}s:8:"workflow";a:1:{s:15:"active_workflow";s:9:"task_flow";}s:8:"reminder";a:2:{s:22:"reminder_template_name";s:13:"task_reminder";s:34:"reminder_flash_template_identifier";s:13:"task_template";}s:8:"grouping";a:1:{s:6:"groups";a:1:{i:0;s:8:"activity";}}s:8:"activity";a:4:{s:5:"route";s:25:"orocrm_task_activity_view";s:3:"acl";s:16:"orocrm_task_view";s:20:"action_button_widget";s:22:"orocrm_add_task_button";s:18:"action_link_widget";s:20:"orocrm_add_task_link";}}}}');