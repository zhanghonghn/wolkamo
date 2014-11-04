<?php
    define("THINK_PATH",     "./Core/");
    define("APP_NAME",       "wolkamo");
    define("APP_PATH",       "./wolkamo/");
    define("APP_DEBUG",      true);            # debug mod

    define("DEPLOY_STATUS",  "dev");           # config mod, 4 mode: dev, test, online, backup
    define("VERSION", 	     "0.8.0");
    
    require(THINK_PATH."/ThinkPHP.php");