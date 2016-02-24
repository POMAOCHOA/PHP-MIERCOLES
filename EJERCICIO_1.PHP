<?php 

print_r(getProductos(1(2(3)));

function getproductos($id)
{
if($id == 1):
	return [
                 'nombre' =>'Zapatillas',
                 'precio' => 200.00,
                 'stock' => 2
                 ];
endif;

if($id == 2):
return [
                 'nombre' => 'Pelotas',
                 'precio' => 60.00,
                 'stock' => 5
];
endif;

if($id == 3):
return [
                 'nombre' => 'Polo',
                 'precio' => 80.00,
                 'stock' => 10
];
endif;

}

 ?>