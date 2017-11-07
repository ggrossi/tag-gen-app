<?php
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$hs_context      = array(
		'hutk' => $hubspotutk,
		'ipAddress' => $ip_addr,
		'pageUrl' => 'https://rockcontent.com/ferramentas',
		'pageName' => 'O Incrível Gerador de Meta Tags',
	);
	$hs_context_json = json_encode($hs_context);

	//Need to populate these variable with values from the form.
	$str_post = "&email=" . urlencode($_POST['email'])
		. "&hs_context=" . urlencode($hs_context_json);

	//replace the values in this URL with your portal ID and your form GUID
	$endpoint = 'https://forms.hubspot.com/uploads/form/v2/355484/5b56926e-06f1-47c6-8d03-c69a77d9e2c7';

	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);
	echo $status_code . " " . $response;
?>