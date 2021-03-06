<section>
	<div name="modalLead" id="modalLead" class="modal fade modalLead" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<!-- modal title -->
				<div class="modal-header text-center">
					<h5 class="modal-title mx-auto">Deixe seus dados e acesse a ferramenta</h5>
				</div>

				<form name="formLead" id="formLead" class="clearfix" method="post">
				<!-- modal content -->
				<div class="modal-body">
						<p class="text-center">
							<img src="img/login.png" alt="Ferramentas Rock Content" class=" mx-auto" width="210px">
						</p>
						<div class="col form-group">
							<label for="firstname">Nome</label>
							<input name="firstname" id="firstname" class="form-control" aria-describedby="emailHelp" placeholder="Fulano da Silva" required>
						</div>
						<div class="col form-group">
							<label for="email">E-mail</label>
							<input name="email" id="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="exemplo@empresa.com" required>
							<small id="emailHelp" class="form-text text-muted">De preferência seu email empresarial.</small>
						</div>
						<div class="col form-group">
							<label for="phone">Telefone</label>
							<input name="phone" id="phone" class="form-control" placeholder="00 0000-0000" required>
						</div>
						<div class="col form-group">
							<label for="website">Site da empresa</label>
							<input name="website" id="website" class="form-control" placeholder="http://www.site.com" required>
						</div>
						<div class="col form-group">
							<label for="industry">Área de atuação da empresa</label>
							<select name="industry" id="industry" class="form-control" required>
						        <option selected option:disabled value="" style="display: none;">Selecione a opção</option>
						        <option>Agência de Marketing/Publicidade</option>
						        <option>Tecnologia</option>
						        <option>Educação</option>
						        <option>Software e Cloud</option>
						        <option>e-commerce</option>
						        <option>Varejo</option>
						        <option>Consultoria</option>
						        <option>Mídia e Comunicação</option>
						        <option>Turismo e Lazer</option>
						        <option>Saúde</option>
						        <option>RH e Recrutamento</option>
						        <option>Dinheiro e Finanças</option>
						        <option>Serviços Corporativos</option>
						        <option>Jurídico</option>
						        <option>Industria e Manufatura</option>
						        <option>Outros</option>
						        <option>Não tenho empresa</option>
						        <option>Educação Superior</option>
						        <option>Saúde</option>
							</select>
						</div>
						<div class="col form-group">
							<label for="numemployees">Número de funcionários</label>
							<select name="numemployees" id="numemployees" class="form-control" required>
						        <option selected option:disabled value="" style="display: none;">Selecione a opção</option>
						        <option>Individual</option>
						        <option>2-5</option>
						        <option>5-25</option>
						        <option>25-50</option>
						        <option>50-100</option>
						        <option>100-200</option>
						        <option>200-500</option>
						        <option>500-1000</option>
						        <option>1000+</option>
						        <option>Não tenho empresa</option>
							</select>
						</div>
						<div class="col form-group">
							<label for="website_objective">Qual o maior desafio do seu site?</label>
							<select name="website_objective" id="website_objective" class="form-control" required>
						        <option selected option:disabled value="" style="display: none;">Selecione a opção</option>
						        <option>Atrair mais visitantes</option>
						        <option>Engajar os visitantes</option>
						        <option>Converter visitantes em novos negócios</option>
						        <option>Otimizar para gerar ainda mais vendas</option>
							</select>
						</div>

					</div>
					<div class="modal-footer text-center">
						<button name="enviar" id="enviar" type="submit" class="btn btn-info mx-auto">Acessar</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>
