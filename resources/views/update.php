<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="center">
        <h1>update</h1>
        <form action="updateUser" method="POST">
            <div class="txt_field">
                    <input type="text" name="id" placeholder="ID" class="form-control" required>
            </div>
            <div class="txt_field">
                <input type="text" name="username" placeholder="Username" class="form-control" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn">Update</button>
        </form>
        <div class="pass">
            <form action="CRUD" method="get">
                <button type="submit" class="btn">Back</button>
            </form>
        </div>
    </div>
</body>
</html>
