<?php include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Char Testing</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    nav {
        background-color: orangered;
    }

    .nav-title {
        padding: 10px;
        color: #fff;
        text-align: center;
    }

    #content {
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        width: 380px;
        padding: 15px;
        text-align: center;
        border: 1px solid #d3d3d3;
    }

    #content label {
        font-weight: 800;
    }

    #content input,
    textarea {
        border-radius: 16px;
        margin-top: 10px;
        padding: 10px;
        outline: none;
    }

    #content input:focus,
    textarea:focus {
        border-color: orangered;
    }

    #content .btn {
        background-color: orangered;
        color: #fff;
        width: 200px;
        height: 40px;
        text-align: center;
    }

    #content .btn:hover {
        background-color: green;
    }


    .message-box .userName{
        font-weight: 800;
    }

    .message-box .msg{
        font-size: 20px;
        font-weight: 500;
    }

    #content .link{
        margin-top: 20px;
    }

    #content .link a{
        text-decoration: none;
        color: orangered;
        font-size: 15px;
        font-weight: 700;
    }
</style>

<body>
    <div class="main">
        <!-- Nav -->
        <nav>
            <div class="nav-title">
                <h1>Special Char Testing - Output</h1>
            </div>
        </nav>

        <section id="content">
            <div class="textarea-box">
                <form action="" method="post">
                    <label for="useerName">Username</label><br>
                    <input type="text" name="username" placeholder="Enter username" required>
                    <br><br>
                    <input type="submit" value="Get Message" name="submit" class="btn">
                    <br>
                    <div class="link"><a href="index.php">Home Page</a></div>
                </form>
                <br><br><br>
                
                <?php
                    if(isset($_POST['submit'])){

                        $username = mysqli_real_escape_string($con,htmlentities($_POST['username']));
                        $sql = "SELECT * FROM `specialcharater` WHERE username = '$username' ";
                        $query = mysqli_query($con,$sql);
                        while($res = mysqli_fetch_array($query)){
                            echo "<div class='message-box'>";
                            echo "<h2 class='userName'> Name:  ".$res['username'].'</h2><br>';
                            echo "<p class='msg'> Message :  ".$res['message']."</p>";
                            echo "</div>";
                        }
                    }
                ?>
            </div>
        </section>

    </div>
</body>

</html>