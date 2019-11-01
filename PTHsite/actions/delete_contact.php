<?php

/************************************
 *Deletes customer comments
 *************************************/
require_once('..\database\functions.php');
// Get IDs
$contact_id = filter_input(INPUT_POST, 'contact_id', FILTER_VALIDATE_INT);
$eid = filter_input(INPUT_POST, 'eid');
// Delete the comment from the database
deleteContact($contact_id);
// Displays page only if js fails
?>
<html>

<head>
    <title>Potters Tea House</title>
    <style>
        body {
            background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
            font-family: 'Raleway', sans-serif;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <form id="rootform" action="..\emp.php" method="post">
        <input type="hidden" name="uname" value="root">
        <input type="hidden" name="pass" value="Pa$$w0rd">
        <input type="hidden" name="eid" value="<?php echo $eid ?>">
        <h1>Comment deleted successfully</h1>
        <input type="submit" value="Return">
    </form>
    <!--magic script that auto-submits a form-->
    <script type="text/javascript">
        document.getElementById('rootform').submit();
    </script>
</body>

</html>