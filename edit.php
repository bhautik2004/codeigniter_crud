<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Form</h1>
    <form method="post" action="<?php echo site_url('update') ?>">
    <input type="hidden" name="id" id="" value="<?php echo $user['user_id'] ?>">
        <label for=""><b>Usr Name : </b></label>
        <input type="text" name="user_name" id="" value="<?php echo $user['user_name'] ?>"><br><br>

        <label for=""><b>Usr Email : </b></label>
        <input type="email" name="user_email" id="" value="<?php echo $user['user_email'] ?>"><br><br>

        <label for=""><b>Usr Password : </b></label>
        <input type="password" name="user_password" id="" value="<?php echo $user['user_password'] ?>"><br><br>

        <input type="submit" name="submit" value="Update">


    </form>

</body>
</html>