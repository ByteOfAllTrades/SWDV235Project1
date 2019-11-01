<?php
if (session_id() == "") {
    session_start();
}
require_once('database_1.php');
function delete($contact_id)
{
    global $db;
    if ($contact_id != false) {
        $query = 'UPDATE contact SET comment = NULL
                  WHERE contactID = :contact_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':contact_id', $contact_id);
        $statement = $statement->execute();
    }
}
function deleteContact($contact_id)
{
    global $db;
    if ($contact_id != false) {
        $query = 'DELETE FROM contact WHERE contactID = :contact_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':contact_id', $contact_id);
        $statement = $statement->execute();
    }
}
function modify($contact_id, $com)
{
    global $db;
    if ($contact_id != false) { //start of if statement
        $query = 'UPDATE contact SET comment = :com
                  WHERE contactID = :contact_id'; //query to update the comment table and set the comment to the modified version
        $statement = $db->prepare($query); //preparing the query
        $statement->bindValue(':contact_id', $contact_id); //binding php variables
        $statement->bindValue(':com', $com); //binding php variables
        $statement = $statement->execute(); //execute the statement
    }
}
function on()
{
    global $db;
    $query = 'UPDATE contact SET newsletter = "on"';
    $statement = $db->prepare($query);
    $statement = $statement->execute();
}
function off()
{
    global $db;
    $query = 'UPDATE contact SET newsletter = null';
    $statement = $db->prepare($query);
    $statement = $statement->execute();
}
function change($contact_id, $news)
{
    global $db;
    if ($contact_id != false) { //checks for a valid contact ID

        if ($news != NULL) { //checks if newsletters are off if so, set to off

            $query = 'UPDATE contact SET newsletter = NULL
                  WHERE contactID = :contact_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':contact_id', $contact_id);
            $statement->bindValue(':contact_id', $contact_id);
            $statement = $statement->execute();
        } else { //if newsletters are off set to on

            $query = 'UPDATE contact SET newsletter = "on"
                  WHERE contactID = :contact_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':contact_id', $contact_id);
            $statement = $statement->execute();
        }
    }
}
function thanks($visitor_fname, $visitor_lname, $visitor_email, $visitor_reason, $visitor_msg, $newsletter)
{


    if (
        $visitor_fname == null || $visitor_email == null ||
        $visitor_msg == null || $visitor_lname == null
    ) {
        $error = "Invalid input data. Check all fields and try again.";
        /* include('error.php'); */
        echo "Form Data Error: " . $error;
        exit();
    } else {
        $dsn = 'mysql:host=localhost;dbname=pthport';
        $username = 'root';
        $password = 'Pa$$w0rd';

        try {
            $db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            /* include('database_error.php'); */
            echo "DB Error: " . $error_message;
            exit();
        }
        // Add the product to the database  
        $query = 'INSERT INTO contact
                     (firstName,lastName, email, reason, comment, newsletter,emID)
                  VALUES
                     (:visitor_fname,:visitor_lname, :visitor_email,:visitor_reason, :visitor_msg, :newsletter,1)';
        $statement = $db->prepare($query);
        $statement->bindValue(':visitor_fname', $visitor_fname);
        $statement->bindValue(':visitor_lname', $visitor_lname);
        $statement->bindValue(':visitor_email', $visitor_email);
        $statement->bindValue(':visitor_reason', $visitor_reason);
        $statement->bindValue(':visitor_msg', $visitor_msg);
        $statement->bindValue(':newsletter', $newsletter);
        $statement->execute();
        $statement->closeCursor();
        /* echo "Fields: " . $visitor_name . $visitor_email . $visitor_msg; */
    }
}
