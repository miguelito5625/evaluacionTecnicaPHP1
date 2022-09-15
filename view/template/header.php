<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="/view/template/css/flexbox.css">
	<link rel="stylesheet" href="/view/template/css/main.css">
	<link rel="stylesheet" href="/view/template/css/navbar.css">
	<link rel="stylesheet" href="/view/template/css/cards.css">
	<link rel="stylesheet" href="/view/template/css/forms.css">
	<link rel="stylesheet" href="/view/template/css/buttons.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

</head>

<body>

	<?php
	include 'view/navbar/navbar.php';
	?>

	<div class="container">
		<h1><?php echo $controller->page_title; ?></h1>