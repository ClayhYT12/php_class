<!DOCTYPE html>
<html>
	<head>

		<title>Aula 1</title>

	</head>

	<body>	
		<?php
			class pessoa{

					private $nome;

					function setNome($nome){

						$this -> nome = $nome;

						
					}

					function getNome(){

						return $this -> nome;

					}

			}

		?>

	</body>

</html>