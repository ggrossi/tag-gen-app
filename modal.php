<div name="modalLead" id="modalLead" class="modal fade" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<!-- modal title -->
			<div class="modal-header">
				<h5 class="modal-title mx-auto">Deixe seus dados e acesse a ferramenta</h5>
			</div>

			<!-- modal content -->
			<div class="modal-body">
				<form name="formLead" id="formLead" class="clearfix" method="post">
					<p class="text-center">
						<img src="https://get.google.com/trips/img/graphic-benefit-2--balloon.png" alt="Ferramentas Rock Content" class="img-fluid" width="180px">
					</p>
					<div class="col form-group">
						<label for="nome">Nome</label>
						<input name="nome" id="nome" class="form-control" aria-describedby="emailHelp" placeholder="Fulano da Silva">
					</div>
					<div class="col form-group">
						<label for="email">E-mail</label>
						<input name="email" id="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="exemplo@empresa.com">
						<small id="emailHelp" class="form-text text-muted">De preferência seu email empresarial.</small>
					</div>
					<div class="col form-group">
						<label for="empresa">Empresa</label>
						<input name="empresa" id="empresa" class="form-control" placeholder="">
					</div>
					<div class="col form-group">
						<label for="funcionarios">Número de funcionários</label>
						<select name="funcionarios" id="funcionarios" class="form-control">
			        <option selected>Selecione</option>
			        <option>1</option>
			        <option>2 a 10</option>
			        <option>11 a 100</option>
			        <option>101 a 500</option>
			        <option>501 ou mais</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer text-center">
				<button name="enviar" id="enviar" type="submit" class="btn btn-primary mx-auto">Acessar</button>
			</div>

		</div>
	</div>
</div>
