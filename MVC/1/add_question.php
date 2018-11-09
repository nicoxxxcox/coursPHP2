<?php

require_once 'config.php';
require_once 'functions/database.fn.php';
require_once 'functions/faq.fn.php';

$pdo = getPDO($config);

require 'templates/forms/faq-form.php';




