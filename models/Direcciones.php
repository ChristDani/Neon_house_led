<?php

namespace Model;

use Model\ActiveRecord;

class Direcciones extends ActiveRecord{
    protected static $tabla = "tab_direcciones";
    protected static $columnaDB = ['id', 'url_tiktok', 'url_instagram', 'url_pinterest', 'url_facebook', 'url_whatsap', 'url_correoempresa', 'url_correoemisor'];

    public $id;
    public $url_tiktok;
    public $url_instagram;
    public $url_pinterest;
    public $url_facebook;
    public $url_whatsap;
    public $url_correoempresa;
    public $url_correoemisor;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->url_tiktok = $args['url_tiktok'] ?? null;
        $this->url_instagram = $args['url_instagram'] ?? null;
        $this->url_pinterest = $args['url_pinterest'] ?? null;
        $this->url_facebook = $args['url_facebook'] ?? null;
        $this->url_whatsap = $args['url_whatsap'] ?? null;
        $this->url_correoempresa = $args['url_correoempresa'] ?? null;
        $this->url_correoemisor = $args['url_correoemisor'] ?? null;
    }
}