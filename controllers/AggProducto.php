<!-- include "../conexion.php";

$cn=conexionDB();

namespace Controllers;


use MVC\Router;

$categoria=$_POST['pro_categoria'];
$nombre=$_POST['pro_nombre'];
$descripcion=$_POST['pro_descripcion'];
$color=$_POST['pro_color'];
$precio=$_POST['pro_precio'];

$alto=$_POST['t-1'];
$ancho=$_POST['t-2'];
$tamano=$alto."X".$ancho;

$estado=$_POST['pro_activo'];

$img1 = $_FILES['pro_imagen1']['name'];
	$dirfinal = "../public/build/img/productos".$img1;
	copy($_FILES['pro_imagen1']['tmp_name'],$dirfinal);

$img2 = $_FILES['pro_imagen2']['name'];
	$dirfinal = "../public/build/img/productos".$img2;
	copy($_FILES['pro_imagen2']['tmp_name'],$dirfinal);

$img3 = $_FILES['pro_imagen3']['name'];
	$dirfinal = "../public/build/img/productos".$img3;
	copy($_FILES['pro_imagen3']['tmp_name'],$dirfinal);

$precioMul=$_POST['pro_precioMulti'];

public static function buscat()
{

	$query = "SELECT id FROM tab_categoria WHERE cat_nombre=".$categoria;
    $resultado = mysqli_query($cn, $query);
    return $resultado;

}

$catId=buscat();

$query = "INSERT INTO tab_producto values('$catId','$nombre','$descripcion','$precio','$tamano','$estado','$img1','$img2','$img3','$precioMul')";
$resultado =mysqli_query($cn, $query);

if ($resultado)
{
	header("location:producto.php");
}
else
{
	echo "<br>Error de Registro del Producto";
	exit();
}

?>