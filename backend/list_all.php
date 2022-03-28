<?php
require_once '../koneksi.php';

$sql = "select * from mahasiswa";
$result = pg_query($sql);
while($row = pg_fetch_object($result)) {
    echo $row->nim;
}
?>