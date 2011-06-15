<h2>Speak Your Mind</h2>
<?=$this->form->create($shout);?>
<!-- This is a temporary hack to get a user list -->
<?=$this->form->field('user_id', array('label'=>'User', 'type'=>'select', 'list'=>$users));?>
<!--  End of temorary hack -->
<?=$this->form->field('shout');?>
<?=$this->form->submit('Save');?>
<?=$this->form->end();?>