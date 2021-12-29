<?php
require 'app/core.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="tailwind.min.css" rel="stylesheet">
    <title>Модуль 07 - Задание 2</title>
</head>
<body class="bg-gray-400 font-sans leading-normal tracking-normal">
<?php require __DIR__. '/templates/navigation.php' ?>


<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-14 h-screen p-10">

<?php 
if ($isAuthorized){
    include_once 'templates/task_2_welcome_message.php';
}else{
    include_once 'templates/task_2_auth_form.php';
}
?>

</div>
</body>
</html>