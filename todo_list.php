<?php
if (!file_exists('tasks.json')) {
    exit;
}
$tasksArr = json_decode(file_get_contents('tasks.json'), true);
?>
<?php foreach ($tasksArr as $taskName => $task): ?>
    <div class="card mt-3">
        <div class="card-header">
            <h4><?php echo $taskName ?></h4>
        </div>
        <div class="card-body">
            <form action="change_status.php" method="post"> <!-- Form for checkbox input -->
                <input type="hidden" name="task_name" value="<?php echo $taskName ?>">
                <label for="completed">Completed</label>
                <input type="checkbox" name="completed" id="completed" <?php echo $task['completed'] ? 'checked' : '' ?>
                       class="form-check-input border border-secondary">
            </form>
            <form action="delete.php" method="post">
                <input type="hidden" name="task_name" value="<?php echo $taskName ?>">
                <button class="btn btn-outline-danger mt-2" style="display: block">Delete</button>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<!-- Checkbox onclick action -->
<script>
    const checkboxes = document.querySelectorAll('input[type=checkbox][name=completed]');
    checkboxes.forEach(ch => {
        ch.onclick = function () {
            this.parentNode.submit();
        };
    })
</script>