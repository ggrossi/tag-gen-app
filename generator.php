<div class="col-12 col-sm-8">
	<div class="content-box">
		<form id="user-input">

			<h3>Meta Tags</h3>

			<div class="form-group row">
				<label for="title-input" class="col-sm-3 col-form-label">
					Título da página
					<a data-toggle="collapse" href="#title" aria-expanded="false" aria-controls="title"><i class="material-icons">help</i></a>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="title-input" placeholder="" maxlength="100">
					<div id="total-title" class="progress">
						<div id="progress-title" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="collapse" id="title">
						<small id="titleHelp" class="form-text text-muted">
							<p><strong>O title tag indica aos utilizadores e ao motor de busca qual o tópico de uma determinada página.</strong> O título de uma página deve ter uma média de 60 caracteres e deve falar do principal tema da página. É altamente indicado que seja inserido aqui a palavra-chave que você quer rankear.</p>
							<p>Dicas do Google:</p>
							<ul>
								<li>Descreva com precisão o conteúdo da sua página (resuma muito bem o que está na sua página);</li>
								<li>Crie títulos únicos para cada página (não tenha páginas em seu site com o mesmo título);</li>
								<li>Utilize títulos descritivos, mas curtos.</li>
							</ul>
							<p>Exemplo: Se uma sorveteria quer rankear para "Sorvete de Morango", é indicado que o título da página seja "Sorvete de Morango - Sorveteria do Manel".</p>
						</small>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="desc-input" class="col-sm-3 col-form-label">
					Descrição da página
					<a data-toggle="collapse" href="#description" aria-expanded="false" aria-controls="description"><i class="material-icons">help</i></a>
				</label>
				<div class="col-sm-9">
					<!--<input type="text" class="form-control" id="desc-input" placeholder="">-->
					<textarea class="form-control" name="desc-input" id="desc-input" rows="3" maxlength="160"></textarea>
					<div class="progress">
						<div id="progress-description" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="collapse" id="description">
						<small id="titleHelp" class="form-text text-muted">
							<p><strong>As meta tags descritivas são importantes pois o Google poderá utilizá-las como textos de descrição (<i data-toggle="tooltip" data-placement="top" title="Snippet é isso.">snippet</i>) das suas páginas.</strong> Ela será utilizada como texto de descrição da sua página. Dicas do Google:</p>
							<ul>
								<li>Descreva com precisão um resumo do conteúdo da sua página (evite escrever uma tag não relacionada com o conteúdo da sua página ou algo muito vago como "Esta é uma página do site X");</li>
								<li>Crie descrições únicas para cada página, assim o Google vai poder relacionar a busca de um indivíduo com seu conteúdo de uma melhor forma.</li>
							</ul>
						</small>
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="url-input" class="col-sm-3 col-form-label">
					URL da página
					<a data-toggle="collapse" href="#url" aria-expanded="false" aria-controls="url"><i class="material-icons">help</i></a>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="url-input" placeholder="">
					<div class="collapse" id="url">
						<small id="titleHelp" class="form-text text-muted">
							<p><strong>O title tag indica aos utilizadores do seu site e ao motor de busca qual o tópico de uma determinada página.</strong> O título de uma página deve ter uma média de 160 caracteres e deve falar do principal tema da página. É altamente indicado que seja inserido aqui a palavra-chave que você quer rankear. Dicas do Google:</p>
							<ul>
								<li>Descreva com precisão o conteúdo da sua página (resuma muito bem o que está na sua página);</li>
								<li>Crie títulos únicos para cada página (não tenha páginas em seu site com o mesmo título);</li>
								<li>Utilize títulos descritivos, mas curtos.</li>
							</ul>
						</small>
					</div>
				</div>
			</div>

			<div id="google" class="card google mx-auto">
				<div class="card-body">
    			<h6 class="card-subtitle mb-2 text-muted">Exemplo de como sua página vai aparecer no Google</h6>
					<div id="title-preview" class="googleTitle"></div>
					<div id="url-preview" class="googleURL"></div>
					<div id="desc-preview" class="googleDescription"></div>
        	</div>
			</div>

			<div class="form-group row">
				<label for="robots-input" class="col-sm-3 col-form-label">Robots</label>
				<div class="col-sm-9">
					<select class="form-control" id="robots-input">
						<option selected option:disabled  style="display: none;">Escolha uma opção</option>
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
			</div>

			<div class="form-group row">
				<label for="author-input" class="col-sm-3 col-form-label">Autor da página</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="author-input" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="lang-input" class="col-sm-3 col-form-label">Idioma</label>
				<!--<input type="text" class="form-control" id="lang-input" placeholder="">-->
				<div class="col-sm-9">
					<select class="form-control" id="lang-input">
						<option selected selected option:disabled  style="display: none;">Escolha o idioma</option>
						<option value="af">Afrikaans</option>
						<option value="af-ZA">Afrikaans (South Africa)</option>
						<option value="ar">Arabic</option>
						<option value="ar-AE">Arabic (U.A.E.)</option>
						<option value="ar-BH">Arabic (Bahrain)</option>
						<option value="ar-DZ">Arabic (Algeria)</option>
						<option value="ar-EG">Arabic (Egypt)</option>
						<option value="ar-IQ">Arabic (Iraq)</option>
						<option value="ar-JO">Arabic (Jordan)</option>
						<option value="ar-KW">Arabic (Kuwait)</option>
						<option value="ar-LB">Arabic (Lebanon)</option>
						<option value="ar-LY">Arabic (Libya)</option>
						<option value="ar-MA">Arabic (Morocco)</option>
						<option value="ar-OM">Arabic (Oman)</option>
						<option value="ar-QA">Arabic (Qatar)</option>
						<option value="ar-SA">Arabic (Saudi Arabia)</option>
						<option value="ar-SY">Arabic (Syria)</option>
						<option value="ar-TN">Arabic (Tunisia)</option>
						<option value="ar-YE">Arabic (Yemen)</option>
						<option value="az">Azeri</option>
						<option value="az-Cyrl-AZ">Azeri (Cyrillic, Azerbaijan)</option>
						<option value="az-Latn-AZ">Azeri (Latin, Azerbaijan)</option>
						<option value="be">Belarusian</option>
						<option value="be-BY">Belarusian (Belarus)</option>
						<option value="bg">Bulgarian</option>
						<option value="bg-BG">Bulgarian (Bulgaria)</option>
						<option value="bs-Latn-BA">Bosnian (Bosnia and Herzegovina)</option>
						<option value="ca">Catalan</option>
						<option value="ca-ES">Catalan (Catalan)</option>
						<option value="cs">Czech</option>
						<option value="cs-CZ">Czech (Czech Republic)</option>
						<option value="cy-GB">Welsh (United Kingdom)</option>
						<option value="da">Danish</option>
						<option value="da-DK">Danish (Denmark)</option>
						<option value="de">German</option>
						<option value="de-AT">German (Austria)</option>
						<option value="de-DE">German (Germany)</option>
						<option value="de-CH">German (Switzerland)</option>
						<option value="de-LI">German (Liechtenstein)</option>
						<option value="de-LU">German (Luxembourg)</option>
						<option value="dv">Divehi</option>
						<option value="dv-MV">Divehi (Maldives)</option>
						<option value="el">Greek</option>
						<option value="el-GR">Greek (Greece)</option>
						<option value="en">English</option>
						<option value="en-029">English (Caribbean)</option>
						<option value="en-AU">English (Australia)</option>
						<option value="en-BZ">English (Belize)</option>
						<option value="en-CA">English (Canada)</option>
						<option value="en-GB">English (United Kingdom)</option>
						<option value="en-IE">English (Ireland)</option>
						<option value="en-JM">English (Jamaica)</option>
						<option value="en-NZ">English (New Zealand)</option>
						<option value="en-PH">English (Republic of the Philippines)</option>
						<option value="en-TT">English (Trinidad and Tobago)</option>
						<option value="en-US">English (United States)</option>
						<option value="en-ZA">English (South Africa)</option>
						<option value="en-ZW">English (Zimbabwe)</option>
						<option value="es">Spanish</option>
						<option value="es-AR">Spanish (Argentina)</option>
						<option value="es-BO">Spanish (Bolivia)</option>
						<option value="es-CL">Spanish (Chile)</option>
						<option value="es-CO">Spanish (Colombia)</option>
						<option value="es-CR">Spanish (Costa Rica)</option>
						<option value="es-DO">Spanish (Dominican Republic)</option>
						<option value="es-EC">Spanish (Ecuador)</option>
						<option value="es-ES">Spanish (Spain)</option>
						<option value="es-GT">Spanish (Guatemala)</option>
						<option value="es-HN">Spanish (Honduras)</option>
						<option value="es-MX">Spanish (Mexico)</option>
						<option value="es-NI">Spanish (Nicaragua)</option>
						<option value="es-PA">Spanish (Panama)</option>
						<option value="es-PE">Spanish (Peru)</option>
						<option value="es-PR">Spanish (Puerto Rico)</option>
						<option value="es-PY">Spanish (Paraguay)</option>
						<option value="es-SV">Spanish (El Salvador)</option>
						<option value="es-UY">Spanish (Uruguay)</option>
						<option value="es-VE">Spanish (Venezuela)</option>
						<option value="et">Estonian</option>
						<option value="et-EE">Estonian (Estonia)</option>
						<option value="eu">Basque</option>
						<option value="eu-ES">Basque (Basque)</option>
						<option value="fa">Persian</option>
						<option value="fa-IR">Persian (Iran)</option>
						<option value="fi">Finnish</option>
						<option value="fi-FI">Finnish (Finland)</option>
						<option value="fo">Faroese</option>
						<option value="fo-FO">Faroese (Faroe Islands)</option>
						<option value="fr">French</option>
						<option value="fr-BE">French (Belgium)</option>
						<option value="fr-CA">French (Canada)</option>
						<option value="fr-FR">French (France)</option>
						<option value="fr-CH">French (Switzerland)</option>
						<option value="fr-LU">French (Luxembourg)</option>
						<option value="fr-MC">French (Principality of Monaco)</option>
						<option value="gl">Galician</option>
						<option value="gl-ES">Galician (Galician)</option>
						<option value="gu">Gujarati</option>
						<option value="gu-IN">Gujarati (India)</option>
						<option value="he">Hebrew</option>
						<option value="he-IL">Hebrew (Israel)</option>
						<option value="hi">Hindi</option>
						<option value="hi-IN">Hindi (India)</option>
						<option value="hr">Croatian</option>
						<option value="hr-BA">Croatian (Bosnia and Herzegovina)</option>
						<option value="hr-HR">Croatian (Croatia)</option>
						<option value="hu">Hungarian</option>
						<option value="hu-HU">Hungarian (Hungary)</option>
						<option value="hy">Armenian</option>
						<option value="hy-AM">Armenian (Armenia)</option>
						<option value="id">Indonesian</option>
						<option value="id-ID">Indonesian (Indonesia)</option>
						<option value="is">Icelandic</option>
						<option value="is-IS">Icelandic (Iceland)</option>
						<option value="it">Italian</option>
						<option value="it-CH">Italian (Switzerland)</option>
						<option value="it-IT">Italian (Italy)</option>
						<option value="ja">Japanese</option>
						<option value="ja-JP">Japanese (Japan)</option>
						<option value="ka">Georgian</option>
						<option value="ka-GE">Georgian (Georgia)</option>
						<option value="kk">Kazakh</option>
						<option value="kk-KZ">Kazakh (Kazakhstan)</option>
						<option value="kn">Kannada</option>
						<option value="kn-IN">Kannada (India)</option>
						<option value="ko">Korean</option>
						<option value="kok">Konkani</option>
						<option value="kok-IN">Konkani (India)</option>
						<option value="ko-KR">Korean (Korea)</option>
						<option value="ky">Kyrgyz</option>
						<option value="ky-KG">Kyrgyz (Kyrgyzstan)</option>
						<option value="lt">Lithuanian</option>
						<option value="lt-LT">Lithuanian (Lithuania)</option>
						<option value="lv">Latvian</option>
						<option value="lv-LV">Latvian (Latvia)</option>
						<option value="mi-NZ">Maori (New Zealand)</option>
						<option value="mk">Macedonian</option>
						<option value="mk-MK">Macedonian (Former Yugoslav Republic of Macedonia)</option>
						<option value="mn">Mongolian</option>
						<option value="mn-MN">Mongolian (Cyrillic, Mongolia)</option>
						<option value="mr">Marathi</option>
						<option value="mr-IN">Marathi (India)</option>
						<option value="ms">Malay</option>
						<option value="ms-BN">Malay (Brunei Darussalam)</option>
						<option value="ms-MY">Malay (Malaysia)</option>
						<option value="mt-MT">Maltese (Malta)</option>
						<option value="nb-NO">Norwegian, Bokmal (Norway)</option>
						<option value="nl">Dutch</option>
						<option value="nl-BE">Dutch (Belgium)</option>
						<option value="nl-NL">Dutch (Netherlands)</option>
						<option value="nn-NO">Norwegian, Nynorsk (Norway)</option>
						<option value="no">Norwegian</option>
						<option value="ns-ZA">Northern Sotho (South Africa)</option>
						<option value="pa">Punjabi</option>
						<option value="pa-IN">Punjabi (India)</option>
						<option value="pl">Polish</option>
						<option value="pl-PL">Polish (Poland)</option>
						<option value="pt">Portuguese</option>
						<option value="pt-BR">Portuguese (Brazil)</option>
						<option value="pt-PT">Portuguese (Portugal)</option>
						<option value="quz-BO">Quechua (Bolivia)</option>
						<option value="quz-EC">Quechua (Ecuador)</option>
						<option value="quz-PE">Quechua (Peru)</option>
						<option value="ro">Romanian</option>
						<option value="ro-RO">Romanian (Romania)</option>
						<option value="ru">Russian</option>
						<option value="ru-RU">Russian (Russia)</option>
						<option value="sa">Sanskrit</option>
						<option value="sa-IN">Sanskrit (India)</option>
						<option value="se-FI">Sami (Northern) (Finland)</option>
						<option value="se-NO">Sami (Northern) (Norway)</option>
						<option value="se-SE">Sami (Northern) (Sweden)</option>
						<option value="sk">Slovak</option>
						<option value="sk-SK">Slovak (Slovakia)</option>
						<option value="sl">Slovenian</option>
						<option value="sl-SI">Slovenian (Slovenia)</option>
						<option value="sma-NO">Sami (Southern) (Norway)</option>
						<option value="sma-SE">Sami (Southern) (Sweden)</option>
						<option value="smj-NO">Sami (Lule) (Norway)</option>
						<option value="smj-SE">Sami (Lule) (Sweden)</option>
						<option value="smn-FI">Sami (Inari) (Finland)</option>
						<option value="sms-FI">Sami (Skolt) (Finland)</option>
						<option value="sq">Albanian</option>
						<option value="sq-AL">Albanian (Albania)</option>
						<option value="sr">Serbian</option>
						<option value="sr-Cyrl-BA">Serbian (Cyrillic) (Bosnia and Herzegovina)</option>
						<option value="sr-Cyrl-CS">Serbian (Cyrillic, Serbia)</option>
						<option value="sr-Latn-BA">Serbian (Latin) (Bosnia and Herzegovina)</option>
						<option value="sr-Latn-CS">Serbian (Latin, Serbia)</option>
						<option value="sv">Swedish</option>
						<option value="sv-FI">Swedish (Finland)</option>
						<option value="sv-SE">Swedish (Sweden)</option>
						<option value="sw">Kiswahili</option>
						<option value="sw-KE">Kiswahili (Kenya)</option>
						<option value="syr">Syriac</option>
						<option value="syr-SY">Syriac (Syria)</option>
						<option value="ta">Tamil</option>
						<option value="ta-IN">Tamil (India)</option>
						<option value="te">Telugu</option>
						<option value="te-IN">Telugu (India)</option>
						<option value="th">Thai</option>
						<option value="th-TH">Thai (Thailand)</option>
						<option value="tn-ZA">Tswana (South Africa)</option>
						<option value="tr">Turkish</option>
						<option value="tr-TR">Turkish (Turkey)</option>
						<option value="tt">Tatar</option>
						<option value="tt-RU">Tatar (Russia)</option>
						<option value="uk">Ukrainian</option>
						<option value="uk-UA">Ukrainian (Ukraine)</option>
						<option value="ur">Urdu</option>
						<option value="ur-PK">Urdu (Islamic Republic of Pakistan)</option>
						<option value="uz">Uzbek</option>
						<option value="uz-Cyrl-UZ">Uzbek (Cyrillic, Uzbekistan)</option>
						<option value="uz-Latn-UZ">Uzbek (Latin, Uzbekistan)</option>
						<option value="vi">Vietnamese</option>
						<option value="vi-VN">Vietnamese (Vietnam)</option>
						<option value="xh-ZA">Xhosa (South Africa)</option>
						<option value="zh-CN">Chinese (People's Republic of China)</option>
						<option value="zh-HK">Chinese (Hong Kong S.A.R.)</option>
						<option value="zh-CHS">Chinese (Simplified)</option>
						<option value="zh-CHT">Chinese (Traditional)</option>
						<option value="zh-MO">Chinese (Macao S.A.R.)</option>
						<option value="zh-SG">Chinese (Singapore)</option>
						<option value="zh-TW">Chinese (Taiwan)</option>
						<option value="zu-ZA">Zulu (South Africa)</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Keywords</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="key-input" placeholder="Palavras chave separadas por vírgula">
				</div>
			</div>

			<hr class="my-4">

			<h3>Open Graph</h3>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Título</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogtitle-input" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">URL</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogurl-input" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">URL da imagem</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogimageInput" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Autor</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogauthor-input" placeholder="">
				</div>
			</div>

			<div id="og" class="card og mx-auto">
				<div class="card-body">
    			<h6 class="card-subtitle mb-2 text-muted">Exemplo de como sua página vai aparecer no Facebook</h6>
					<div><img id="ogimgUserPreview" class="img-fluid"></div>
					<div id="ogtitle-user-preview" class="ogTitle"></div>
					<div id="ogdesc-user-preview" class="ogDescription"></div>
					<div id="ogurl-user-preview" class="ogURL"></div>
				</div>
			</div>

			<hr class="my-4">
			<h3>Twitter Card</h3>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Username</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ttsite-input" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Username</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ttcreator-input" placeholder="">
				</div>
			</div>

			<hr class="my-4">
			<h3>Outros</h3>

			<div class="form-group row">
				<label for="" class="col-sm-3 col-form-label">ID Analytics</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="analytics-input" placeholder="Exemplo: UA-12345678-90" maxlength="20">
				</div>
			</div>

			<div class="form-group row">
				<label for="" class="col-sm-3 col-form-label">ID Tag Manager</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="tagmng-input" placeholder="Exemplo: GTM-ABCDE1" maxlength="20">
				</div>
			</div>

			<div class="form-group row">
				<label for="bootstrap-input" class="col-sm-3 col-form-label">Bootstrap</label>
				<div class="col-sm-9">
					<div class="form-checkbox">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" id="bootstrap-check">
							Incluir
						</label>
					</div>
				</div>
			</div>

		</form>
	</div>
</div>

<div class="col-12 col-sm-4">
	<div id="user-data" class="content-box bg-dark text-white">
		<pre><code id="code-copy" class="language-html" data-lang="html"><?php include 'code.php'; ?></code></pre>
		<div class="text-right">
			<a href="#" class="btn btn-outline-light btn-sm" id="copy-code-btn">Copiar</a>
		</div>
	</div>
</div>
