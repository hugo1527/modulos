<?php
/**
 * GestionX Reports - Página de reportes personalizada
 */

require_once DOL_DOCUMENT_ROOT.'/core/class/html.form.class.php';
dol_include_once('/gestionx/class/gestionx_canvas.class.php');

$langs->load("gestionx@gestionx");

// Verificar permisos
if (!$user->rights->gestionx->read) {
    accessforbidden();
}

llxHeader('', $langs->trans('GestionXReports'));

$canvas = new GestionXCanvas($db, $user);
print $canvas->showCustomReports();

llxFooter();