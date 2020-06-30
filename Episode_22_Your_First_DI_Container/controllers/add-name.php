<?php

//var_dump('You Typed: ' . $_POST['name']);

App::get('database')->insert('users', [
    'name' => $_POST['name'],
]);

header('Location: /');