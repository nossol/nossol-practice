<?php

class Task {
    public $description;
    public $completed;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go shopping'),
    new Task('Finish this course'),
    new Task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';