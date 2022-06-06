<?php 

	$signo='<i class="fa-solid fa-circle-minus"></i>';
	$listCart=null;
	

	if($listCart!=null)
		{ 

			$list=null;
			$id='<label id="id"></label>';
			$nombre='<label id="nombre"></label>';
			$precio='<label id="precio"></label>';
			$color='<label id="color"></label>';
			$list=array($id,$nombre,$precio,$color);
			array_push($listCart, $list);

		}
	else
		{

			$id='<label id="id"></label>';
			$nombre='<label id="nombre"></label>';
			$precio='<label id="precio"></label>';
			$color='<label id="color"></label>';
			$listCart[]=array($id,$nombre,$precio,$color);

		}

?>

<section class="bg-black pt-5 pb-5 text-white">
<div class="content-principal container mt-20">

	<div class="col-12 col-sm-12  border neontabla">
		<center><form>
		<h1 class= "neones" style="font-family:Roboto Condensed"><i class="fa-solid fa-cart-arrow-down"></i> Lista de Objetos de Compra</h1><br>
	
		<div class="responsive" style="width: 90%">
		<table class="table table-striped table-hover table-light table-fixed w-100" id="tablecart">
		<thead>
			<tr class="text-center">
				<th>ID PRODUCTO</th>
				<th>NOMBRE</th>
				<th>PRECIO</th>
				<th>COLOR</th>
				<th><i class="fa-solid fa-circle-minus"></i></th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($listCart != null) 
				{
					foreach ($listCart as $cart) 
					{
						echo "<tr class='text-center'>";
						echo "<th>$cart[0]</th>";
						echo "<th>$cart[1]</th>";
						echo "<th>$cart[2]</th>";
						echo "<th>$cart[3]</th>";
						// echo "<th>$color</th>";
						echo "<th>$signo</th>";
						echo "</tr>";
					}
				}
			?>
		</tbody>

		</table>
		</div>
		<div class="input-group">
            <button type="submit" class="neonbottonlanding btn btn-primary my-sm-3" id="grd" style="width: 30%">Guardar</button>
        </div>
		</form></center>
	</div>
<!--HOLA -->
</div>
</section>
<script src="build/js/ajax/ajax.cart.js"></script>
