<?php

class UserController extends Controller{

	function render() {
		$template= new Template;
		echo $template->render('login.htm');
	}

	function authenticate() 
    {
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');
		
        $gens = new User($this->db);
        $gens->getByName($username);
		echo " PSWD : " . $password;
		echo " HASH : " . $gens->passw;
        if($gens->dry()) {
            $this->f3->reroute('/login');
			//echo "vide";
        }
        if(password_verify($password, $gens->passw)) {
            $this->f3->set('SESSION.user', $user->username);
            $this->f3->reroute('/');
		 // echo "ok";
        } else {
            $this->f3->reroute('/login');
			//echo "not ok";
        }
    }
}
