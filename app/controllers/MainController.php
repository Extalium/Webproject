<?php
class MainController extends Controller{
	function render($f3) {
		/*$messages = new Messages($this->db);
		$msg = $messages->all()[0];

		$f3->set('msg',$msg);*/
		$template= new Template;
		echo $template->render('template.htm');
	}

	function freeContact($f3) {
		$template= new Template;
		echo $template->render('freeContact.htm');
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

	function error($f3) {
		$template= new Template;
		echo $template->render('error.htm');
	}

	function render1($f3) {
		$template= new Template;
		echo $template->render('template1.htm');
	}

	function freeContact1($f3) {
		$template= new Template;
		echo $template->render('freeContact1.htm');
	}

	function personalityForUser1($f3) {
		$template= new Template;
		echo $template->render('personality1.htm');
	}

	function login1($f3) {
		$template= new Template;
		echo $template->render('login1.htm');
	}
}
