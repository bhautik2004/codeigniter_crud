<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form method="post" action="<?php echo site_url('insert') ?>">
        <label for=""><b>Usr Name : </b></label>
        <input type="text" name="user_name" id=""><br><br>

        <label for=""><b>Usr Email : </b></label>
        <input type="email" name="user_email" id=""><br><br>

        <label for=""><b>Usr Password : </b></label>
        <input type="password" name="user_password" id=""><br><br>

        <input type="submit" name="submit" value="Insert">


    </form>

</body>
</html>