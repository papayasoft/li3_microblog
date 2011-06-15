<?php
namespace microblog\controllers;

use microblog\models\Users;
use microblog\models\Shouts;
class UsersController extends \lithium\action\Controller{

	public function index(){
		$users = Users::all();
		$shouts = Shouts::count();

		return compact('users', 'shouts');
	}

	public function view(){

		//Note the <Model>.<Field> notation.
		$conditions = array('Users.id' => $this->request->id);
		$with = array('Shouts', 'Follows');

		$user = Users::find('first', compact('conditions', 'with'));
		if(!$user){
			return $this->redirect('Users::index');
		}

		return compact('user');
	}

	public function add(){
		if(!empty($this->request->data)){
			$user = Users::create($this->request->data);
			if($user->save()){
				return $this->redirect("Users::index");
			}
		}

		$this->_render['template'] = 'edit';
	}

	public function edit(){
		
		if(!empty($this->request->data)){
		}

		$user = Users::first($this->request->id);

		if(!$user){
			return $this->redirect("Users::index");
		}

		return compact('user');
	}

	public function delete(){
		if(!empty($this->request->id)){
			$user = Users::first($this->request->id);
			if($user->delete()){
				return $this->redirect("Users::index");
			}
		}
	}

	public function login(){
		if(!empty($this->request->data)){
			//TODO: login
		}
	}

	public function logout(){
		//TODO: logout
	}
}

?>