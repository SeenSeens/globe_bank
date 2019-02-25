<?php if(!isset($page_title)) {$page_title = 'Staff Area'; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GBI - <?= $page_title; ?></title>
	<link rel="stylesheet" href="<?= url_for('/stylesheets/staff.css'); ?> " media="all">
</head>
<body>
	<header>
		<h1>GBI Staff Area</h1>
	</header>

	<navigation>
		<ul>
			<li><a href="<?= url_for('/staff/index.php'); ?>">Menu</a></li>
		</ul>
	</navigation>