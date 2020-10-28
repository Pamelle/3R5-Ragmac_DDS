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
        <h1>crud</h1>
        <div class="pass">
            <form action="add" method="post">
                <button type="submit" class="btn">add</button>
            </form>
        </div>
        <div class="pass">
            <form action="updateUserPage" method="post">
                <button type="submit" class="btn">update</button>
            </form>
        </div>
        <div class="pass">
            <form action="viewUser" method="post">
                 <button type="submit" class="btn">view</button>
                </form>
            </div>
        <div class="pass">
            <form action="delUserPage" method="post">
                 <button type="submit" class="btn">delete</button>
            </form>
        </div>
        <div class="pass">
            <form action="login" method="get">
                <button type="submit" class="btn">logout</button>
            </form>
        </div>
    </div>
</body>
</html>
