<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Список дел</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<h1>Список дел</h1><br>
	<section class="section">
	<div class="TaskList">
		<div class="newTask">
			<form method="POST">
				<input type="text" name="task" class="name" placeholder="Введите задачу">
				<button type="button" class="class" onclick="reload_interval(2000);"><span>Добавить</span></button>
			</form>
			<button type="button" class="remove" onclick="reload_interval(2000);"><span>Удалить все</span></button>
			<button type="button" class="ready" onclick="reload_interval(2000);"><span>Выполнено все</span></button>
		</div><br>
				<?php 
					 require "php/db.php";
        $at = mysqli_query($connect, "SELECT * FROM `task`");
        $at = mysqli_fetch_all($at);
        foreach ($at as $at) {
					?>
						<div class="allTask">
			<div class="textTask">
				<p class='draggable' draggable='true'><?= $at[1] ?></p>
				</div>
			<div class="block" id="block" style="background-color: red;">
								
			</div><br><br>
			<button type="button" class="removeTask" onclick="reload_interval(2000);"><a href="php/delite.php?id=<?= $at[0] ?>" style="text-decoration: none; color: black;">Удалить</a></button>
			<button type="button" class="readyTask" id="btn"><span>Выполнено</span></button>
			</div>
			<br>
				<?php
				}
			?>
				
		</div>
	</section>

	<script src="jquery-3.6.0.min.js"></script>
	<script src="style.js"></script>
	<script src="btn.js"></script>

</body>
</html>