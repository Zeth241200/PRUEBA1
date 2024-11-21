<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @stack('css')
    <style>
        body {
            background-color:khaki;
            color:red;
        }
    </style>
</head>
<body>
    <header></header>

    {{$slot}}

    <footer></footer>
</body>
    
    
</html>