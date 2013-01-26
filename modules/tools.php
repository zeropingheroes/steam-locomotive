<?php

define('LOCOMOTIVE_TOOLS_PATH', LOCOMOTIVE_PATH . 'modules/tools/');

/**
 * Tools to work with Steam APIs
 */
class Tools
{

    public function __construct()
    {
        require_once LOCOMOTIVE_TOOLS_PATH . 'usertools.php';
        $this->users = new UserTools();
        require_once LOCOMOTIVE_TOOLS_PATH . 'grouptools.php';
        $this->groups = new GroupTools();
        require_once LOCOMOTIVE_TOOLS_PATH . 'apptools.php';
        $this->apps = new AppTools();
    }

}