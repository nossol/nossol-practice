<?php

class Task
{
    public $description;
    public $dueDate;
    public $author;
    public $completed;

    public function __construct($description, $dueDate, $author, $completed)
    {
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->author = $author;
        $this->completed = $completed;
    }
}

$tasks = [
    new Task('buy milk', '04.06.2020', 'ON', true),
    new Task('feed cat', '04.06.2020', 'ON', true),
    new Task('finish tutorials', '04.06.2020', 'ON', true),
    new Task('prepare lunch', '04.06.2020', 'ON', true)
];

$completedTasks = array_filter($tasks, function ($task) {
    return $task->completed;
});

$incompleteTasks = array_filter($tasks, function ($task) {
    return ! $task->completed;
});

var_dump($completedTasks);

//
//class Post
//{
//    public $title;
//    public $published;
//    public $author;
//
//    public function __construct($title, $author, $published)
//    {
//        $this->title = $title;
//        $this->published = $published;
//        $this->author = $author;
//    }
//}
//
//$posts = [
//    new Post('My First Post', 'ON', true),
//    new Post('My Second Post', 'ON',true),
//    new Post('My Third Post', 'ON',true),
//    new Post('My Fourth Post', 'ON',false)
//];
//
////$unpublishedPosts = array_filter($posts, function ($post) {
////    return ! $post->published;
////});
//
////$publishedPosts = array_filter($posts, function ($post) {
////    return $post->published;
////});
//
////foreach ($posts as $post) {
////    $post->published = true;
////}
//
////$modified = array_map(function ($post) {
////    return (array) $post;
////}, $posts);
//
//$titles = array_map(function ($post) {
//    return $post->title;
//}, $posts);
//
//var_dump($titles);