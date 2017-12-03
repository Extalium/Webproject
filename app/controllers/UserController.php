<?php

class UserController extends Controller{

	function render() {
		$template= new Template;
		echo $template->render('login.htm');
	}

	function authenticate() {
		/* ---------------TODO------------------*/
		$id_name=$this->f3->get('POST.id');
		$mdp=$this->f3->get('POST.mdp');
		$the_user = new User($this->db);
		$the_user->getbyName($id_name);

		if($the_user->dry()){
			$this->f3->reroute('/login');
		}

		if(password_verify($mdp,$the_user->mdp)){
			$this->f3->set('SESSION.the_user', $the_user->id_name);
			$this->f3->reroute('/profil');
		}

		else{
			$this->f3->reroute('/login');

		}
	}

	/*function authenticate() {
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');
        $user = new User($this->db);
        $user->getByName($username);
        if($user->dry()) {
            $this->f3->reroute('/login');
        }
        if(password_verify($password, $user->password)) {
            $this->f3->set('SESSION.user', $user->username);
            $this->f3->reroute('/');
        } else {
            $this->f3->reroute('/login');
        }
    }*/
}
