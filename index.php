<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card{
            width: 400px;
            height: 500px;
            border-radius: 24px;
            box-shadow: 0px 0px 30px #aeaeae;
        }

        .card-header{
            width: 400px;
            height: 100px;
            border-radius: 24px;
            margin-bottom: 20px;
            display: flex;
            box-shadow: 0px 0px 30px #aeaeae;
            background-color: white;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input{
            
        }

        .todo-input{
            width: 90%;
            height: 40%;
            margin-top: 10px;
            box-sizing: border-box;
            border: none;
            font-size: 1.5em;
            text-align: center;
        }

        .todo-input:focus{
            outline: none;
        }

        .well{
            width: 100px;
            height: 30px;
            border-radius: 24px;
            border: none;
            margin: 10px;
        }

        .todo-list{
            height: 90%;
            background-color: black;
            margin-top: 20px;
            margin-bottom: 5%;
            display: flex;
            flex-direction: column;
        }

        .todo{
            height: 20%;
            background-color: aqua;
            display: flex;
            flex-direction: column;
            
        }

        .todo-content{
            margin: 5%;
            display: flex;
            justify-content: flex-start;
            align-content: center;
        }


    </style>

</head>
<body>
    <div class="container">

        <div class="card-header">
            <input class="todo-input" type="text" placeholder="Masukan ToDo Disini">
            <input type="button" value="Make" class="well">
        </div>
        <div class="card">
            <div class="todo-list">
                <div class="todo">
                    <div class="todo-content">
                        <input type="checkbox">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>