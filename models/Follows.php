<?php
namespace microblog\models;

class Follows extends \lithium\data\Model{

	public $belongsTo = array(
		'Follower' => array('to' => 'Users', 'keys' => array('follower_id' => 'id')), 
		'Followed' => array('to' => 'Users', 'keys' => array('followed_id' => 'id'))
	);
}

?>