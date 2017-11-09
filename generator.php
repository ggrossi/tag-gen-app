<div class="col-6">
	<div class="content-box">
		<form id="user-input">

			<div class="form-group">
				<label for="exampleFormControlInput1">Título da página</label>
				<input type="text" class="form-control" id="nome-pag" placeholder="">
			</div>

			<div class="form-group">
				<label for="exampleFormControlInput1">Descrição da página</label>
				<input type="text" class="form-control" id="desc-pag" placeholder="">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Robots</label>
				<select class="form-control" id="index-pag">
					<option>index</option>
					<option>noindex</option>
					<option>follow</option>
					<option>nofollow</option>
					<option>index,follow</option>
					<option>index,nofollow</option>
					<option>noindex,follow</option>
					<option>noindex,nofollow</option>
				</select>
			</div>

			<div class="form-group">
				<label for="exampleFormControlInput1">Autor da página</label>
				<input type="text" class="form-control" id="autor-pag" placeholder="">
			</div>

		</form>
	</div>
</div>

<div class="col-6">
	<div id="user-data" class="content-box">
		<div class="jumbotron">
			<p class="display-4">Código</p>
			<p>Substitua as tags <code>&lt;head&gt;&lt;/head&gt;</code> do seu código pelo conteúdo abaixo:</p>
			<hr class="my-4">
			<code>
				<?php include 'code.php'; ?>
			</code>
		</div>
	</div>	
</div>