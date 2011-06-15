<h2>New User</h2>
<?=$this->form->create($user);?>
<?=$this->form->field('name');?>
<?=$this->form->submit('Save');?>
<?=$this->form->end();?>