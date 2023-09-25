<?php
function countWords($input, $query) {
    $result = [];
    
    foreach ($query as $word) {
        $count = 0;
        
        foreach ($input as $inputWord) {
            if ($word === $inputWord) {
                $count++;
            }
        }
        
        $result[] = $count;
    }
    
    return $result;
}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];

$output = countWords($input, $query);

echo '[' . implode(', ', $output) . ']'; // Output: [1, 0, 2]
?>
