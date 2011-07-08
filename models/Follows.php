<?php
namespace microblog\models;

class Follows extends \lithium\data\Model{

	public $belongsTo = array(
		'Follower' => array('to' => 'microblog\models\Users', 'keys' => array('follower_id' => 'id')), 
		'Followed' => array('to' => 'microblog\models\Users', 'keys' => array('followed_id' => 'id'))
	);
}
/**
create table follows(
	id INTEGER PRIMARY KEY,
	follower_id INTEGER,
	followed_id INTEGER,
	FOREIGN KEY(follower_id) REFERENCES users(id),
	FOREIGN KEY(followed_id) REFERENCES users(id)
);
 */
?>