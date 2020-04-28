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
        width: 80%;
        padding: 15px;
        text-align: center;
        border: 1px solid #d3d3d3;
        overflow-x:auto;
    }

    #content .btn{
        background-color: orangered;
        color: #fff;
        width: 200px;
        height: 40px;
        text-align: center;
        margin-bottom: 10px;
    }

    #content .btn a{
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: 700;
    }

    #content .btn:hover {
        background-color: green;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th {
        background-color: orangered;
        color: white;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border-left: 1px dotted orangered;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
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
                <div><button class="btn"><a href="index.php">Home</a></button></div>
                <div class="result">

                </div>
            </div>
        </section>
        <br><br><br>

    </div>

    <script>
        $.get("http://localhost/textAreaPhp/display.php", function(data) {
            $(".result").html(data);
        });
    </script>
</body>

</html>