<?php

$taskName = $_POST['task_name'];
$tasksArr = json_decode(file_get_contents('tasks.json'), true);
$tasksArr[$taskName]['completed'] = !$tasksArr[$taskName]['completed'];
file_put_contents('tasks.json', json_encode($tasksArr, JSON_PRETTY_PRINT));
header('Location: index.php');