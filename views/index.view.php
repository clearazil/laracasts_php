<?php

require('partials/head.php');

/** @var stdClass[] $users */

?>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?= $user->name ?></li>
    <?php endforeach; ?>
</ul>

<h1>Submit Your Name</h1>

<form method="post" action="/names">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
