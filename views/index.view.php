<?php require('partials/header.php'); ?>

    <h1>TODOS</h1>

    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
<?php require('partials/footer.php'); ?>
