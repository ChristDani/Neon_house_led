<?php

namespace Model;

use Model\ActiveRecord;


class Visitante extends ActiveRecord {
    protected static $tabla = "tab_visitantes";
    protected static $columnaDB = ['id', 'vis_nombre', 'vis_apellidos', 'vis_email','vis_telefono','vis_pregunta'];

    public $id;
    public $vis_nombre;
    public $vis_apellidos;
    public $vis_email;
    public $vis_telefono;
    public $vis_pregunta;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->vis_nombre = $args['vis_nombre'] ?? null;
        $this->vis_apellidos = $args['vis_apellidos'] ?? null;
        $this->vis_email = $args['vis_email'] ?? null;
        $this->vis_telefono = $args['vis_telefono'] ?? null;
        $this->vis_pregunta = $args['vis_pregunta'] ?? null;
    }
    
    public function verificarCorreo(){
        $query = "SELECT * FROM ".static::$tabla." WHERE vis_email='".$this->vis_email."'";
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function actualizarconCorreo(){
       
        $query = "UPDATE ".static::$tabla." SET vis_nombre='".$this->vis_nombre."',
        vis_apellidos='".$this->vis_apellidos."',
        vis_telefono='".$this->vis_telefono."',
        vis_pregunta='".$this->vis_pregunta."' 
        WHERE vis_email='".$this->vis_email."'";
        $resultado = self::$db->query($query);
        return $resultado;

    }



}
