

<html>
    <head>
        <title>S+QUIZZER</title>
        <style>
            button {
                    background-color: red;
                    color: white;
                    padding: 10px 10px;
                    margin: 5px 0;
                    border: none;
                    cursor: pointer;
                    width: 95%;
                    }
            .container { 
                        height: 180px;
                        width: 300px;
                        border: 1px solid red; 
                        margin: auto;
                        margin-top:-80px;

                        
                        }
            .buttons{
                position: relative;
                margin: right 50px;
                text-align: center;
            }

            p{
                text-align: center;
                font-family: "Impact";
                font-size: 3em;
                padding-top: 150px;
                color: red;
               
                

            }
        </style>
    </head>
    <body>
            <form action="" method="post">
                    <p>S+QUIZZER</p><br><br>
                <div class="container">
                    <div class="buttons">
                        <button type="button" name="Mathematics" onclick="location.href='Math.php'">Mathematics</button>
                        <button type="button" name="English" onclick="location.href='English.php'">English</button>
                        <button type="button" name="Science" onclick="location.href='Science.php'">Science</button>
                        <button type="button" name="Computer" onclick="location.href='Computer.php'">Computer</button>
                    </div>
                <div>
            </form>
    </body>
</html>