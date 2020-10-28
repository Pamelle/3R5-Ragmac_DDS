<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style type="text/css">
    th, td {
  padding: 15px;
  text-align: center;
}

</style>
<body>
    <div class="center">
        <h1>view</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                    $ID;
                    $username;
                    $password;

                    if (!empty($ID)) {
                        
                        for ($x = 0; $x < count($ID); $x++) {

                ?>
                <tr>
                    <td><?php echo $ID[$x]->ID; ?></td>
                    <td><?php echo $username[$x]->username; ?></td>
                    <td><?php echo $password[$x]->password; ?></td>
                    
                </tr>

                <?php
                }
                
        }else{
                ?> 
                    <td>wew</td>
                    <td>wew</td>
                    <td>wew</td>

                <?php
        }

                 ?>


            </tbody>


        </table>
        <div class="pass">
            <form action="CRUD" method="get">
                <button type="submit" class="btn">Back</button>
            </form>
        </div>
    </div>
</body>
</html>


<script type="text/javascript">
    


</script>