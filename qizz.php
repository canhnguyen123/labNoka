<?php

class Quiz
{
    protected $questions = [];

    public function loadQuestions($filePath)
    {
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $currentQuestion = null;
        foreach ($lines as $line) {
            if (strpos($line, 'Trắc nghiệm') !== false) {
                $currentQuestion = ['title' => $line, 'options' => []];
            } elseif (strpos($line, '.') !== false) {
                $currentQuestion['options'][] = $line;
            } elseif (empty($line)) {
                if ($currentQuestion) {
                    $this->questions[] = $currentQuestion;
                    $currentQuestion = null;
                }
            }
        }

        if ($currentQuestion) {
            $this->questions[] = $currentQuestion;
        }
    }

    public function displayQuestions()
    {
        foreach ($this->questions as $question) {
            echo "<p>{$question['title']}</p>";
            echo "<ul>";
            foreach ($question['options'] as $option) {
                echo "<li>$option</li>";
            }
            echo "</ul>";
        }
    }
}

?>
