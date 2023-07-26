<?php
require "../Back_End/dbConnector.php";
include "Header.php";

echo "<h1>$webName</h1>";

echo "
    <h3>Delete a Vehicle by its ID:</h3>
    <p>Select the vehicle's <strong>ID</strong> that you would like to delete and click <strong>Delete</strong></p>
    ";
?>

<form method="post" action="../Back_End/DeleteQuery.php">
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

    <br />
    <input id="actionBtn" class="listItem" type="submit" name="Delete" value="Delete" />
</form>

<?php
include "HomeBtn.php";

include "Footer.php";
?>
