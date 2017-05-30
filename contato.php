<?php require_once("cabecalho.php"); ?>
<h2>Contato</h2>
	<form class="form-horizontal col-sm-offset-2" action="envia-contato.php" method="POST">
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nome" placeholder="Nome"></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">E-mail:</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" name="email" placeholder="E-mail" ></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Assunto:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="assunto" placeholder="Assunto" ></input>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Mensagem:</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="mensagem" placeholder="mensagem" ></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
      			<button type="submit" class="btn btn-primary">Enviar</button>
    		</div>
    	</div>
		
	</form>
<?php require_once("rodape.php"); ?>