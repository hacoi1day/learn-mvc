<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            padding: 20px;

        }
        #header, #footer {
            background-color: yellow;
        }
    </style>
</head>
<body>
<div id="header">

</div>
<div id="content">
    <?php require_once './mvc/views/pages/'.$data['page'].'.php'; ?>
</div>

</div>
</body>
</html>