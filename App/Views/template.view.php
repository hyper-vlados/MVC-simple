<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="/">Homepage</a></li>
            <li><a href="/Page/contacts">Contacts</a></li>
            <li><a href="/Page/about_us">About us</a></li>
            <li><a href="/Portfolio">Portfolio</a></li>
        </ul>
    </div>

    <div class="content">
        <?php include_once 'application/views/'.$contentView.'_view.php'?>
    </div>

    <div>
        <p>SUPER PERSONAL BLOG (c) 2019 </p>
    </div>

</body>
</html>