<?php
/**
 * GestionX Triggers - Modificaciones via hooks
 */

class GestionXTriggers
{
    private $db;
    public $name = 'GestionX Triggers';
    public $family = 'gestionx';
    public $description = 'Triggers para personalizaciones GestionX';
    public $version = '1.0.0';

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * HOOK: Personalizar dashboard
     * Esta función SÍ pertenece a gestionx, ya que añade funcionalidad (un widget).
     */
    public function modifyDashboard($parameters, &$object, &$action, $hookmanager)
    {
        if ($parameters['currentcontext'] == 'dashboard') {
            $parameters['widgets'][] = array(
                'widget' => 'gestionx_stats',
                'position' => 0,
                'title' => 'Estadísticas GestionX'
            );
        }
        return 0;
    }

    /**
     * NOTA: Las funciones modifyLoginPage() y addGlobalAssets() se han eliminado.
     * * El módulo 'gestionxtheme' es un módulo de tipo 'theme'.
     * Dolibarr cargará automáticamente los siguientes archivos cuando 
     * el tema 'gestionx' esté activo:
     * * - /custom/gestionxtheme/theme/gestionx/css/theme.css
     * - /custom/gestionxtheme/theme/gestionx/css/login.css
     * - /custom/gestionxtheme/theme/gestionx/js/theme.js
     * * Forzar su carga desde 'gestionx_triggers' era redundante y 
     * creaba una dependencia innecesaria.
     */
}