<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="center">
        <h1>CRUD</h1>
        <div class="pass">
            <form action="add" method="post">
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
        <div class="pass">
            <form action="updateUserPage" method="post">
                <button type="submit" class="btn">Update</button>
            </form>
        </div>
        <div class="pass">
            <form action="delUserPage" method="post">
                 <button type="submit" class="btn">Delete</button>
            </form>
        </div>
        <div class="pass">
            <form action="login" method="get">
                <button type="submit" class="btn">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>