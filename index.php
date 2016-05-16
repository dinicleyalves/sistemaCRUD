<?php require 'config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sisteminha CRD - Completo </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>

	 <div class="container">

	 <div id="botoes">
	 	<a href="./" class="blue darken-4 btn"><i class="mdi-action-home"></i> Início</a>

	 	<a href="?p=cadastrar" class="waves-effect waves-light btn"><i class="mdi-editor-border-color"> Cadastrar</i></a>	
	 </div>
	
 		<br><br>
		
	<?php echo isset($mensagem) ? $mensagem : "";?>

	 <div id="conteudo"><?php alterarPagina(); ?></div>

	 </div>

	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</body>
</html>