<?php
include "dbConnector.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id"];

    // Create the database connection
    $dbConn = ConmnGet();

    // Perform the deletion
    if (DeleteEntrie($dbConn, $id)) {
        // Vehicle deleted successfully, you can redirect to a success page or display a success message.
        header("Location: ../Front_End/index.php");
        exit();
    } else {
        // Handle the case where vehicle deletion fails.
        echo "<h1>Failed to delete vehicle. Please try again.</h1>";
    }

    // Close the database connection
    mysqli_close($dbConn);
}
?>
