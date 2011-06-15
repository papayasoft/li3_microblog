<h3>Stats</h3>
<ul>
	<li><?=$shouts;?> Shouts</li>
	<li><?=count($users);?> Users</li>
</ul>
<h3>Users</h3>
<ul>
	<?php foreach($users as $user):?>
		<li><?=$this->html->link($user->name, array('Users::view', 'id' => $user->id));?></li>
	<?php endforeach;?>
</ul>