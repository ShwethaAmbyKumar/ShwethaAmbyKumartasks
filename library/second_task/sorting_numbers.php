<?php
function binarySearch($arr, $l, $r, $x)
{
    if ($r >= $l)
    {
        $mid = $l + ($r - $l)/2;
        if ($arr[$mid] == $x)
            return $mid;
        if ($arr[$mid] > $x)
            return binarySearch($arr, $l, $mid - 1, $x);
        return binarySearch($arr, $mid + 1, $r, $x);
    }
    return -1;
}
 
function findPos($arr, $key)
{
    $l = 0; $h = 1;
    $val = $arr[0];
 
    while ($val < $key)
    {
         
        $l = $h;    
         
        $h = 2 * $h;

        $val = $arr[$h];
    }
 
    return binarySearch($arr, $l, $h, $key);
}
 
    $arr = array(3, 5, 7, 9, 10, 90, 100,
                 130, 140, 160, 170);
    $ans = findPos($arr, 10);
    if ($ans ==- 1)
        echo "Number not found";
    else
        echo "Number found at position " , $ans;
 
?>