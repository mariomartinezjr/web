<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>


<?php 

$teste = array(
             0 => array ( "nome" => "Mario", 
			   "idade" => 37,
                "Sobrenome" => "Martinez"
               )
			   );

$teste [] =  array ("nome" => "Gandalf", 
			   "idade" => 500,
                "Sobrenome" => "o cinzento"
);


print_r($teste);
 ?>
</body>
</html>