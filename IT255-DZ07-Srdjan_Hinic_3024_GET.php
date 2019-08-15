<?php
// Get all possible anagrams for a word over an external API!
$a = $_GET['a'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.anagramica.com/all/' . $a);

$result = curl_exec($ch);

?>
