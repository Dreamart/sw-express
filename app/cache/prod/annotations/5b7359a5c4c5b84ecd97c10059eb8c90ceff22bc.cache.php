<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";s:62:"Oro\\Bundle\\DataGridBundle\\Entity\\Repository\\GridViewRepository";s:8:"readOnly";b:0;}i:1;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:13:"oro_grid_view";s:6:"schema";N;s:7:"indexes";N;s:17:"uniqueConstraints";N;s:7:"options";a:0:{}}i:2;O:56:"Oro\\Bundle\\EntityConfigBundle\\Metadata\\Annotation\\Config":5:{s:4:"mode";s:7:"default";s:9:"routeName";s:0:"";s:9:"routeView";s:0:"";s:11:"routeCreate";s:0:"";s:13:"defaultValues";a:2:{s:9:"ownership";a:5:{s:10:"owner_type";s:4:"USER";s:16:"owner_field_name";s:5:"owner";s:17:"owner_column_name";s:13:"user_owner_id";s:23:"organization_field_name";s:12:"organization";s:24:"organization_column_name";s:15:"organization_id";}s:8:"security";a:2:{s:4:"type";s:3:"ACL";s:10:"group_name";s:0:"";}}}i:3;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":9:{s:7:"message";s:28:"oro.datagrid.gridview.unique";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";a:2:{i:0;s:4:"name";i:1;s:5:"owner";}s:9:"errorPath";N;s:10:"ignoreNull";b:1;s:7:"payload";N;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');