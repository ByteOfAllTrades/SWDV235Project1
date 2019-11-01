<?php

/************************************
 *Modifies the comment value for a customer
 *************************************/
require_once('..\database\functions.php');


// Get IDs
$contact_id = filter_input(INPUT_POST, 'contact_id', FILTER_VALIDATE_INT); //gets contact id from the post
$com = filter_input(INPUT_POST, 'ccom'); // gets the modified comment string from the post
$eid = filter_input(INPUT_POST, 'eid');
// modifies comment in the database
modify($contact_id, $com);
?>
<!--html page as a backup for when the javascript fails-->
<html>

<head>
    <title>Potters Tea House</title>
    <style>
        /*styles the body of the document*/
        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            /*sets the linear gradient background, In my opinion they're nicer*/
            font-family: 'Raleway', sans-serif;
            /*sets the custom font that is common on the webpage*/
            color: #FFFFFF;
            /* color set to white*/
        }
    </style>
</head>

<body>
    <form id='rootform' action="..\emp.php" method="post">
        <!--form that re passes the root user and pass for use on the webpage should remain hidden-->
        <input type="hidden" name="uname" value="root">
        <!--input with the root user-->
        <input type="hidden" name="pass" value="Pa$$w0rd">
        <!--input with the root pass-->
        <input type="hidden" name="eid" value="<?php echo $eid ?>">

        <h1>Comment modified</h1>
        <!--this will only show if the javascript fails(AKA the page won't redirect)-->
        <input type="submit" value="Return">
        <!--alternate submit method incase the page doesn't redirect-->
    </form>
    <!--End of form-->
    <!--auto submit script-->
    <script type="text/javascript">
        document.getElementById('rootform').submit();
    </script>
</body>

</html>