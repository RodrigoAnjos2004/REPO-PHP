<?php

	include_once("conexao.php");
	
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){

				$sabor = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
				echo "Nome: $sabor <br>";
				
				$tamanho = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				echo "tamanho: $tamanho <br>";
				
					
				$valor = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				echo "valor: $valor <br>";
				
				echo "<hr>";
				
				//Inserir o usuário no BD
				$result_usuario = "INSERT INTO pizzas(idpizza, sabor, tamanho , valor) VALUES (default, '$sabor', '$tamanho','$valor')";
				$resultado_usuario = mysqli_query($conn, $result_usuario);
			}
			$primeira_linha = false;
		}
	}
?>