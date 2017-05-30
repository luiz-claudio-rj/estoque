<?php 	require_once("cabecalho.php");
		require_once("banco-categoria.php");
		require_once("banco-produto.php");

		$id = $_GET['id'];
		$produto = buscaProduto($conexao, $id);
		$categorias = listaCategorias($conexao);
		$usado = $produto['usado'] ? "checked='checked'" : ""; 
?>
	<h1>Formulario de alteracao de produto</h1>
	<form class="form-horizontal col-sm-offset-2" action="altera-produto.php" method="post">
		
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		
		<?php require_once("produto-formulario-base.php"); ?>

		<!--SUBMIT-->
		<button type="submit" class="btn btn-primary" >
			Alterar
		</button>
	</form>

<?php require_once("rodape.php"); ?>