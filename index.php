<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                <h1>TO DO LIST</h1>
                <div class="card">
                    <!-- lista degli item della todolist -->
                    <ul>
                        <li class="item-card">ciao</li>
                        <li class="item-card">ciao</li>
                        <li class="item-card">ciao</li>
                    </ul>
                    <div class="add-task">
                        <input class="font-input" type="text" placeholder="Add Task">
                        <button class="font-input" type="submit">Add</button>
                    </div>


                </div>
            </div>
        </main>


    </div>

    <script src="myscript.js"></script>
</body>

</html>