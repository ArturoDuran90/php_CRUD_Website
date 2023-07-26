<?php
include "Header.php";

echo "<h1>$webName</h1>";

include "Navbar.php";

//Create a simple Unordered list to show what each navbar menu does
echo "
    <h3>Welcome to my Api Assignment</h3>
    <p>Each item on the <strong>Navbar</strong> is a different page where you can test <i>CRUD</i> operations for a Vehicle database.</p>
    <p>Below you'll see what each one does:</p>
    <ul>
        <li><strong>Read All</strong>
            <ul>
                <li class='rules'>Here you can read all the entries from the Database.</li>
            </ul>
        </li>
        <li><strong>Create</strong>
            <ul>
                <li class='rules'>Here you can 'Create' a new entrie for the Database.</li>
            </ul>
        </li>
        <li><strong>Read</strong>
            <ul>
                <li class='rules'>Here you can 'Read' a single entrie from the Database by it's <strong>ID</strong>.</li>
            </ul>
        </li>
        <li><strong>Update</strong>
            <ul>
                <li class='rules'>Here you can 'Update' a single entrie from the Database by it's <strong>ID</strong>.</li>
            </ul>
        </li>
        <li><strong>Delete</strong>
            <ul>
                <li class='rules'>Here you can 'Delete' a single entrie from the Database by it's <strong>ID</strong>.</li>
            </ul>
        </li>
    </ul>
";

include "Footer.php";
?>