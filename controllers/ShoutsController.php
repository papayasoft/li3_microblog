<?php
namespace microblog\controllers;

use microblog\models\Shouts;
use microblog\models\Users;

class ShoutsController extends \lithium\action\Controller{
	public function index(){
		$shouts = Shouts::all();
		return compact('shouts');
	}	

	public function add(){

		if(!empty($this->request->data)){
			$shout = Shouts::create($this->request->data);
			if($shout->save()){
				return $this->redirect('Shouts::index');
			}
		}

		$users = Users::find('list');
		return compact('shout', 'users');
	}
}

?>