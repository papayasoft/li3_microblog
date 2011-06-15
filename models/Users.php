<?php
namespace microblog\models;

class Users extends \lithium\data\Model{

	public $hasMany = array('Shouts', 'Follows' => array('keys' => array('id' => 'followed_id')));

}
/**
create table users(
	id INTEGER PRIMARY KEY,
	name TEXT
);
*/

?>