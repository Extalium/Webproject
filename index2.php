<?php

require_once("vendor/autoload.php");

$f3 = Base::instance();

$f3->config('config.ini');
$f3->config('routes.ini');

class TestController {
	function beforeroute() {
		echo 'before. ';
	}
	function afterroute() {
		echo ' .after';
	}
}

class Main extends TestController{
	function render($f3) {
		$f3->set('name','world');
		$template= new Template;
		echo $template->render('template.htm')
	}
	function personnalités($f3) {
		echo 'Voilà la liste des personnalités';
	}
	function paramètres($f3) {
		echo 'Voilà la liste des paramètres';
	}
	function liste($f3) {
		echo 'Voilà les membres';
	}
	function logout($f3) {
		echo 'Bye bye';
	}
	function profil($f3) {
		echo "Profil";
	}
	function quizz($f3) {
		echo "Bienvenue sur le quizz";
	}
	function contact($f3) {
		echo "Bienvenue sur le formulaire de contact";
	}
}

$f3->run();
