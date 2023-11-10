<!DOCTYPE html>
<html>
<head>
    <title>Science Quiz</title>
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
    <h1>Science Quiz</h1>
    <div class="container">
        <?php
        $quizData = [
            [
                'question' => 'What is the chemical symbol for water?',
                'choices' => ['A' => 'W', 'B' => 'H2O', 'C' => 'O2', 'D' => 'W2O'],
                'correct' => 'B',
            ],
            [
                'question' => 'Which planet is known as the "Red Planet"?',
                'choices' => ['A' => 'Earth', 'B' => 'Venus', 'C' => 'Mars', 'D' => 'Jupiter'],
                'correct' => 'C',
            ],
            [
                'question' => 'What is the atomic number of carbon?',
                'choices' => ['A' => 12, 'B' => 6, 'C' => 8, 'D' => 16],
                'correct' => 'B',
            ],
            [
                'question' => 'What is the atomic number of carbon?',
                'choices' => ['A' => 'one', 'B' => 'seven', 'C' => 700, 'D' => 'as many as the eyes can see'],
                'correct' => 'D',
            ],
            [
                'question' => 'How many planets are in the solar system?',
                'choices' => ['A' => 9, 'B' => 8, 'C' => 7, 'D' => 6],
                'correct' => 'B',
            ],
            [
                'question' => 'Which planet can never be seen directly overhead at midnight?',
                'choices' => ['A' => 'Mercury', 'B' => 'Mars', 'C' => 'Jupiter', 'D' => 'Saturn'],
                'correct' => 'A',
            ],
            [
                'question' => 'Which of the following is characteristic of all living things:',
                'choices' => ['A' => 'Phototropism', 'B' => 'Being composed of cells', 'C' => 'Depends on sun energy', 'D' => 'Ability to move'],
                'correct' => 'B',
            ],
            [
                'question' => 'Which of the following is necessary for ALL living things:',
                'choices' => ['A' => 'Oxygen', 'B' => 'Water', 'C' => 'Light', 'D' => 'Shelter'],
                'correct' => 'B',
            ],
            [
                'question' => 'Overall, which is considered the most nutritious fruit?',
                'choices' => ['A' => 'Apple', 'B' => 'Tomato', 'C' => 'Grapefruit', 'D' => 'Watermelon'],
                'correct' => 'D',
            ],
            [
                'question' => '____ is the process by which energy travels from a warm substance to a colder substance.',
                'choices' => ['A' => 'Convection', 'B' => 'Conduction', 'C' => 'Radiation', 'D' => 'Absorption'],
                'correct' => 'D',
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
