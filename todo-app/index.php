<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>To-Do List</h1>

<form action="add.php" method="POST">
    <input type="text" name="task" placeholder="Введите задачу" required>
    <button type="submit">Add</button>
</form>

<ul>
    <?php
    $tasks = json_decode(file_get_contents('tasks.json'), true);
    if (!empty($tasks)) {
        foreach ($tasks as $task) {
            echo "<li>" . htmlspecialchars($task) . "</li>";
        }
    } else {
        echo "<li>No Tasks</li>";
    }
    ?>
</ul>
</body>
</html>
