<?php
function longest($sentence) {
    $words = explode(' ', $sentence);
    $longestWord = '';
    
    foreach ($words as $word) {
        // buat hapus tanda baca di sentece
        $cleanedWord = preg_replace('/[^A-Za-z0-9\-]/', '', $word);
        
        if (strlen($cleanedWord) > strlen($longestWord)) {
            $longestWord = $cleanedWord;
        }
    }
    
    return $longestWord;
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
$longestWord = longest($sentence);
echo "Kata terpanjang: " . $longestWord . ": " . strlen($longestWord) . " karakter";
?>
