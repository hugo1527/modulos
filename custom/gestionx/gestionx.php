<?php
/**
 * GestionX main page
 */

require_once DOL_DOCUMENT_ROOT.'/core/class/html.form.class.php';
dol_include_once('/gestionx/core/modules/gestionx.modules.php');

$langs->load("gestionx@gestionx");

llxHeader('', $langs->trans('GestionX'));

print_fiche_titre($langs->trans('GestionXDashboard'));

print '<div class="gestionx-container">';
print '<h2>Bienvenido a GestionX</h2>';
print '<p>Esta es la página principal del módulo GestionX.</p>';
print '</div>';

llxFooter();