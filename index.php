<?php
require_once("TranslatorView.php");
require_once("RobberLanguage.php");

$view = new TranslatorView();
$input = $view->getInput();
$model = new RobberLanguage();
$translated = $model->translate($input);
$view->echoform($translated);