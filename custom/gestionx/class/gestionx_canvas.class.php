<?php
/**
 * GestionX Canvas - Para páginas completamente nuevas
 */

class GestionXCanvas
{
    private $db;
    private $user;
    
    public function __construct($db, $user)
    {
        $this->db = $db;
        $this->user = $user;
    }
    
    /**
     * CANVAS: Dashboard personalizado
     */
    public function showCustomDashboard()
    {
        global $conf, $langs;
        
        $html = '';
        
        $html .= '<div class="gestionx-canvas">';
        $html .= '<div class="gestionx-header">';
        $html .= '<h1>Dashboard GestionX</h1>';
        $html .= '<p>Vista personalizada del sistema</p>';
        $html .= '</div>';
        
        $html .= '<div class="gestionx-widgets">';
        $html .= $this->renderStatsWidget();
        $html .= $this->renderRecentActivity();
        $html .= $this->renderQuickActions();
        $html .= '</div>';
        
        $html .= '</div>';
        
        return $html;
    }
    
    /**
     * CANVAS: Página de reportes personalizada
     */
    public function showCustomReports()
    {
        global $langs;
        
        $html = '';
        $html .= '<div class="gestionx-reports">';
        $html .= '<h2>Reportes GestionX</h2>';
        $html .= $this->renderReportFilters();
        $html .= $this->renderReportData();
        $html .= '</div>';
        
        return $html;
    }
    
    private function renderStatsWidget()
    {
        return '
        <div class="widget stats-widget">
            <h3>Estadísticas</h3>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-value">150</span>
                    <span class="stat-label">Clientes</span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">45</span>
                    <span class="stat-label">Proyectos</span>
                </div>
            </div>
        </div>';
    }
    
    private function renderRecentActivity()
    {
        return '
        <div class="widget activity-widget">
            <h3>Actividad Reciente</h3>
            <ul class="activity-list">
                <li>Nuevo cliente registrado</li>
                <li>Proyecto completado</li>
            </ul>
        </div>';
    }
    
    private function renderQuickActions()
    {
        return '
        <div class="widget actions-widget">
            <h3>Acciones Rápidas</h3>
            <div class="actions-grid">
                <button class="action-btn">Nuevo Cliente</button>
                <button class="action-btn">Nuevo Proyecto</button>
                <button class="action-btn">Generar Reporte</button>
            </div>
        </div>';
    }
    
    private function renderReportFilters()
    {
        return '
        <div class="report-filters">
            <form method="GET">
                <label for="date_from">Desde:</label>
                <input type="date" id="date_from" name="date_from">
                
                <label for="date_to">Hasta:</label>
                <input type="date" id="date_to" name="date_to">
                
                <button type="submit">Filtrar</button>
            </form>
        </div>';
    }
    
    private function renderReportData()
    {
        return '
        <div class="report-data">
            <table class="report-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Proyecto</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cliente A</td>
                        <td>Proyecto X</td>
                        <td>Activo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cliente B</td>
                        <td>Proyecto Y</td>
                        <td>Completado</td>
                    </tr>
                </tbody>
            </table>
        </div>';
    }
}