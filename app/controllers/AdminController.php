 <?php

class AdminController extends Controller {

	protected $f3;
	protected $db;

	function beforeroute() {
		/*if($this->f3->get('SESSION.status') != 'admin' ) {
			$this->f3->reroute('/login');
			exit;
		}*/
	}

	function afterroute() {
		echo ' .after';
	}

	function __construct() {

		$f3=Base::instance();
		$this->f3=$f3;

		$db = new DB\SQL (
			$f3->get('devdb'),
			$f3->get('devdbusername'),
			$f3->get('devdbpassword'),
			array( \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
		);

		$this->db=$db;
	}

	function Home($f3) {
		$template= new Template;
		echo $template->render('home_admin.htm');
	}

	function quizz($f3) {
		$template= new Template;
		echo $template->render('quizz_admin.htm');
	}

	function parametres($f3) {
		$template= new Template;
		echo $template->render('parametres.htm');
	}

	function profil($f3) {
		$template= new Template;
		echo $template->render('profil_admin.htm');
	}

	function membre($f3) {
		$template= new Template;
		echo $template->render('membre_admin.htm');
	}

	function personnality($f3) {
		$template= new Template;
		echo $template->render('personality_admin.htm');
	}

	function sendEmail($f3) {
		//mail('caffeinated@example.com', 'Mon Sujet', $message);
	}

	function board($f3) {
		$this->f3->set('view','dashboard.htm');
		$template= new Template;
		echo $template->render('dashboard.htm');
	}

	function displayListPraticien($f3) {
		$praticienList = new User($this->db);
		$this->f3->set('list', $praticienList->all());
//		$this->f3->set('view', 'messages.htm');
		$template= new Template;
		echo $template->render('praticien_list.htm');
	}

	function add() {
		$template= new Template;
		echo $template->render('add_praticien.htm');
	}

	function addPraticien($f3) {
        $gens = new User($this->db);
        $passw = $this->f3->get('POST.passw');
        $passw = password_hash($passw,PASSWORD_DEFAULT);
        $this->f3->set('POST.passw',$passw);
        $gens->add();
        $this->f3->reroute('/praticien_list');
	}

	function delete() {
		$template= new Template;
		echo $template->render('delete_praticien.htm');
	}

	function deletePraticien($f3) {
        $gens = new User($this->db);
        $id = $this->f3->get('POST.id');
        $gens->delete($id);
        $this->f3->reroute('/praticien_list');
	}

	function edit() {
		$template= new Template;
		echo $template->render('edit_praticien.htm');
	}

	function editPraticien($f3) {
        $gens = new User($this->db);
        $passw = $this->f3->get('POST.passw');
        $passw = password_hash($passw,PASSWORD_DEFAULT);
        $this->f3->set('POST.passw',$passw);
        $gens->edit($this->f3->get('POST.id'));
        $this->f3->reroute('/praticien_list');
	}
}
