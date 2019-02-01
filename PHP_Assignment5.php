<style>
body{
    font-size:40px;
    text-align:center;
    margin-top:10%;
}

</style>
<?php

// I added One Line

//I added Second Line



$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name);
echo"File Name is: <b>".$current_file_name."</b>";
echo"<br>";
echo "Last modified <b> " . date("l, dS F, Y, h:ia", $file_last_modified)."</b>\n\n";


$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo"<br>";
echo "There are<b>  ".$no_of_lines."</b>lines in<b>  ".$file."\n";
?>