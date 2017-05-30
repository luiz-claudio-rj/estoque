<!--NOME-->
		<div class="row">
			<div class="form-group ">
				<label class="col-sm-2 control-label">Nome:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="nome" value="<?=$produto['nome']?>"></input>
				</div>
			</div>
		</div>

		<!--VALOR-->
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Valor:</label>
				<div class="col-sm-6">
					<input type="number" class="form-control" name="preco" value="<?=$produto['preco']?>">
				</div>
			</div>
		</div>

		<!--DESCRICAO-->
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Descricao:</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
					<div class="checkbox col-sm-1">
						<label>
							<input type="checkbox" name="usado" <?=$usado?>> Usado
						</label>
					</div>
				</div>
			</div>
		</div>

		<!--CATEGORIA-->
		<div class="row">
			<div class="form-group">
				<label class="col-sm-2 control-label">Categoria:</label>
				<div class="col-sm-6">
					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria): 
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
 							$selecao = $essaEhACategoria ? "selected='selected'" : "";
						?>
							<option  value="<?=$categoria['id']?>" <?=$selecao?>>
								<?=$categoria['nome']?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>