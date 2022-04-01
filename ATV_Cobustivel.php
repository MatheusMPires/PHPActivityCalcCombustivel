<html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php

// comentarios

/*

bloco de notas uuu
uuuu

*/




?>

<p><h2>Venda de Combustivel</h2></p><hr><br>

<form method="POST" action="">

<p> Quantidade em Litros: <input type="number" name="valor" value="1"/></p> 
<p>Gasolina: <input type="radio" name="Combustivel" value="Gasolina"/></p>
<p>Etanol: <input type="radio" name="Combustivel" value="Etanol"/></p>
<p>Disel: <input type="radio" name="Combustivel" value="Disel"/></p>
<p>GNV: <input type="radio" name="Combustivel" value="GNV"/></p>

  
<p> <input type="submit" value="Calcular"/></p>

</form>
<hr>
<?php

	 $a = $_POST['valor'];
	 $b = $_POST['Combustivel'];

	 $resultado = 0;
	 $preco = 0;
	 $desconto = 0;

	if($b =="Gasolina"){

	$preco = 7.699;

	  if($a <= 20){

	  $resultado = $a * $preco;

	  $desconto = $resultado * (4/100);

	  $resultado = $resultado - $desconto;

	   $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	 echo "Gasolina ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	  echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado ;

	  }else{

	  $resultado = $a * $preco;

	  $desconto = $resultado * (6/100);

	  $resultado = $resultado - $desconto;

	  $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	  echo "Gasolina ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	   echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado;

	 

	 
	  }
	  }

	 else if($b =="Etanol"){

	$preco = 5.799;

	  if($a <= 20){

	  $resultado = $a * $preco;

	  $desconto = $resultado * (3/100);

	  $resultado = $resultado - $desconto;

	   $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	  echo "Etanol ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	  echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado;

	  }else{

	  $resultado = $a * $preco;

	  $desconto = $resultado * (5/100);

	  $resultado = $resultado - $desconto;

	   $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	  echo "Etanol". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	   echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado;

	 

	 
	  }
	  }

	 else if($b =="Disel"){

	$preco = 3.699;

	  if($a <= 20){

	  $resultado = $a * $preco;

	  $desconto = $resultado * (3/100);

	  $resultado = $resultado - $desconto;

	   $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	  echo "Disel ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	  echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado;

	  }else{

	  $resultado = $a * $preco;

	  $desconto = $resultado * (5/100);

	  $resultado = $resultado - $desconto;

	 $resultado = number_format($resultado, 2, '.', '');
	 $desconto = number_format($desconto, 2, '.', '');

	  echo "Disel ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	   echo "Desconto: R$:" .$desconto . "<br>";
	  echo "Valor a pagar: R$:" .$resultado;

	 

	 
	  }

	}

	else if($b =="GNV"){

	$preco = 4.499;


	  $resultado = $a * $preco;

	 $resultado = number_format($resultado, 2, '.', '');
	 
	  echo "GNV ". "<br>" . "Litros Vendidos : ". $a."<br>"; 
	  echo "Valor a pagar: R$:" .$resultado;

	
	 
	  }else{
			echo"erro";
	  }


	 

?>


</html>
