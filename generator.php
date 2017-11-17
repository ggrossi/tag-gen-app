<div class="col-4">
	<div class="content-box">
		<form id="user-input">

			<p>Meta Tags</p>

			<div class="form-group">
				<label for="exampleFormControlInput1">Título da página</label>
				<input type="text" class="form-control" id="title-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Descrição da página</label>
				<input type="text" class="form-control" id="desc-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Robots</label>
				<select class="form-control" id="robots-input">
					<option>all</option>
					<option>none</option>
					<option>index</option>
					<option>follow</option>
					<option>noindex</option>
					<option>nofollow</option>
					<option>noimageclick</option>
					<option>noimageindex</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Autor da página</label>
				<input type="text" class="form-control" id="author-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Idioma</label>
				<input type="text" class="form-control" id="lang-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Keywords (Palavras chave separadas por vírgula)</label>
				<input type="text" class="form-control" id="key-input" placeholder="">
			</div>

			<hr class="my-4">
			<p>Open Graph</p>

			<div class="form-group">
				<label for="exampleFormControlInput1">Tipo</label>
				<input type="text" class="form-control" id="ogtype-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Título</label>
				<input type="text" class="form-control" id="ogtitle-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">URL</label>
				<input type="text" class="form-control" id="ogurl-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">URL da imagem</label>
				<input type="text" class="form-control" id="ogimage-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Autor</label>
				<input type="text" class="form-control" id="ogauthor-input" placeholder="">
			</div>

			<hr class="my-4">
			<p>Twitter Card</p>

			<div class="form-group">
				<label for="exampleFormControlInput1">Tipo</label>
				<input type="text" class="form-control" id="ttcard-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Username</label>
				<input type="text" class="form-control" id="ttsite-input" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Username</label>
				<input type="text" class="form-control" id="ttcreator-input" placeholder="">
			</div>

		</form>
	</div>
</div>

<div class="col-8">
	<div id="user-data" class="content-box">
		<div class="jumbotron">
			<!-- <p class="display-4">Código</p> -->
			<p>Copie o código abaixo e salve com o nome de <samp>index.html</samp></p>
			<hr class="my-4">
			<code>
				<?php include 'code.php'; ?>
			</code>
		</div>
	</div>	
</div>