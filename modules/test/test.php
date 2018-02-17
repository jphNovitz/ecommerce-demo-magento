<?php
if (!defined('_PS_VERSION_'))
{
    exit;
}

class Test extends Module{
    public function __construct()
    {
        parent::__construct();
        /*
         * assign attributes to the class  to the class
         */
        $this->name = 'test';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Novitz Jean-Philippe';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        $this->displayName = $this->l('test');
        $this->description = $this->l('put a description here');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided.');

    }
    public function install()
    {
        if (!parent::install())
            return false;
        return true;
    }
    public function uninstall()
    {
        if (!parent::uninstall())
            return false;
        return true;
    }
}