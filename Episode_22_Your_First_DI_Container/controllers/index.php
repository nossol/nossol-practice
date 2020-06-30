<?php

$users = App::get('database')->selectAll('users');  //Controller setzt Variable

require 'views/index.view.php';    