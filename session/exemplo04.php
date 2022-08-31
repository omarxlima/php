<?php

session_id('mms8e07d6n909cn6ub36kr0f3narray');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);


