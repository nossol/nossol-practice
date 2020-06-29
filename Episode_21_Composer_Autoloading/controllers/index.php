<?php

$users = $app['database']->selectAll('users');  //Controller setzt Variable

require 'views/index.view.php';    