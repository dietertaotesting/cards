<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Sorts+Mill+Goudy|Almendra|Della+Respira&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/cards.css">

</head>
<body class="<?=$_GET['style'] ?? 'regular'?>">
<header class="decorated-container">
    <h1>Page Title</h1>
    <div class="toolbar">
        <ul>
            <li><a href="?style=print">Print</a></li>
            <li><a href="?style=regular">Regular</a></li>
        </ul>
    </div>
</header>
<main class="grid-container">
    @yield('content')
</main>
</body>
</html>
