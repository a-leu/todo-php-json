<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>todo-php-json</title>
</head>
<body>

<main class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="create_todo.php" method="post">
                <input type="text" name="todo_name" class="form-control border border-primary">
                <button class="btn btn-outline-primary mt-2">Add new task</button>
            </form>
            <?php include 'todo_list.php' ?>
        </div>
    </div>
</main>

</body>
</html>