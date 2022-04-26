<?php

namespace Model;

use Model\ActiveRecord;

class CompraDetalle extends ActiveRecord {

    protected static $tabla = "tab_compra_detalle";

    protected static $columnaDB = ['id', 'cod_id', 'pro_id', 'det_cantidad',  'det_color'];

    public $id;

    public $cod_id;

    public $pro_id;

    public $det_cantidad;

    public $det_color;

    public function __construct($args = [])

    {

        $this->id = $args['id'] ?? null;

        $this->cod_id = $args['cod_id'] ?? null;

        $this->pro_id = $args['pro_id'] ?? null;

        $this->det_cantidad = $args['det_cantidad'] ?? null;

        $this->det_color = $args['det_color' ] ?? null;

    }

    


    public static function compradetXProducto()
    {
      $query = "SELECT  co.id, co.cod_id, co.det_cantidad, co.det_color, concat(co.pro_id,',',pro.pro_nombre)  AS pro_id
      FROM tab_compra_detalle AS co INNER JOIN tab_producto AS pro
      ON co.pro_id = pro.id";
  
        $resultado = static::consultarSQL($query);
        return $resultado;
    }

    public static function conseguirproductos($cod_id)
    { // los AS son incorrectos, pero es para que no de errores al salirse del molde
        $query = "select pro_nombre AS id, pro_precio AS cod_id, tab_compra_detalle.det_cantidad AS det_cantidad, 
        (pro_precio*tab_compra_detalle.det_cantidad) AS 'pro_id', det_color AS 'det_color' from tab_producto
        INNER JOIN tab_compra_detalle
        ON tab_compra_detalle.pro_id = tab_producto.id
        WHERE cod_id = ${cod_id}";

        $resultado = static::consultarSQL($query);
        return $resultado;
    } 

    

    public function editCantidad()

    {

        $query = "UPDATE " . static::$tabla . " SET det_cantidad ='" . $this->det_cantidad . "' WHERE id=" . $this->id;

        $resultado = self::$db->query($query);

        return $resultado;

    }

}
