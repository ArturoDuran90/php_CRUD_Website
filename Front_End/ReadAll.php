<?php
require "../Back_End/dbConnector.php";
include "Header.php";

echo "<h1>$webName</h1>";

include "HomeBtn.php";

echo "
    <h3>Below are all vehicles and it's information.</h3>
    ";

// Create the database connection
$dbConn = ConmnGet();

// Call the Read function to fetch all vehicle data.
$jsonData = ReadAll($dbConn);

// Check if the data was retrieved successfully.
if ($jsonData) {
    // Loop through the result set and display each vehicle's information.
    while ($row = mysqli_fetch_assoc($jsonData)) {
        // Decode the JSON data into an associative array for each vehicle.
        $vehicleInfo = json_decode($row['Json1'], true);

        // Check if the JSON was successfully decoded.
        if ($vehicleInfo) {
            // Display vehicle information for each vehicle.

            echo '
                   <div>
                        <p>
                            <strong>Vehicle ID: </strong>' . $vehicleInfo['id'] .
                            ', <strong>Year:</strong> ' . $vehicleInfo["year"] .
                            ', <strong>Make:</strong> ' . $vehicleInfo["make"] .
                            ', <strong>Model:</strong> ' . $vehicleInfo["model"] .
                            ', <strong>Trim:</strong> ' . $vehicleInfo["trim"] .
                            ', <strong>MSRP:</strong> $' . $vehicleInfo["msrp"] .
                    '.</p>
                   </div>
                ';

        } else {
            echo "<h2>Failed to decode vehicle information for ID: " . $row['id'] . ". Skipping...</h2>
";
        }
    }
} else {
    echo "<h1>Failed to retrieve vehicle information. Please try again.</h1>
";
}

// Close the database connection
mysqli_close($dbConn);

include "Footer.php";
?>
