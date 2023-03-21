<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px" cellpadding="2px" cellspacing="2px" align="center">
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Password</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user){ ?>
            <tr>
                <td>
                    <?php echo $user['user_id'] ?>
                </td>
                <td>
                    <?php echo $user['user_name'] ?>
                </td>
                <td>
                    <?php echo $user['user_email'] ?>
                </td>
                <td>
                    <?php echo $user['user_password'] ?>
                </td>
                <td>
                    <a href="<?php echo base_url('delete/'.$user['user_id']); ?>">Delete</a><br>
                    <a href="<?php base_url(); ?>edit/<?php echo $user['user_id'] ?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>