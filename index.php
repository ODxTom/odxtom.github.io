<?php

// Sets the 
$dbName = $_SERVER["DOCUMENT_ROOT"] . "/Website/Jobs.accdb";

// Checks if the database exists
if (!file_exists($dbName)) {
    die("Could not find database file.");
}

// Opens the database using the suitable driver
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$dbName; Uid=; Pwd=;");

// Gets all variables from the html form
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

// First line of sql
$sql = "INSERT INTO Enquiries (Name, Email, Details)";
// Second line of sql
$sql .= "VALUES ('" . $name . "', '" . $email . "', '" . $details . "')";

// Executes sql code
if (!$db->query($sql)) {
    die("Could not execute SQL command.");
}
else {
    echo 'Your enquiry has been successfully submitted!';
}

?>