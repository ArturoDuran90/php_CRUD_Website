<?php
require "dbProperties.php";

// ///////////////////////////////////////////////////
// Get db connection
function ConmnGet()
{
    // $dbConn will contain a resource link to the database
    // @ Don't display error
    $dbConn = @mysqli_connect(DB_SERVER, DB_USER, DB_PSWD, DB_NAME, 3306)
        or die('Failed to connect to MySQL ' . DB_SERVER . '::' . DB_NAME . ' : ' . mysqli_connect_error()); // Display messge and end PHP script

    return $dbConn;
}

// ///////////////////////////////////////////////////
// Get all the records as a json objects
function ReadAll($dbConn)
{

    $query = "SELECT JSON_OBJECT(
        'id', vehicleinfo.vehicles.id,
        'year', vehicleinfo.vehicles.year,
        'make', vehicleinfo.vehicles.make,
        'model', vehicleinfo.vehicles.model,
        'trim', vehicleinfo.vehicles.trim,
        'msrp', vehicleinfo.vehicles.msrp) as Json1
        FROM vehicleinfo.vehicles;";

    return @mysqli_query($dbConn, $query);
}

// ///////////////////////////////////////////////////
// Create a record
function Create($dbConn, $year, $make, $model, $trim, $msrp)
{

    $query = "INSERT INTO vehicleinfo.vehicles (year, make, model, trim, msrp)
        VALUES(
            $year,
            '$make',
            '$model',
            '$trim',
            $msrp);";

    return @mysqli_query($dbConn, $query);
}

// ///////////////////////////////////////////////////
// Get one record
function Read($dbConn, $id)
{

    $query = "SELECT JSON_OBJECT(
        'id', vehicleinfo.vehicles.id,
        'year', vehicleinfo.vehicles.year,
        'make', vehicleinfo.vehicles.make,
        'model', vehicleinfo.vehicles.model,
        'trim', vehicleinfo.vehicles.trim,
        'msrp', vehicleinfo.vehicles.msrp) as Json1
        FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id = $id;";

    return @mysqli_query($dbConn, $query);
}

// ///////////////////////////////////////////////////
// Update one record
function Update($dbConn, $id, $year, $make, $model, $trim, $msrp)
{

    $query = "UPDATE vehicleinfo.vehicles
                SET year = $year,
                    make = '$make',
                    model = '$model',
                    trim = '$trim',
                    msrp = $msrp
                WHERE id = $id;";

    return @mysqli_query($dbConn, $query);
}

// ///////////////////////////////////////////////////
// Delete one record
function DeleteEntrie($dbConn, $id)
{

    $query = "DELETE FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id = $id";

    return @mysqli_query($dbConn, $query);
}

function ReadOnlyID($dbConn)
{
    $query = "SELECT id FROM vehicleinfo.vehicles;";

    return @mysqli_query($dbConn, $query);
}
?>