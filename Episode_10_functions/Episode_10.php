<?php

require 'functions.php';

$age = 21;

if (isOldEnough($age) == true) {
    echo 'Welcome to the club!';
} else {
    echo 'Not today buddy';
}