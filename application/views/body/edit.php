<?php
	echo $msg;

	if($user_q->num_rows()){
		$user = $user_q->row();
		?>
		<?= form_open() ?>
		<?php
		$data1 = array(
			'name'     => 'id',
			'value'    => $user->id,
			'disabled' => 'disabled'
			);
		?>
		<label>ID : </label>
		<?= form_input($data1) ?>
		<br><br>
		<label>Name : </label>
		<?= form_input('name', $user->name) ?>
		<br><br>
		<label>Phone : </label>
		<?= form_input('phone', $user->phone) ?>
		<br><br>
		<?php
		$data2 = array(
			'name'     => 'email',
			'value'    => $user->email,
			'readonly' => 'readonly'
			);
		?>
		<label>Email : </label>
		<?= form_input($data2) ?>
		<br><br>
		<label>Password : </label>
		<?= form_input('password', $user->password) ?>
		<br><br>
		<?= form_submit('submit', 'Send') ?>
		<?php
	}
?>
