<?php
//echo readfile("file.txt");
$name="file.txt";
$file = fopen("file.txt", "r") or die("Unable to open");
$text = fread($file, filesize("file.txt"));

fclose($file);
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$vc = 0;
$cc = 0;
$dc = 0;
$sc = 0;
$no_of_lines = count(file($name));

$wc=str_word_count($text);
$length = strlen($text);
for ($i = 0; $i < $length; $i++) {
    if (ctype_alpha($text[$i])) {
        if (array_search($text[$i], $vowels))
            $vc++;
        else
            $cc++;
    }
    elseif(ctype_digit($text[$i]))
        $dc++;
    else
        $sc++;
 //       echo $text[$i];
}
echo $text;
echo "<br>Total vowels: " . $vc;
echo "<br>Total consonants: " . $cc;
echo "<br>Total digits: " . $dc;
echo "<br>Total special characters: " . $sc;
echo "<br>Total words: " . $wc;
echo "<br>There are $no_of_lines lines";
echo "<br>File size of ".$name." is: ". filesize("file.txt")." bytes";
