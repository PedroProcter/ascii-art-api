<?php

require 'inc/include.php';

$font = "basic-hash";
if (isset($_GET["font"])) {
    $font = strtolower($_GET["font"]);
}

$text = "HI MOM";
if (isset($_GET["text"])) {
    $text = strtoupper($_GET["text"]);
}
$text = str_split($text);

$letters = array();

foreach ($text as $letter) {
    array_push($letters, $fonts[$font][$letter]);
}

$lines = array();

for ($line = 0; $line < 9; $line += 1) {
    $lines[$line] = '';
}

foreach ($letters as $letter) {
    $letter_lines = explode("\n", $letter);
    for ($line = 0; $line < count($letter_lines); $line += 1) {
        $lines[$line] .= $letter_lines[$line];
    }
}

header("Content-Type: text-plain");

foreach ($lines as $line) {
    echo $line;
}
