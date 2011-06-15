<h2><?=$user->name;?></h2>

<div style="width: 500px; height: 400px;">
	<div style="float: left; width: 200px; height: 400px; overflow: auto;">
		<h3>Shouts</h3>
		<ul>
			<?php foreach($user->shouts as $shout):?>
				<li><?=$shout->shout;?></li>
			<?php endforeach;?>
		</ul>
	</div>
	<div style="float: right; width: 200px; height: 400px; overflow: auto;">
		<h3>Followers</h3>
		<ul>
			<?php foreach($user->followers as $follower):?>
				<li><?=$this->html->link($follower->name, array('Users::view', 'id' => $follower->follower_id));?></li>
			<?php endforeach;?>
		</ul>
	</div>
</div>