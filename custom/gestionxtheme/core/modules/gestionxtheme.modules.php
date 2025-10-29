<?php
/**
 * GestionX Theme - Module descriptor
 */

class gestionxtheme extends DolibarrModules
{
    public function __construct($db)
    {
        $this->db = $db;
        $this->numero = 100100;
        $this->name = 'GestionX Theme';
        $this->description = 'Tema visual personalizado para GestionX';
        $this->version = '1.0.0';
        
        $this->module_parts = array(
            'theme' => 1
        );
        
        $this->dirs = array('/gestionxtheme/theme');
        
        $this->depends = array();
        $this->requiredby = array();
        
        // ===== 1. LA PROPIEDAD QUE FALTABA =====
        $this->langfiles = array("gestionxtheme@gestionxtheme");
        
        $this->phpmin = array(7,4);
        $this->need_dolibarr_version = array(18,0,-1);
    
    }

    /**
     * Función de inicialización del módulo
     */
    // ===== 2. LA FIRMA CORRECTA QUE ACEPTA VS CODE =====
    public function init($options = array())
    {
        $this->_init(array(), array('gestionxtheme')); 
        return 1;
    }
}