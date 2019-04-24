<?php

App::get('database')->insert('mimi', [
'name' => $_POST['name']
]);

redirect("/");