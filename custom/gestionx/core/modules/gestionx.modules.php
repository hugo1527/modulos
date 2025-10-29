<?php
/**
 * GestionX - Module descriptor
 */

class gestionx extends DolibarrModules
{
    public function __construct($db)
    {
        global $langs;
        
        $this->db = $db;
        $this->numero = 100001;
        $this->name = "GestionX";
        $this->description = "Módulo principal de funcionalidades GestionX";
        $this->version = '1.0.0';
        $this->const_name = 'MAIN_MODULE_GESTIONX';
        
        $this->module_parts = array(
            'hooks' => array(
                'main',
                'login',
                'dashboard', 
                'top',
                'page'
            ),
            'triggers' => 1
        );
        
        $this->config_page_url = array(
            "gestionx_dashboard.php@gestionx",
            "gestionx_reports.php@gestionx"
        );
        
        $this->depends = array();
        $this->requiredby = array();
        $this->langfiles = array("gestionx@gestionx");
        
        $this->phpmin = array(7,4);
        $this->need_dolibarr_version = array(18,0,-1);
    }
    
    public function init($options = array())
    {
        $this->_init(array(), array('gestionx'));
        return 1;
    }
}