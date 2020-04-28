<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

    #content .message-response{
        display: block;
        font-size: 14px;
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
                <h1>Special Char Testing</h1>
            </div>
        </nav>

        <section id="content">
            <div class="textarea-box">
                <div class="message-response">
                    <h3 id="response"></h3>
                </div>
                <form action="" method="post">
                    <label for="useerName">Username</label><br>
                    <input type="text" name="user" placeholder="Enter username" id="user" required>
                    <br><br>
                    <label for="message">Message</label><br>
                    <textarea name="message" cols="30" rows="12" id="message" placeholder="Enter message/special characters for testing" required></textarea>
                    <br><br>
                    <input type="submit" value="Save" name="submit" class="btn" id="save">
                    <br>
                    <div class="link"><a href="data.php">See Messages Output</a></div>
                </form>
            </div>
        </section>

    </div>


    <script>
        $(document).ready(function(){
            $('#save').click(function(){
                var user = encodeURIComponent($('#user').val());
                var msg = encodeURIComponent($('#message').val());

                $.ajax({
                url: 'target.php',
                type: 'post',
                data: {username:user, message:msg},
                function(result){
                    alert("Load was performed.");
                },
                error: function(err){
                    alert(err);
                }
                });
            });
        });
    </script>
</body>

</html>