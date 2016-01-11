<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <div class="container">

        <tasks></tasks>

    </div>

    <template id="tasks-template">
        <h1>My Tasks</h1>

        <ul class="list-group">

            <li class="list-group-item" v-for="task in list">

                @{{ task.body }}

                <strong @click="delete(task)">X</strong>

            </li>




        </ul>

    </template>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.13/vue.js"></script>
    <script src="/js/main.js"></script>
</body>

<!-- JavaScripts -->

</html>
