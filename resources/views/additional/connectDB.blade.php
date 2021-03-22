<?php
$connection = pg_connect("host=localhost port=5444 dbname=text user=postgres password=1234");
if($connection) {
    echo 'connected';
} else {
    echo 'there has been an error connecting';
}

?>
