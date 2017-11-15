<?php

class Messages extends DB\SQL\Mapper{

	public function __construct(DB\SQL $db) {
		parent::__construct($db,'messages');
	}

	public function all() {
		$this->load();
		return $this->query;
	}


}