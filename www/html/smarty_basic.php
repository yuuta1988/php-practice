<?php
require_once './vendor/autoload.php';
$s = new Smarty();
$s->template_dir = './templates/';
$s->compile_dir = './templates_c/';
$s->assign('message', 'こんにちは、世界');
$s->display('smarty_basic.tpl');
