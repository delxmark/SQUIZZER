<!DOCTYPE html>
<html>
<head>
    <title>English Quiz</title>
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
    <h1>English Quiz</h1>
    <div class="container">
        <?php
        $quizData = [
            [
                'question' => 'What is the plural form of "child"?',
                'choices' => ['A' => 'childs', 'B' => 'children', 'C' => 'childes', 'D' => 'childern'],
                'correct' => 'B',
            ],
            [
                'question' => 'Which word is a synonym for "happy"?',
                'choices' => ['A' => 'sad', 'B' => 'joyful', 'C' => 'angry', 'D' => 'tired'],
                'correct' => 'B',
            ],
            [
                'question' => 'What is the past tense of "go"?',
                'choices' => ['A' => 'gone', 'B' => 'going', 'C' => 'went', 'D' => 'goed'],
                'correct' => 'C',
            ],
            [
                'question' => 'They ______________ her and trusted her for years?',
                'choices' => ['A' => 'know', 'B' => 'had known', 'C' => 'knew', 'D' => 'known'],
                'correct' => 'C',
            ],
            [
                'question' => 'Every morning she ______________ up early and gets ready for work.',
                'choices' => ['A' => 'is waking', 'B' => 'has woken', 'C' => 'had woken', 'D' => 'wakes'],
                'correct' => 'D',
            ],
            [
                'question' => 'People ______________ walk on grass.',
                'choices' => ['A' => 'couldn\'t', 'B' => 'needn\'t', 'C' => 'mustn\'t', 'D' => 'may not'],
                'correct' => 'C',
            ],
            [
                'question' => '______________ you speak any foreign languages?',
                'choices' => ['A' => 'can\'t', 'B' => 'should', 'C' => 'couldn\'t', 'D' => 'can'],
                'correct' => 'D',
            ],
            [
                'question' => 'World war I and World war II took place ______________ the 20th century.',
                'choices' => ['A' => 'on', 'B' => 'in', 'C' => 'at', 'D' => 'into'],
                'correct' => 'B',
            ],
            [
                'question' => 'They built this temple 3,000 years ago. This must ______________ a great civilization.',
                'choices' => ['A' => 'not have been', 'B' => 'not', 'C' => 'has been', 'D' => 'have been'],
                'correct' => 'D',
            ],
            [
                'question' => 'I wanted to go to the park, ______________ my mother refused.',
                'choices' => ['A' => 'but', 'B' => 'or', 'C' => 'so', 'D' => 'and'],
                'correct' => 'A',
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
