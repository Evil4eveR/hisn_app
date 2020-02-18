<?php

$BASE_DIR = realpath(__DIR__ . "/..");

session_start();
require_once("utils.php");
require_once("storage.php");

$adkar_store = new JSONStorage("${BASE_DIR}/data.json");


$errors = [];