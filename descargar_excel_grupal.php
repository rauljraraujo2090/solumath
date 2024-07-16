<?php
header("Content-disposition: attachment; filename=archivo.xlsx");
header("Content-type: MIME");
readfile("archivo.xlsx");
?>