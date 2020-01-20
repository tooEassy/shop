<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/loggedHeader.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>tooEasy shop</title>
</head>
<body>
<div class='wrapper'>
    <header>
        <nav class="header-menu">
            <div class="logo">
                <a href="/">tooEasy logo</a>
            </div>
            <div class="sign">
                <p>Hey, <?php echo $_SESSION['email'] ?></p>
                <a href="/logout">Log out</a>
            </div>
        </nav>
    </header>
