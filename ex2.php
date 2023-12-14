<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <form action='' method="post">

        <p>
            Email
            <input class="checker" type="text" name="email" placeholder="yourmail@mail.com" pattern=".+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+" required />
        </p>

        <p>
            Имя
            <input class="checker" type="text" name="name" pattern="\D+" placeholder="" required />
        </p>

        <p>
            Оценка страницы
            <input class="checker" type="number" name="rating" placeholder="от 0 до 10" min="0" max="10" required />
        </p>

        <p>
            Комментарий
            <textarea class="checker" name="comment" maxlength="500" placeholder="" required></textarea>
        </p>

        <input type='submit' name="save" value='Сохранить в файл' />

    </form>

</body>

</html>

<?php

extract($_REQUEST);

if (isset($save) == true) {
    echo '<script>alert("Сохранно")</script>';
    $file = fopen("save.txt", "w");

    fwrite($file, "email:" . $email . "\n");
    fwrite($file, "name:" . $name . "\n");
    fwrite($file, "rating:" . $rating . "\n");
    fwrite($file, "comment:" . $comment . "\n");
    fclose($file);

    echo '<meta http-equiv="refresh" content="0; url=save.txt">';
    exit;
}
?>