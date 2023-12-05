<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Eid Mubarak Blog | PBWL Project10</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/delitekno.png" class="brand">
			<div class="user"><?php echo $_SESSION['user_full_name']; ?></div>
		</header>

		<nav>
			<ul>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Home
					</a>
				</li>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/categories">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Categories
					</a>
				</li>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/posts">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Post
					</a>
				</li>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Users
					</a>
				</li>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/klub">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Klub Sepakbola
					</a>
				</li>
				<li>
					<a class="text-decoration-none" href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Riski Firmansah
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>