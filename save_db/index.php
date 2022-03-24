<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title>
	<head>
	<body>
	<style>
	   <style>
        body {
            background-color: #fff;
        }
        input {
            width: 100%;
            height: 60px;
            background-color: #808080 ;
            color: #fff;
            border-bottom: 1px solid black;
            margin-top: 10px;
            border: 0px solid #fff;
            border-bottom: 1px solid #fff;
            border-radius: 5px;
        }

        input:: {
            font-style: italic;
            font-size: 1em;
            color: mintcream;
            padding:30px;       
         }

	</style>



	<center>
		<h1>Upload da planilha Excel</h1>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Enviar">
		</form>
	</center>
	
		
	</body>
</html>