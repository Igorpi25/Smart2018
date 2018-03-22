<?php

define('DATA_FILE', 'data.json');

function getMessages() {
	$json = file_get_contents(DATA_FILE);
	return json_decode($json, true);
}

function saveMessages($messages) {
	$json = json_encode($messages, JSON_PRETTY_PRINT);
	file_put_contents(DATA_FILE, $json);
}

function addMessageToFile($text, $name = 'Igor') {
	$messages = getMessages();
	$messages[] = [
		"name" => $name,
		"text" => $text,
		"date" => date('Y-m-d H:i:s')
	];
	saveMessages($messages);
}