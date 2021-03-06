<?php
/*
*   This file MUST BE retained at the HIGHEST LEVEL to work correctly
*   From where the file is called from (require) does not matter
*   The file is called by "init.php" file as that is where we aquire the use of paths for the first time
*
*
**/
//echo 'in .paths';

//1. INITIALIZING  PATHS
define("DS" , DIRECTORY_SEPARATOR );
define("PATH_ROOT" ,  __DIR__ . DS );
define("PATH_HOST", $_SERVER['HTTP_HOST'] . DS );

define("PATH_HTML" , PATH_ROOT . "html" . DS );
define("PATH_CSS", PATH_HTML . "css" . DS);
define("PATH_JS", PATH_HTML . "js" . DS);

define("PATH_APP" , PATH_ROOT . "App" . DS );
define("PATH_CORE" , PATH_APP . "Core" . DS );

define("PATH_CONFIG" , PATH_APP . "Config" . DS);

define("PATH_CONTROLLER" , PATH_APP . "Controllers" . DS);
define("PATH_CONTROLLER_ADMIN" , PATH_CONTROLLER . "Admin" . DS);
define("PATH_CONTROLLER_DEV" , PATH_CONTROLLER . "Dev" . DS);

define("PATH_MODELS", PATH_APP . "Models" . DS);
define("PATH_TRANS", PATH_APP . "Translations" . DS);

define("PATH_VIEW", PATH_APP . "Views" . DS);
define("PATH_VIEW_TMP", PATH_VIEW. "Templates" . DS);
define("PATH_VIEW_ADMIN", PATH_VIEW . "Admin" . DS);
define("PATH_VIEW_TMP_ADMIN", PATH_VIEW_TMP. "Admin" . DS);
define("PATH_VIEW_DEV", PATH_VIEW. "Dev" . DS);
define("PATH_VIEW_TMP_DEV", PATH_VIEW_TMP. "Dev" . DS);

define("PATH_UPLOAD", PATH_HTML . "uploads" . DS);
define("PATH_TMP", PATH_HTML . "tmp" . DS);

// echo '<br /> DS ::'. DS;
// echo '<br />';
// echo '<br /> PATH_ROOT ::'. PATH_ROOT;
// echo '<br /> PATH_HOST  :: ' . PATH_HOST;
// echo '<br />';
// echo '<br /> PATH_HTML  :: ' . PATH_HTML;
// echo '<br /> PATH_CSS  :: ' . PATH_CSS;
// echo '<br /> PATH_JS  :: ' .  PATH_JS;
// echo '<br />';
// echo '<br /> PATH_APP  :: ' .  PATH_APP;
// echo '<br /> PATH_CORE :: ' .  PATH_CORE;
// echo '<br /> PATH_CONFIG  :: ' .  PATH_CONFIG;

// echo '<br />';
// echo '<br /> PATH_CONTROLLER  :: ' .  PATH_CONTROLLER;
// echo '<br /> PATH_CONTROLLER_ADMIN  :: ' . PATH_CONTROLLER_ADMIN;
// echo '<br /> PATH_CONTROLLER_DEV  :: ' . PATH_CONTROLLER_DEV;
// echo '<br />';
// echo '<br /> PATH_MODELS  :: ' .  PATH_MODELS;
// echo '<br />';
// echo '<br /> PATH_VIEW  :: ' .  PATH_VIEW;
// echo '<br /> PATH_VIEW_TMP  :: ' . PATH_VIEW_TMP;
// echo '<br /> PATH_VIEW_ADMIN  :: ' .  PATH_VIEW_ADMIN ;
// echo '<br /> PATH_VIEW_DEV  :: ' . PATH_VIEW_DEV;
// echo '<br />';
// echo '<br /> PATH_UPLOAD :: ' . PATH_UPLOAD;
// echo '<br /> PATH_TMP  :: ' . PATH_TMP;
