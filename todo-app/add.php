<?php
if (isset($_POST['task'])) {
    $task = trim($_POST['task']);
    if (!empty($task)) {
        $tasks = json_decode(file_get_contents('tasks.json'), true);
        if (!$tasks) {
            $tasks = [];
        }

        $tasks[] = $task;

        file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}

header('Location: index.php');
exit;
