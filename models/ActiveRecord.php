<?php 

namespace Model;

class ActiveRecord {
    //Base de datos
    protected static $db;
    protected static $columnaDB = [];
    protected static $tabla = '';

    //Errores
    protected static $errores = [];

    //Definir la conexion a la DB
    public static function setDB($database){
        self::$db = $database;
    }

    // Identificar y unir los atributos de la BD
    public function atributos(){
        $atributos = [];
        foreach(static::$columnaDB as $columna){
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    protected static function crearObjecto($registro){
        $objeto = new static;
        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    public static function consultarSQL($query){
        // consultar a la base de datos
        $resultado = self::$db->query($query);
        //Iterar los resultados
        $array= [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjecto($registro);
        }
        //Liberar la memoria
        $resultado->free();

        //Retornar los resultados
        return $array;
    } 

    public function sincronizar($args = []){
        foreach($args as $key => $value){
            if(property_exists($this, $key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    // metodo listar
    public static function listar(){
        $query = "SELECT * FROM ".static::$tabla;
        $resultado = static::consultarSQL($query);
        //$resultado = self::$db->query($query);
        return $resultado;
        // return $resultado->fetch_array_assoc();
        // return mysqli_fetch_assoc($resultado);
    }

    public static function listarNombre($nombre) {
        $query = "SELECT * FROM ".static::$tabla. " WHERE nombre like '%".$nombre."%'";
        $resultado = static::consultarSQL($query);
        return $resultado;
    }
    
    // metodo crear
    public function crear(){
        //sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        $string = join(',',array_keys($atributos));
        $string1 = join("','",array_values($atributos));

        //Insertar en la base de datos
        $query = "INSERT INTO ".static::$tabla." ($string) values ('$string1')";
        $resultado = self::$db->query($query);

        return $resultado;
    }

    // metodo actualizar
    public function actualizar(){
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        $valores = [];

        foreach ($atributos as $key => $value) {
            $valores[] = "{$key} = '{$value}'";
        }

        $query = "UPDATE ".static::$tabla." SET ";
        $query .= join(',', $valores);
        $query .= " WHERE id ='".self::$db->escape_string($this->id)."'";
        $query .= " LIMIT 1";
        
        $resultado = self::$db->query($query);

        return $resultado;
    }

    

    // metodo eliminar
    public function eliminar(){
        //Eliminar el archivo
        $query = "DELETE FROM ". static::$tabla." WHERE id = ".self::$db->escape_string($this->id)." LIMIT 1";
        $resultado = self::$db->query($query);

        return $resultado;
    }

    //metodo para buscar un registro por su id en la tabla
    public static function find($id){
        $query = "SELECT * FROM ".static::$tabla." WHERE id= ${id}";
        $resultado = static::consultarSQL($query);
        return array_shift($resultado);
    }

    public function listarLimit($data, $get){
        $this->datoPagina = $data;
        $this->pagGet = $get;

        return ["pags"=>$this->paginacion(),"limit"=>$this->limit()];
    }

    public function paginacion(){
        $datos = count($this->listar());
        $paginas = $datos / $this->datoPagina ;
        
        return ceil($paginas);
    }

    public function limit(){
        
        $iniciar = ($this->pagGet-1)* $this->datoPagina;
        $sql = "SELECT * FROM ".static::$tabla." LIMIT ".$iniciar.",".$this->datoPagina."";
        $resultado = static::consultarSQL($sql);
        return $resultado;
    }
}