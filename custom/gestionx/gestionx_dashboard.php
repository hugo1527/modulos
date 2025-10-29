<?php
/**
 * GestionX Dashboard - Página nueva usando Canvas
 */

require_once DOL_DOCUMENT_ROOT.'/core/class/html.form.class.php';
dol_include_once('/gestionx/class/gestionx_canvas.class.php');

$langs->load("gestionx@gestionx");

// Verificar permisos
if (!$user->rights->gestionx->read) {
    accessforbidden();
}

xitHeader('', $langs->trans('GestionXDashboard'));

$canvas = new GestionXCanvas($db, $user);
print $canvas->showCustomDashboard();

xitFooter();