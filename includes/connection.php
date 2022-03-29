<?php
 $db = mysqli_connect('remotemysql.com', 'Sj8WSEw2T2', '5U8tgYByzz') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'Sj8WSEw2T2' ) or die(mysqli_error($db));
?>