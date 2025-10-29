<?php
/**
 * GestionX Widget
 */

class gestionx_widget extends ModeleBoxes
{
    public $boxcode = "gestionxwidget";
    public $boximg = "gestionx@GestionX";
    public $boxlabel = "GestionXWidget";
    public $depends = array("gestionx");
    public $param;
    public $info_box_head = array();
    public $info_box_contents = array();

    public function __construct($db, $param = '')
    {
        global $user;
        $this->db = $db;
        $this->param = $param;
    }

    public function loadBox($max = 5)
    {
        $this->info_box_head = array(
            'text' => 'GestionX Widget',
            'sublogo' => 'gestionx'
        );

        $this->info_box_contents = array(
            array(
                'td' => 'class="left"',
                'text' => 'Este es un widget personalizado de GestionX.'
            )
        );
    }

    public function showBox($head = null, $contents = null, $nooutput = 0)
    {
        parent::showBox($this->info_box_head, $this->info_box_contents, $nooutput);
    }
}