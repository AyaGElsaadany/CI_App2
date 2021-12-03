<?php
	echo $msg;
?>
	
		
		<?= form_open() ?>
		<label>Name : </label>
		<?= form_input('name', set_value('name')) ?>
		<br><br>
		<label>Phone : </label>
		<?= form_input('phone', set_value('phone')) ?>
		<br><br>
		<label>Email : </label>
		<?= form_input('email' , set_value('email')) ?>
		<br><br>
		<label>Password : </label>
		<?= form_input('password', set_value('password')) ?>
		<br><br>
		<?= form_submit('submit', 'Insert') ?>

		
		
