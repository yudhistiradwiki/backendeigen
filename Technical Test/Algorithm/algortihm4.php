<?php
function diagonalDifference($matrix) {
    $n = count($matrix);
    $primarySum = 0;
    $secondarySum = 0;

    for ($i = 0; $i < $n; $i++) {
        $primarySum += $matrix[$i][$i];
        $secondarySum += $matrix[$i][$n - $i - 1];
    }

    return abs($primarySum - $secondarySum);
}

$matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]];
$result = diagonalDifference($matrix);

echo "Hasil = " . $result;
?>
