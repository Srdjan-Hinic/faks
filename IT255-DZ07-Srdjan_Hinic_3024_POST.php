<?php
    // Displays the root, square and primarity of a number
$a = $_POST['a'];

    header("Content-type: application/json");
    
    $isPrime = TRUE;
    for ($i = 2; $i <=sqrt($a); $i++) {
        if ($a % $i == 0) {
            $isPrime = FALSE;
        }

    }
    $test_array = array (
        'Broj' => ($a),
        'Kvadrat' =>($a*$a),
        'Koren' => (sqrt($a)),
        'Prost' => ($isPrime),
    );
    echo json_encode($test_array);


?>
