<?php
class MainController extends Controller{
	function render($f3) {
		$messages = new Messages($this->db);
		$msg = $messages->all()[0];

		$f3->set('msg',$msg);
		$template= new Template;
		echo $template->render('template.htm');
	}

	function FreeContact($f3) {
		$template= new Template;
		echo $template->render('FreeContact.htm');
	}

	function personalityForUser($f3) {
		$template= new Template;
		echo $template->render('personality.htm');
	}

	function créercompte($f3) {
		$template= new Template;
		echo $template->render('signup.htm');
	}

	function login($f3) {
		$template= new Template;
		echo $template->render('login.htm');
	}

	function reinitialiser($f3) {
		$template= new Template;
		echo $template->render('reset_password.htm');
	}
}
