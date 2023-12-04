<?php

require './qizz.php';

$quiz = new Quiz();
$quiz->loadQuestions('quizz.txt');
$quiz->displayQuestions();

?>
