<!DOCTYPE html>
<html>
<head>
    <title>Mathematics Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    background-color: red;
    color: #fff;
    padding: 20px 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

form p {
    margin: 0;
    font-size: 18px;
    margin-bottom: 10px;
}

form input[type="radio"] {
    margin-right: 10px;
}

form input[type="submit"] {
    background-color: red;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;

}



</style>
<body>
    <h1>Mathematics Quiz</h1>
    <div class="container">
        <?php
        $quizData = [
            [
                'question' => 'What is 5 + 7?',
                'choices' => ['A' => 12, 'B' => 10, 'C' => 14, 'D' => 7],
                'correct' => 'A',
            ],
            [
                'question' => 'What is 3 x 9?',
                'choices' => ['A' => 12, 'B' => 18, 'C' => 27, 'D' => 21],
                'correct' => 'C',
            ],
            [
                'question' => 'What is 16 / 4?',
                'choices' => ['A' => 6, 'B' => 4, 'C' => 8, 'D' => 12],
                'correct' => 'B',
            ],
            [
                'question' => 'What is 15 / 3?',
                'choices' => ['A' => 6, 'B' => 4, 'C' => 5, 'D' => 12],
                'correct' => 'C',
            ],
            [
                'question' => 'What is 16 - 4?',
                'choices' => ['A' => 12, 'B' => 4, 'C' => 8, 'D' => 12],
                'correct' => 'A',
            ],
            [
                'question' => 'What is 16 / 8?',
                'choices' => ['A' => 6, 'B' => 2, 'C' => 8, 'D' => 12],
                'correct' => 'B',
            ],
            [
                'question' => 'What is 10 + 4?',
                'choices' => ['A' => 6, 'B' => 14, 'C' => 8, 'D' => 12],
                'correct' => 'B',
            ],
            [
                'question' => 'What is 100 / 4?',
                'choices' => ['A' => 16, 'B' => 24, 'C' => 18, 'D' => 25],
                'correct' => 'D',
            ],
            [
                'question' => 'What is 7 / 0?',
                'choices' => ['A' => 0, 'B' => 4, 'C' => 8, 'D' => 12],
                'correct' => 'A',
            ],
            [
                'question' => 'What is 1 + 4?',
                'choices' => ['A' => 6, 'B' => 4, 'C' => 5, 'D' => 12],
                'correct' => 'C',
            ]
        ];

        $score = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            for ($i = 0; $i < count($quizData); $i++) {
                $answerKey = 'question_' . $i;
                if (isset($_POST[$answerKey]) && $_POST[$answerKey] === $quizData[$i]['correct']) {
                    $score++;
                }
            }
            echo '<p>Your score: ' . $score . ' / ' . count($quizData) . '</p>';
        }

        for ($i = 0; $i < count($quizData); $i++) {
            echo '<p>Question ' . ($i + 1) . ': ' . $quizData[$i]['question'] . '</p>';
            echo '<form method="post">';
            foreach ($quizData[$i]['choices'] as $key => $choice) {
                echo '<input type="radio" name="question_' . $i . '" value="' . $key . '">' . $choice . '<br>';
            }
            echo '<br>';
        }
        echo '<input type="submit" value="Submit">';
        ?>
    </div>
</body>
</html>
