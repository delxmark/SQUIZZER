
<!DOCTYPE html>
<html>
<head>
    <title>Computer Quiz</title>
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
    <h1>Computer Quiz</h1>
    <div class="container">
        <?php
        $quizData = [
            [
                'question' => 'What does CPU stand for?',
                'choices' => ['A' => 'Central Processing Unit', 'B' => 'Computer Personal Unit', 'C' => 'Central Process Unit', 'D' => 'Computer Processor Unit'],
                'correct' => 'A',
            ],
            [
                'question' => 'What is an operating system?',
                'choices' => ['A' => 'The main computer hardware', 'B' => 'Software that manages computer hardware and provides services', 'C' => 'The power button on a computer', 'D' => 'A type of computer virus'],
                'correct' => 'B',
            ],
            [
                'question' => 'What does HTML stand for?',
                'choices' => ['A' => 'Hyper Transfer Markup Language', 'B' => 'Hyper Text Markup Language', 'C' => 'High Technology Markup Language', 'D' => 'Hyperlink and Text Markup Language'],
                'correct' => 'B',
            ],
            [
                'question' => 'ALU stands for?',
                'choices' => ['A' => 'Arithmetic Logic Unit', 'B' => 'Arithmetic Legal Unit', 'C' => 'Arithmetic Local Unit', 'D' => 'Arithmetic Language Unit'],
                'correct' => 'A',
            ],
            [
                'question' => 'From the following which is an output device?',
                'choices' => ['A' => '3D Printer', 'B' => 'Keyboard', 'C' => 'Mouse', 'D' => 'Scanner'],
                'correct' => 'A',
            ],
            [
                'question' => 'From the following which is not an input device?',
                'choices' => ['A' => 'Scanner', 'B' => 'Touch Screen', 'C' => 'Mouse', 'D' => 'Printer'],
                'correct' => 'D',
            ],
            [
                'question' => 'WWW stands for?',
                'choices' => ['A' => 'World Wide Web', 'B' => 'World Web Wide', 'C' => 'Word Wide Web', 'D' => 'Web Word Wide'],
                'correct' => 'A',
            ],
            [
                'question' => 'GUI stands for?',
                'choices' => ['A' => 'Graphical User Idea', 'B' => 'Graphical User Interface', 'C' => 'Graphics User Interface', 'D' => 'Graphical User Idea'],
                'correct' => 'B',
            ],
            [
                'question' => 'From the following which is not secondary memory device?',
                'choices' => ['A' => 'Tape Drive', 'B' => 'Solid State Drive', 'C' => 'Touch Screen', 'D' => 'Memory Card'],
                'correct' => 'C',
            ],
            [
                'question' => 'The brain of any computer system is?',
                'choices' => ['A' => 'ALU', 'B' => 'Memory', 'C' => 'CPU', 'D' => 'Control Unit'],
                'correct' => 'C ',
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
