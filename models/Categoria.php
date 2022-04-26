<?php

namespace Model;

use Model\ActiveRecord;

class Categoria extends ActiveRecord{

    protected static $tabla = 'tab_categoria';
    protected static $columnaDB   = ['id','cat_nombre','cat_activo'];

    public $id; 
    public $cat_nombre;
    public $cat_activo;

    public function __construct ($args = []){
        $this->id = $args['id'] ?? null;
        $this->cat_nombre = $args['cat_nombre'] ?? null;
        $this->cat_activo = $args['cat_activo'] ?? null;
    }
    
    public function actualizarEstado(){
        $query = "UPDATE ".static::$tabla." SET cat_activo = '".$this->cat_activo."' where id =".$this->id;
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function verificarNombre(){
        $query = "SELECT * FROM ".static::$tabla." WHERE cat_nombre='".$this->cat_nombre."'";
        $resultado = self::$db->query($query);
        return $resultado;
    }

/* no sirve
    public static function listarNombre($nombre) {
        $query = "SELECT * FROM ".static::$tabla. " WHERE cat_nombre like '%".$nombre."%'";
        $resultado = static::consultarSQL($query);
        return $resultado;
    }
*/
}