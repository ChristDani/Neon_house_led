<?php

namespace Model;

use Model\ActiveRecord;

class Color extends ActiveRecord{
    protected static $tabla = "tab_color";
    protected static $columnaDB = ["id","nombre","rgb"];

    public $id;
    public $nombre;
    public $rgb;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? null;
        $this->rgb = $args['rgb'] ?? null;
    }

    public function verificarNombreColor(){
        $query = "SELECT * FROM ".static::$tabla." WHERE nombre='".$this->nombre."'";
        $resultado = self::$db->query($query);
        return $resultado;
    }
}


// Este es mi primer comentario de prueba