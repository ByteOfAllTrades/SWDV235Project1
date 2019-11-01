<?php
/*Employee Log in page
 *Keeps out the riff raff
 *Also removes local storage item hasrunbefore 
 */
$lifetime = 60 * 60 * 24;
session_set_cookie_params($lifetime, '/');
session_start();

if (empty($_SESSION['user'])) {
    $_SESSION['pass'] = null;
}
if (empty($_SESSION['pass'])) {
    $_SESSION['pass'] = null;
}

// $query = 'SELECT * FROM employee
//                        ORDER BY employeeID';
// $statement = $db->prepare($query);
// $statement->execute();
// $employees = $statement->fetchAll();
// $statement->closeCursor();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Potters Tea House</title>
    <style>
        /*body style because I don't want to use the css file*/
        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            /*sets background to a linear gradient*/
            font-family: 'Raleway', sans-serif;
            /*sets custom font*/
            color: #FFFFFF;
            /*sets color*/
        }
    </style>
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
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">&#127968;Home</a>
    </div>
    <h1><span style="color:white;" onclick="openNav()">&nbsp;&#9776;</span></h1>
    <center>
        <h1 style="color:white;">Enter Credentials</h1>
    </center>
    <center>
        <form name="form1" method="post" action="handoff.php">
            First Name <br/>
            <input type="text" name="uname" placeholder="Username" required>
            <br/>
            Last Name <br/>
            <input type="text" name="pass" placeholder="Password" required>
            <br/>
            <br/>
            <label for="eid" style="color:white;">Select employee ID</label>
            <select name="eid" id="empid">
                <!-- <?php foreach ($employees as $employee) : ?>
                    <option value="<?php echo $employee['employeeID']; ?>"><?php echo $employee['employeeID']; ?></option>
                <?php endforeach ?> --> this is commented out to allow the login page to load in prod
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <br/>
            <br/>

            <input onclick="localStorage.removeItem('hasCodeRunBefore');" id="submit" type="submit" value="Submit">
        </form>
    </center>
</body>