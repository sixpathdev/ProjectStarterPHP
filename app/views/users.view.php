
<?php foreach ($users as $name) : ?>

    <li><?= $name->name; ?></li>

<?php endforeach; ?>

<h2>Submit your name</h2>

<form action="/names" method="post">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>