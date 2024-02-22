<?php

function store_data($name, $email)
{
    $file = fopen(submit_file, 'a+');
    if ($file) {
        $input = date("Y-m-d H:i:s") . ";" . $_SERVER['REMOTE_ADDR'] . ";" . $name . ";" . $email . PHP_EOL;
        if (fwrite($file, $input)) {
            fclose($file);
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

function display_data()
{
    $lines = file(submit_file);
    foreach ($lines as $line) {
        $values = explode(";", $line);
        // foreach ($values as $value) {
        //     echo $value;
        // }
        echo "<div class='card mb-3'>";
        echo "<div class='card-header fw-bold text-center'>Your Information</div>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>Name: $values[2]</h5>";
        echo "<p class='card-text lead'>Email: $values[3]</p>";
        echo "<p class='card-text lead'>Date: $values[0]</p>";
        echo "<p class='card-text lead'>IP: $values[1]</p>";
        echo "</div>";
        echo "</div>";
    }
}
?>