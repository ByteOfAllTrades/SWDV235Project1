<?php
/*
Employee accessible database modification form
*/
if (session_id() == ""){
    session_start();
}
require_once '..\PTHsite\database\database.php';
require_once '..\PTHsite\database\functions.php'; // requires database
$eid = $_SESSION['eid']; //gets employee Id from post

$query = 'SELECT * FROM contact WHERE emID = :eid
                       ORDER BY contactID'; //selects contacts assigned to that employee
$statement = $db->prepare($query); //prepares query
$statement->bindValue(':eid', $eid); //binds eid to $eid
$statement->execute(); //execution
$contacts = $statement->fetchAll(); //fetches all the results
$statement->closeCursor(); //closes

$query = 'SELECT * FROM employee WHERE  employeeID = :eid
                       ORDER BY employeeID'; //slects and orders employees with the eid from above
$statement = $db->prepare($query); // prepares query
$statement->bindValue(':eid', $eid); //binds eid
$statement->execute(); //execution
$employees = $statement->fetchAll(); //fetches all employees that match the eid(should only be 1)
$statement->closeCursor(); //closes
?>
<!DOCTYPE html>
<html>

<!-- the head section -->

<head>
    <title>Potters Tea House</title>

    <!--header section(almost all of this is to get the slide menu to work)-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <style>
        table,
        th,
        td {
            border-right: 1px dotted white;
            border-left: 1px solid white;
            border-bottom: 1px solid white;

        }

        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            font-family: 'Raleway', sans-serif;
            color: #FFFFFF;
        }
    </style>
    <!--styings for the table and body-->
    <script>
        function hideStuff(id) {
            document.getElementById(id).style.display = 'none';
        }

        function showStuff(id) {
            document.getElementById(id).style.display = 'block';
        }
        window.onload = function() {
            if (localStorage.getItem("hasCodeRunBefore") === null) {
                hideStuff('hideme');
                hideStuff('hide');
                showStuff('show');
                localStorage.setItem("hasCodeRunBefore", true);
            } else if (localStorage.getItem("hasCodeRunBefore") != null) {
                hideStuff('show');
            }
        }
    </script>
    <!--show, hide, and check local storage to see if this page has been run before-->
</head>

<!-- the body section -->

<body>
    <!--Sidenav for site navigation-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">&#127968;Home</a>
        <a href ="lemp.php">&#9741; Employee List</a>
        <a href="emp_validate.php">&#9967;Log Out</a>
    </div>
    <h1><span style="color:white;" onclick="openNav()">&nbsp;&#9776;</span></h1>


    <header>
        <h1>Contact Manager</h1>
    </header>
    <main>
        <h1>Contact List</h1>
        <!--first table: employees-->
        <table id="potter">

            <tr>
                <th>Employee Id</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <?php foreach ($employees as $employee) : ?>
                <tr>
                    <td><?php echo $employee['employeeID']; ?></td>
                    <td><?php echo $employee['firstName']; ?></td>
                    <td><?php echo $employee['lastName']; ?></td>
                    <td><button id="hide" onclick="hideStuff('hideme'); hideStuff('hide'); showStuff('show');">Hide contacts</button><button id="show" onclick="showStuff('hideme'); showStuff('hide');hideStuff('show');">Show contacts</button></td>
                    <!--buttons to show and hide returned table-->
                </tr>
            <?php endforeach ?>
        </table>
        <!--second table: contacts-->
        <div id="hideme">
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Newsletters</th>
                    <th>News ON/OFF <br/>
                        <form action="..\PTHsite\actions\allon.php" method="post">
                            <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                            <input type="hidden" name="eid" value="<?php echo $eid ?>">
                            <input type="submit" value="Urgent News">
                        </form>
                        <form action="..\PTHsite\actions\alloff.php" method="post">
                            <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                            <input type="hidden" name="eid" value="<?php echo $eid ?>">
                            <input type="submit" value="Toggle Off">
                        </form>
                    </th>
                    <th>Delete Comment</th>
                    <th>Modify Comment</th>
                    <th>Delete Contact</th>
                </tr>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <td><?php echo $contact['firstName']; ?></td>
                        <td><?php echo $contact['lastName']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td style="width: 300px"><?php echo $contact['comment']; ?></td>
                        <td><?php echo $contact['newsletter']; ?></td>
                        <td>
                            <form action="actions\newsletter.php" method="post">
                                <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                                <input type="hidden" name="state" value="<?php echo $contact['newsletter']; ?>">
                                <input type="hidden" name="eid" value="<?php echo $eid ?>">
                                <input type="submit" value="Change">
                            </form>
                        </td>
                        <td>
                            <form action="actions\delete_comment.php" method="post">
                                <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                                <input type="hidden" name="eid" value="<?php echo $eid ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                        <td>
                            <form action="actions\modcom.php" method="post">
                                <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                                <input type="hidden" name="eid" value="<?php echo $eid ?>">
                                <input type="submit" value="Modify"> <input type="text" name="ccom">
                            </form>
                        </td>
                        <td>
                        <form action="actions\delete_contact.php" method="post">
                                <input type="hidden" name="contact_id" value="<?php echo $contact['contactID']; ?>">
                                <input type="hidden" name="eid" value="<?php echo $eid ?>">
                                <input type="submit" value="Delete Contact"
                                ">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <!-- add code for the rest of the table here -->

            </table>
        </div>
</body>

</html>