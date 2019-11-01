<!--
*database error disguised as a credential validation
-->
<!DOCTYPE html>
<html>

<!-- the head section -->

<head>
    <title>Potters Tea house</title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            font-family: 'Raleway', sans-serif;
            color: #FFFFFF;
        }

        #strip {
            background-image: linear-gradient(to right top, #abb6a6, #a8b4a0, #a6b29a, #a4af94, #a3ad8d);
            font-family: 'Raleway', sans-serif;
        }
    </style>
    <script>
        function goBack() {
   window.history.back();
}
    </script>
</head>

<!-- the body section -->

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">&#127968;Home</a>
    </div>
    <h1><span style="color:white;" onclick="openNav()">&nbsp;&#9776;</span></h1>
    <center>
        <header>
            <h1>Potters Tea House</h1>
        </header>

        <main>
            <h1>Incorrect Credentials</h1>
            <button onclick="goBack()">Go Back</button>
        </main>
    </center>
</body>

</html>