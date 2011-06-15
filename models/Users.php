<?php
namespace microblog\models;

class Users extends \lithium\data\Model{

	public $hasMany = array('Shouts', 'Follows');

}
/**
create table users(
	id INTEGER PRIMARY KEY,
	name TEXT
);
*/

?>