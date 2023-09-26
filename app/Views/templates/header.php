<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/styles.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>My Todo Application</title>
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="logo">
					<h2>Pendencia</h2>
				</div>
				<div class="bars" id="menubar">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>		
			<nav class="nav" id="navbar">
				<ul>
					<li class="col nav-item"><a class="nav-link" href="">Projekt</a></li>
					<li class="col nav-item"><a class="nav-link" href="<?php echo base_url('tasks/index'); ?>">Tarefas</a></li>
				</ul>
			</nav>
			
		</div>
	</header>
	<main class="main">
		<div class="container">
   
