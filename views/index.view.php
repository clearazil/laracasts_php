<?php

require('partials/head.php');

/** @var stdClass[] $tasks */

?>

<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <span class="strike"><?= $task->description; ?></span>
        <?php else : ?>
            <?= $task->description ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
