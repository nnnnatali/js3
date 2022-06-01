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
				<button type="button" class="random" onclick="reload_interval(2000);"><span>Добавить</span></button>
			</form>
			<button type="button" class="remove" onclick="reload_interval(2000);"><span>Удалить все</span></button>
			<button type="button" class="ready" onclick="reload_interval(2000);"><span>Выполнено все</span></button>
		</div><br>
		<div class="allTask">
			<div class="textTask">fgfgfgf
			</div>
			<div class="block"></div><br><br>
			<button type="button" class="removeTask" onclick="reload_interval(2000);"><span>Удалить</span></button>
			<button type="button" class="readyTask" onclick="reload_interval(2000);"><span>Выполнено</span></button>
		</div>
		</div>
	</section>
</body>
</html>