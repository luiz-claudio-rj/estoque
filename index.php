<?php 	require_once("cabecalho.php"); 
		    require_once("logica-usuario.php");
?>

	<h1>Bem Vindo!</h1>

<?php if (usuarioEstaLogado()) { ?>
	<p class="text-success">Voce esta logado como <?= usuarioLogado() ?></p> <a class="btn btn-danger" href="logout.php">Deslogar</a> 
<?php } else { ?>

	<h2>Login</h2>
	<form class="form-horizontal col-sm-offset-2" action="login.php" method="POST">
  		<div class="form-group ">
    		<label for="email" class="col-sm-2 control-label">Email</label>
   			 <div class="col-sm-6">
     			 <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="password" class="col-sm-2 control-label">Senha</label>
   			<div class="col-sm-6">
      			<input type="password" class="form-control" id="password" name="senha" placeholder="Senha">
    		</div>
  		</div>
  		<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-primary">Login</button>
    	</div>
		
	</form>	
<?php } ?>
<?php require_once("rodape.php"); ?>