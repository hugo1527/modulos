/**
 * GestionX Theme JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    console.log('GestionX Theme cargado');
    
    // Mejoras en la interfaz de usuario
    enhanceUI();
    
    // Personalizar comportamientos
    customizeBehaviors();
});

function enhanceUI() {
    // Agregar efectos a los botones
    const buttons = document.querySelectorAll('.button, .butAction');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

function customizeBehaviors() {
    // Personalizar el comportamiento del dashboard
    if (window.location.pathname.includes('dashboard')) {
        console.log('Dashboard GestionX personalizado');
        
        // Agregar funcionalidades adicionales al dashboard
        const dashboard = document.querySelector('.gestionx-dashboard');
        if (dashboard) {
            // Inicializar componentes del dashboard
            initDashboardComponents();
        }
    }
}

function initDashboardComponents() {
    // Aquí puedes inicializar componentes específicos del dashboard
    console.log('Inicializando componentes del dashboard GestionX');
}