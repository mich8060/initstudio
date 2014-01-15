<?

	$lang = 'en';
	$query = 'jakets';

	$url = 'http://suggestqueries.google.com/complete/search?output=firefox&client=firefox&hl=' . $lang . '&q=' . urlencode($query);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.0; rv:2.0.1) Gecko/20100101 Firefox/4.0.1");
	$data = curl_exec($ch);
	curl_close($ch);

	$suggestions = json_decode($data, true);
	header('Content-type: text/json');
	header('Content-type: application/json');

	if ($suggestions) {
	    echo 'suggestions: ';
	    print_r($suggestions);
	} else {
	    echo 'no suggestion';
	}

?>