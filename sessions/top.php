<!DOCTYPE html>
<html>
<head>
    <title>Session Demo - <?php echo $subtitle ?></title>
    <style type="text/css" media="all">
        nav ul,
        nav li
        {
            display: inline;
        }
        nav .title  {
            font-size: 1.5em;
        }
        pre {
            background-color: lightgray;
            width: 65em;
            padding: 1em;
            border-radius: .5em;
        }
    </style>
    <?php session_start(); ?>
</head>
<body>
    <nav>
        <ul>
            <li class="title">
                Sesssions Demo
            </li>
            <li>
                <a href="view.php">View Data Page</a>
            </li>
            <li>
                <a href="store.php">Store Data Page</a>
            </li>
        </ul>
    </nav>
    <div class="container">
