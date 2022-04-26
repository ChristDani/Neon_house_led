<?php

namespace Model;

use Model\ActiveRecord;

//aun no hecho
class Compra extends ActiveRecord {
    protected static $tabla = "tab_compra";
    protected static $columnaDB = ['id', 'com_fecha ', 'precio_total ', 'cli_id'];

    public $id;
    public $com_fecha;
    public $precio_total;
    public $cli_id;
    
    

    public function __construct($args = [])
    {
        $this->id = $args['id '] ?? null;
        $this->com_fecha = $args['com_fecha '] ?? null;
        $this->precio_total = $args['precio_total '] ?? null;
        $this->cli_id = $args['cli_id'] ?? null;
  }
//para que vea el administrador
  public static function compraXCliente()
  {
    $query = "SELECT  co.id, co.com_fecha, co.precio_total, concat(co.cli_id,',',cl.cli_nombre)  AS cli_id 
    FROM tab_compra AS co INNER JOIN tab_cliente AS cl 
    ON co.cli_id = cl.id";

      $resultado = static::consultarSQL($query);
      return $resultado;
  }


//para que vea el cliente
public static function consultaCliente($cli_id)
{
  $query = "SELECT  com_fecha, precio_total, id
  FROM tab_compra WHERE cli_id = ${cli_id}";

    $resultado = static::consultarSQL($query);
    return $resultado;
}

//verificar cliente al ver su factura, evita que ponga datos fraudulentos // ESTA DANDO ERRORES
public static function verificarCliente($sessionid)
{
  $query = "SELECT co.cli_id FROM ".static::$tabla." AS co
  INNER JOIN tab_cliente AS cl  ON co.cli_id = cl.id WHERE co.cli_id=${sessionid}";
  $resultado = self::$db->query($query);
  return $resultado;
}

}
