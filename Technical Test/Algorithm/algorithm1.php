<?php
function reverseAlphabet($input) {
    $output = '';
    $letters = '';
    $len = strlen($input);
    
    // Loop pertama buat Ambil huruf-huruf dan simpan mereka dalam $letters
    for ($i = 0; $i < $len; $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) {
            $letters .= $char;
        }
    }
    
    // sttrev buat ngebalikin huruf
    $letters = strrev($letters);
    
    // nyimpen angka terakhir lagi
    $lettersIndex = 0;
    for ($i = 0; $i < $len; $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) {
            $output .= $letters[$lettersIndex];
            $lettersIndex++;
        } else {
            $output .= $char;
        }
    }
    
    return $output;
}

$input = "NEGIE1";
$output = reverseAlphabet($input);
echo "Hasil = " . $output;
?>
