<?php

class Controller {
	function beforeroute() {
		echo 'before. ';
	}
	function afterroute() {
		echo ' .after';
	}

}