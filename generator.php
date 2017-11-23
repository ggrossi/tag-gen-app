<div class="col-8">
	<div class="content-box">
		<form id="user-input">

			<h3>Meta Tags</h3>

			<div class="form-group row">
				<label for="title-input" class="col-sm-3 col-form-label">
					Título da página
					<a data-toggle="collapse" href="#title" aria-expanded="false" aria-controls="title"><i class="material-icons">help</i></a>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="title-input" placeholder="">
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

					<div class="collapse" id="title">
						<small id="titleHelp" class="form-text text-muted">
							<p><strong>O title tag indica aos utilizadores e ao motor de busca qual o tópico de uma determinada página.</strong> O título de uma página deve ter uma média de 160 caracteres e deve falar do principal tema da página. É altamente indicado que seja inserido aqui a palavra-chave que você quer rankear.</p>
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
					<textarea class="form-control" name="desc-input" id="desc-input" rows="3"></textarea>
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
						<div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
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
					<a data-toggle="collapse" href="#collapseUrlInput" aria-expanded="false" aria-controls="collapseUrlInput"><i class="material-icons">help</i></a>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="url-input" placeholder="">
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

			<div class="card google mx-auto">
				<div class="card-body">
    			<h6 class="card-subtitle mb-2 text-muted">Exemplo de como sua página vai aparecer no Google</h6>
					<div class="googleTitle">Marketing digital: entenda o que é o marketing online e como fazer</div>
					<div class="googleURL">https://marketingdeconteudo.com/marketing-digital/</div>
					<div class="googleDescription">Aprenda o que é marketing digital, explore o conceito, entenda como fazer e conheça os principais cursos neste guia completo sobre o Marketing.</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="robots-input" class="col-sm-3 col-form-label">Robots</label>
				<div class="col-sm-9">
					<select class="form-control" id="robots-input">
						<option selected>Escolha uma opção</option>
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
						<option selected>Escolha a linguagem</option>
						<option>Abkhazian	ab</option>
						<option>Afar	aa</option>
						<option>Afrikaans	af</option>
						<option>Akan	ak</option>
						<option>Albanian	sq</option>
						<option>Amharic	am</option>
						<option>Arabic	ar</option>
						<option>Aragonese	an</option>
						<option>Armenian	hy</option>
						<option>Assamese	as</option>
						<option>Avaric	av</option>
						<option>Avestan	ae</option>
						<option>Aymara	ay</option>
						<option>Azerbaijani	az</option>
						<option>Bambara	bm</option>
						<option>Bashkir	ba</option>
						<option>Basque	eu</option>
						<option>Belarusian	be</option>
						<option>Bengali (Bangla)	bn</option>
						<option>Bihari	bh</option>
						<option>Bislama	bi</option>
						<option>Bosnian	bs</option>
						<option>Breton	br</option>
						<option>Bulgarian	bg</option>
						<option>Burmese	my</option>
						<option>Catalan	ca</option>
						<option>Chamorro	ch</option>
						<option>Chechen	ce</option>
						<option>Chichewa, Chewa, Nyanja	ny</option>
						<option>Chinese	zh</option>
						<option>Chinese (Simplified)	zh-Hans</option>
						<option>Chinese (Traditional)	zh-Hant</option>
						<option>Chuvash	cv</option>
						<option>Cornish	kw</option>
						<option>Corsican	co</option>
						<option>Cree	cr</option>
						<option>Croatian	hr</option>
						<option>Czech	cs</option>
						<option>Danish	da</option>
						<option>Divehi, Dhivehi, Maldivian	dv</option>
						<option>Dutch	nl</option>
						<option>Dzongkha	dz</option>
						<option>English	en</option>
						<option>Esperanto	eo</option>
						<option>Estonian	et</option>
						<option>Ewe	ee</option>
						<option>Faroese	fo</option>
						<option>Fijian	fj</option>
						<option>Finnish	fi</option>
						<option>French	fr</option>
						<option>Fula, Fulah, Pulaar, Pular	ff</option>
						<option>Galician	gl</option>
						<option>Gaelic (Scottish)	gd</option>
						<option>Gaelic (Manx)	gv</option>
						<option>Georgian	ka</option>
						<option>German	de</option>
						<option>Greek	el</option>
						<option>Greenlandic	kl</option>
						<option>Guarani	gn</option>
						<option>Gujarati	gu</option>
						<option>Haitian Creole	ht</option>
						<option>Hausa	ha</option>
						<option>Hebrew	he</option>
						<option>Herero	hz</option>
						<option>Hindi	hi</option>
						<option>Hiri Motu	ho</option>
						<option>Hungarian	hu</option>
						<option>Icelandic	is</option>
						<option>Ido	io</option>
						<option>Igbo	ig</option>
						<option>Indonesian	id, in</option>
						<option>Interlingua	ia</option>
						<option>Interlingue	ie</option>
						<option>Inuktitut	iu</option>
						<option>Inupiak	ik</option>
						<option>Irish	ga</option>
						<option>Italian	it</option>
						<option>Japanese	ja</option>
						<option>Javanese	jv</option>
						<option>Kalaallisut, Greenlandic	kl</option>
						<option>Kannada	kn</option>
						<option>Kanuri	kr</option>
						<option>Kashmiri	ks</option>
						<option>Kazakh	kk</option>
						<option>Khmer	km</option>
						<option>Kikuyu	ki</option>
						<option>Kinyarwanda (Rwanda)	rw</option>
						<option>Kirundi	rn</option>
						<option>Kyrgyz	ky</option>
						<option>Komi	kv</option>
						<option>Kongo	kg</option>
						<option>Korean	ko</option>
						<option>Kurdish	ku</option>
						<option>Kwanyama	kj</option>
						<option>Lao	lo</option>
						<option>Latin	la</option>
						<option>Latvian (Lettish)	lv</option>
						<option>Limburgish ( Limburger)	li</option>
						<option>Lingala	ln</option>
						<option>Lithuanian	lt</option>
						<option>Luga-Katanga	lu</option>
						<option>Luganda, Ganda	lg</option>
						<option>Luxembourgish	lb</option>
						<option>Manx	gv</option>
						<option>Macedonian	mk</option>
						<option>Malagasy	mg</option>
						<option>Malay	ms</option>
						<option>Malayalam	ml</option>
						<option>Maltese	mt</option>
						<option>Maori	mi</option>
						<option>Marathi	mr</option>
						<option>Marshallese	mh</option>
						<option>Moldavian	mo</option>
						<option>Mongolian	mn</option>
						<option>Nauru	na</option>
						<option>Navajo	nv</option>
						<option>Ndonga	ng</option>
						<option>Northern Ndebele	nd</option>
						<option>Nepali	ne</option>
						<option>Norwegian	no</option>
						<option>Norwegian bokmål	nb</option>
						<option>Norwegian nynorsk	nn</option>
						<option>Nuosu	ii</option>
						<option>Occitan	oc</option>
						<option>Ojibwe	oj</option>
						<option>Old Church Slavonic, Old Bulgarian	cu</option>
						<option>Oriya	or</option>
						<option>Oromo (Afaan Oromo)	om</option>
						<option>Ossetian	os</option>
						<option>Pāli	pi</option>
						<option>Pashto, Pushto	ps</option>
						<option>Persian (Farsi)	fa</option>
						<option>Polish	pl</option>
						<option>Portuguese	pt</option>
						<option>Punjabi (Eastern)	pa</option>
						<option>Quechua	qu</option>
						<option>Romansh	rm</option>
						<option>Romanian	ro</option>
						<option>Russian	ru</option>
						<option>Sami	se</option>
						<option>Samoan	sm</option>
						<option>Sango	sg</option>
						<option>Sanskrit	sa</option>
						<option>Serbian	sr</option>
						<option>Serbo-Croatian	sh</option>
						<option>Sesotho	st</option>
						<option>Setswana	tn</option>
						<option>Shona	sn</option>
						<option>Sichuan Yi	ii</option>
						<option>Sindhi	sd</option>
						<option>Sinhalese	si</option>
						<option>Siswati	ss</option>
						<option>Slovak	sk</option>
						<option>Slovenian	sl</option>
						<option>Somali	so</option>
						<option>Southern Ndebele	nr</option>
						<option>Spanish	es</option>
						<option>Sundanese	su</option>
						<option>Swahili (Kiswahili)	sw</option>
						<option>Swati	ss</option>
						<option>Swedish	sv</option>
						<option>Tagalog	tl</option>
						<option>Tahitian	ty</option>
						<option>Tajik	tg</option>
						<option>Tamil	ta</option>
						<option>Tatar	tt</option>
						<option>Telugu	te</option>
						<option>Thai	th</option>
						<option>Tibetan	bo</option>
						<option>Tigrinya	ti</option>
						<option>Tonga	to</option>
						<option>Tsonga	ts</option>
						<option>Turkish	tr</option>
						<option>Turkmen	tk</option>
						<option>Twi	tw</option>
						<option>Uyghur	ug</option>
						<option>Ukrainian	uk</option>
						<option>Urdu	ur</option>
						<option>Uzbek	uz</option>
						<option>Venda	ve</option>
						<option>Vietnamese	vi</option>
						<option>Volapük	vo</option>
						<option>Wallon	wa</option>
						<option>Welsh	cy</option>
						<option>Wolof	wo</option>
						<option>Western Frisian	fy</option>
						<option>Xhosa	xh</option>
						<option>Yiddish	yi, ji</option>
						<option>Yoruba	yo</option>
						<option>Zhuang, Chuang	za</option>
						<option>Zulu	zu</option>
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

			<div class="card og mx-auto">
				<div class="card-body">
    			<h6 class="card-subtitle mb-2 text-muted">Exemplo de como sua página vai aparecer no Facebook</h6>
					<div><img src="https://marketingdeconteudo.com/wp-content/uploads/2014/12/marketing-digital-1.png" alt="" class="img-fluid"></div>
					<div class="ogTitle">Marketing digital: entenda o que é o marketing online e como fazer</div>
					<div class="ogDescription">Aprenda o que é marketing digital, explore o conceito, entenda como fazer e conheça os principais cursos neste guia completo sobre o Marketing.</div>
					<div class="ogURL">marketingdeconteudo.com</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Tipo</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogtype-input" placeholder="">
				</div>
			</div>

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
					<input type="text" class="form-control" id="ogimage-input" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Autor</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ogauthor-input" placeholder="">
				</div>
			</div>

			<hr class="my-4">
			<h3>Twitter Card</h3>

			<div class="form-group row">
				<label for="exampleFormControlInput1" class="col-sm-3 col-form-label">Tipo</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="ttcard-input" placeholder="">
				</div>
			</div>

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
				<label for="" class="col-sm-3 col-form-label">Analytics</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="" placeholder="Código do Google Analytics">
				</div>
			</div>

			<div class="form-group row">
				<label for="" class="col-sm-3 col-form-label">Bootstrap</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="" class="col-sm-3 col-form-label">Tag Manager</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="" placeholder="Código do Google Tag Manager">
				</div>
			</div>

		</form>
	</div>
</div>

<div class="col-4">
	<div id="user-data" class="content-box">
		<pre><code class="language-html" data-lang="html"><?php include 'code.php'; ?></code></pre>
	</div>
</div>
