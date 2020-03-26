<?php 
require 'config.php';
require 'db_functions.php';

//multiline insert:
//INSERT INTO quotes 
//(author, quote) 
//VALUES
//('Mike', 'test'),
//('Mike', 'test_2');

$link = db_connect($cms_db_hostname, $cms_db_user, $cms_db_password, $cms_db_name);

$qoutes_count = get_quotes_count($link);
$qoutes_count = get_quotes_count_good($link);

// Generate random id
$random_id = rand (1, $qoutes_count);

$quote_text = get_quote($link, $random_id);

echo($quote_text);

db_connection_close($link);
