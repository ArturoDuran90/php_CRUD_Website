<?php
$MenuArray = array(
    "Read All" => "ReadAll.php",
    "Create" => "Create.php",
    "Read" => "Read.php",
    "Update" => "Update.php",
    "Delete" => "Delete.php"
);
?>
<table id="menuList">
    <?php
    echo '
            <td class="listItem"><a href="' . $MenuArray['Read All'] . '"' . ' >Read All</a></td>
            <td class="listItem"><a href="' . $MenuArray['Create'] . '"' . ' >Create</a></td>
            <td class="listItem"><a href="' . $MenuArray['Read'] . '"' . ' >Read</a></td>
            <td class="listItem"><a href="' . $MenuArray['Update'] . '"' . ' >Update</a></td>
            <td class="listItem"><a href="' . $MenuArray['Delete'] . '"' . ' >Delete</a></td>
        ';
    ?>
</table>
