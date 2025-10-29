<?php
/**
 * GestionX Library - Funciones de ayuda
 */

/**
 * Agregar CSS personalizado
 */
function gestionx_add_custom_css()
{
    global $conf;
    
    if (!empty($conf->global->GESTIONX_CUSTOM_CSS)) {
        print '<style>' . $conf->global->GESTIONX_CUSTOM_CSS . '</style>';
    }
}

/**
 * Agregar JS personalizado
 */
function gestionx_add_custom_js()
{
    global $conf;
    
    if (!empty($conf->global->GESTIONX_CUSTOM_JS)) {
        print '<script>' . $conf->global->GESTIONX_CUSTOM_JS . '</script>';
    }
}

/**
 * Obtener versión del módulo
 */
function gestionx_get_version()
{
    return '1.0.0';
}