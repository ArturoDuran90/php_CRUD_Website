<?php
require "../Back_End/dbConnector.php";
include "Header.php";

echo "<h1>$webName</h1>";

echo "
    <h3>Update one Vehicle by it's ID:</h3>
    <p>Select the vehicle's <strong>ID</strong> that you would like to update,  fill out the information below
        and click <strong>Update Vehicle</strong></p>
    ";
?>

<form id="formList" method="post" action="../Back_End/UpdateQuery.php">
    <select id="selectIdForm" name="id">
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

    <input class="listItem" required type="number" id="vehicleYear" name="vehicleYear" placeholder="Year*" />

    <input class="listItem" required type="text" id="vehicleMake" name="vehicleMake" placeholder="Make*" />

    <input class="listItem" required type="text" id="vehicleModel" name="vehicleModel" placeholder="Model*" />

    <input class="listItem" type="text" id="vehicleTrim" name="vehicleTrim" placeholder="Trim" />

    <input class="listItem listItemNumber" required type="number" id="vehicleMSRP" name="vehicleMSRP" placeholder="MSRP*" />

    <span>
        <input id="actionBtn" class="listItem" type="submit" value="Update Vehicle"/>
        <p id="createPageDisclaimer">* required.</p>
    </span>
</form>

<?php
include "HomeBtn.php";

include "Footer.php";
?>
