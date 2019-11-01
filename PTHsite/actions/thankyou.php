<?php
require_once('..\database\functions.php');
$visitor_fname = filter_input(INPUT_POST, 'fname');
$visitor_lname = filter_input(INPUT_POST, 'lname');
$visitor_email = filter_input(INPUT_POST, 'email');
$visitor_reason = filter_input(INPUT_POST, 'reason');
$visitor_msg = filter_input(INPUT_POST, 'qc');
$newsletter = filter_input(INPUT_POST, 'newsletter');
/* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg;  */
thanks($visitor_fname,$visitor_lname,$visitor_email,$visitor_reason,$visitor_msg,$newsletter)
// Validate inputs

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Potters Tea House</title>
        <style>
            body{
                background-image: linear-gradient(to right, #282b2f, #20262b, #172227, #0e1e21, #031a1b);
                font-family: 'Raleway', sans-serif;
                color: #FFFFFF;
            }
            #strip{
                background-image: linear-gradient(to right top, #abb6a6, #a8b4a0, #a6b29a, #a4af94, #a3ad8d);
                font-family: 'Raleway', sans-serif;
            }
        </style>

    </head>

    <body>
        <h1 id="strip">Thank you! We will get back to you shortly!</h1>
        <a id="strip" href="..\index.html">Back to main</a>
    </body>
</html>
