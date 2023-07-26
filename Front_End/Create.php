<?php
include "Header.php";

echo "<h1>$webName</h1>";

echo "
    <h3>Create a Vehicle:</h3>
    <p>Fill out the information below and click <strong>Create Vehicle</strong> to submit your entrie.</p>
    ";
?>

<form id="formList" method="post" action="../Back_End/CreateQuery.php">
    <input class="listItem" required type="number" id="vehicleYear" name="vehicleYear" placeholder="Year*" />


    <input class="listItem" required type="text" id="vehicleMake" name="vehicleMake" placeholder="Make*" />


    <input class="listItem" required type="text" id="vehicleModel" name="vehicleModel" placeholder="Model*" />


    <input class="listItem" type="text" id="vehicleTrim" name="vehicleTrim" placeholder="Trim" />


    <input class="listItem listItemNumber" required type="number" id="vehicleMSRP" name="vehicleMSRP" placeholder="MSRP*" />


    <span>
        <input id="actionBtn" class="listItem" type="submit" value="Create Vehicle" />

        <p id="createPageDisclaimer">* required.</p>
    </span>




</form>



<?php
include "HomeBtn.php";

include "Footer.php";
?>
