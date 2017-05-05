<?php
	
session_start()

require_once "php/PHPMailerAutoload.php";

$errors = [];



if(isset($_POST["name"], $_POST['email'], $_POST['comments'])){
	$fields = [
		'name' => $_POST['name'],
		'email'=> $_POST['email'],
		'comments'=> $_POST['comments']
	];

	foreach($fields as $field => $data){
		if(empty($data)){
			$errors[] = 'The' . $field . 'field is required.';
		}
	}

	if(empty($errors)){

		$m = new PHPMailer;
		$m->isSMTP();
		$m->SMTPAuth = true;

		$m->Host = 'smtp.gmail.com';
		$m->Username = 'jorgeduardo.1994@gmail.com';
		$m->Password = '5536494j';
		$m->SMTPSecure = 'ssl';
		$->Port = 465;

		$m->isHTML();
		$m->Subject = 'Contact form submitted';
		$m->Body = 'From: ' . $fields['name'] .' (' . $fields['email'] . ') <p>' . $fields['comments'] . '</p> ';

		$m->FromName = 'Contact';

		$m->AddAddress('jorgeduardo.1994@gmail.com', 'Jorge Sosa');

		if($m->send()){
			header('Location: index.php');
		}else{
			$errors[]='Sorry, could not send email. Try again later';
		}

	}


}else{
	$errors[] = 'something went wrong.';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields

header('Location: index.php');

?>