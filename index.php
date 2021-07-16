<?php

class BubbleArray {
    
    public $data;

    function __construct($data) {
        $this->data = $data;
    }

    function sort(){

        $my_array = $this->data;

        do{
            $swapped = false;
            for($i = 0, $c = count( $my_array ) - 1; $i < $c; $i++){
                if($my_array[$i] > $my_array[$i + 1] ){
                    list($my_array[$i + 1], $my_array[$i] ) = array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }

        while($swapped);
        return $my_array;
    
    }

}

$array = array(3, 0, 2, 5, -1, 4, 1);

$bubbleArray = new BubbleArray($array);

echo "Original Array :\n";
echo implode(', ', $array);
echo "\nSorted Array\n:";
echo implode(', ', $bubbleArray->sort()). PHP_EOL;

?>