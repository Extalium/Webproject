<?php

class UserController extends Controller{

    protected $f3;
    protected $db;

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
     //   $gens->getByName($status);
	//	echo " PSWD : " . $password;
	//	echo " HASH : " . $gens->passw;
        if($gens->dry()) {
            $this->f3->reroute('/login');
			//echo "vide";
        }
        if(password_verify($password, $gens->passw)) {
          new Session();


            $sessionCache=new Cache('folder=var/sessions/');
            $session = new Session(NULL,NULL,$sessionCache);
            session_set_save_handler(
              array($session, "open"),
              array($session, "close"),
              array($session, "read"),
              array($session, "write"),
              array($session, "destroy"),
              array($session, "cleanup"));

              session_start();

            $this->f3->set('SESSION', $session);
            $this->f3->set('SESSION.gens', $gens->username);
            //echo $f3->get('SESSION.gens');
            $this->f3->set('SESSION.status', $gens->status);
            $this->f3->set('SESSION.id', $gens->id);
            //echo $f3->get($session);
     //       echo $gens->status;
     //       echo $this->f3->get('SESSION.status');
     //       echo $sessions;
          //  $session->open('var/sessions/','SESSION.id');
          //  $session->read($this->f3->get('SESSION'));
            //echo(gettype($session));
            //echo $SESSION.gens;
			if($gens->status=="admin") $this->f3->reroute('/home_admin');
            if($gens->status=="praticien") $this->f3->reroute('/home');
            else $this->f3->reroute('/personality');
		 // echo "ok";
        } else {
            $this->f3->reroute('/login');
			//echo "not ok"; */
        }
    }

    function logout($f3) {

      session_start();
      $session=array();//on efface toutes les variables de la session
      session_destroy(); // Puis on détruit la session




       $this->f3->reroute('/home');
    //   $f3->clear('SESSION');
        //echo $f3->get('SESSION.status');
   //    echo(gettype($session[2]));
      /* echo $session[0];
       $session->destroy($id);
       $session->close();
       unset($f3->{'COOKIE.'.session_name()});*/
    }
}
