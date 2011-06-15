<?php
namespace microblog\models;

class Users extends \lithium\data\Model{

	public $hasMany = array('Shouts', 'Follows');

}

?>