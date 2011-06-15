<?php
namespace microblog\models;

class Shouts extends \lithium\data\Model{

	protected $belongsTo = array('Users');

}
/**
create table shouts(
	id INTEGER PRIMARY KEY,
	user_id INTEGER,
	shout TEXT,
	timestamp INTEGER,
	FOREIGN KEY(user_id) REFERENCES users(id)
);
*/
?>