<?php
/**
 * Custom Page Template for GestionX Theme
 */
?>
<div class="gestionx-custom-page">
    <h1><?php echo $title; ?></h1>
    <div class="gestionx-content">
        <?php echo $content; ?>
    </div>
</div>

<style>
.gestionx-custom-page {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.gestionx-content {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
</style>