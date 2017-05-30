<?php 	require_once("cabecalho.php");
		require_once("banco-categoria.php");
		require_once("logica-usuario.php");

	verificaUsuario();	
		
		$produto = array("nome" =>"" ,"descricao" =>"", "preco" => "","categoria_id" => "1" );
		$usado = "";
		$categorias = listaCategorias($conexao);
 ?>
	<h1>Formulario de produto</h1>
	<form class="form-horizontal col-sm-offset-2" action="adiciona-produto.php" method="post">
		
		<?php require_once("produto-formulario-base.php"); ?>

		<!--SUBMIT-->
		<button type="submit" class="btn btn-primary" >
			Cadastrar
		</button>
	</form>

<?php require_once("rodape.php"); ?>