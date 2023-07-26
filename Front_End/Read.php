<?php
require "../Back_End/dbConnector.php";
include "Header.php";

echo "<h1>$webName</h1>";

echo "
    <h3>Read a Vehicle by its ID:</h3>
    <p>Select the vehicle's <strong>ID</strong> that you would like to read and click <strong>Read</strong></p>
    ";

?>

<form method="post">
    <select id="selectIdForm" name="id"> <!-- Change the name attribute to "id" -->
        <option value="ID" disabled selected>ID</option>
        <?php
        // Call the ReadOnlyID() function to fetch the IDs
        $dbConn = ConmnGet();
        $result = ReadOnlyID($dbConn);

        // Generate the <option> elements using a while loop
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value=\"$id\">$id</option>";
        }
        ?>
    </select>

    <br />
    <input id="actionBtn" class="listItem" type="submit" name="Read" value="Read" />
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST["id"];

    // Create the database connection
    $dbConn = ConmnGet();

    // Call the Read function to fetch the JSON data.
    $jsonData = Read($dbConn, $id);

    // Check if the data was retrieved successfully.
    if ($jsonData) {
        // Fetch the JSON object from the result set.
        $row = mysqli_fetch_assoc($jsonData);

        // Decode the JSON data into an associative array.
        $vehicleInfo = json_decode($row['Json1'], true);

        // Check if the JSON was successfully decoded.
        if ($vehicleInfo) {

            // Create a table to display all vehicle information
            echo '
                   <br>
                    <h3>Vehicle Information</h3>
                   <table rules="all">
                    <tr>
                        <td>
                            <strong>ID</strong>
                        </td>
                        <td>
                            <strong>'. $vehicleInfo["id"] .'</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Year</strong>
                        </td>
                        <td>
                            ' . $vehicleInfo["year"] . '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Make</strong>
                        </td>
                        <td>
                            ' . $vehicleInfo["make"] . '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Model</strong>
                        </td>
                        <td>
                            ' . $vehicleInfo["model"] . '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Trim</strong>
                        </td>
                        <td>
                            ' . $vehicleInfo["trim"] . '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>MSRP</strong>
                        </td>
                        <td>
                            $' . $vehicleInfo["msrp"] . '
                        </td>
                    </tr>
                   </table>
                   <br>
                ';

        } else {
            echo "<h1>Failed to decode vehicle information. Please try again.</h1>";
        }
    } else {
        echo "<h1>Failed to read vehicle. Please try again.</h1>";
    }

    // Close the database connection
    mysqli_close($dbConn);
}

include "HomeBtn.php";

include "Footer.php";
?>
