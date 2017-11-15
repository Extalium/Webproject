<?php
class MainController extends Controller{
	function render($f3) {
		$messages = new Messages($this->db);
		$msg = $messages->all()[0];

		$f3->set('msg',$msg);
		$template= new Template;
		echo $template->render('template.htm');
	}
	function personnalités($f3) {
		$template= new Template;
		echo $template->render('perso.htm');
	}
	function paramètres($f3) {
		$template= new Template;
		echo $template->render('paramètres.htm');
	}
	function liste($f3) {
		$template= new Template;
		echo $template->render('liste.htm');
	}
	function logout($f3) {
		$template= new Template;
		echo $template->render('logout.htm');
	}
	function profil($f3) {
		$template= new Template;
		echo $template->render('profil.htm');
	}
	function quizz($f3) {
		$template= new Template;
		echo $template->render('quizz.htm');
	}
	function contact($f3) {
		$template= new Template;
		echo $template->render('contact.htm');
	}
}