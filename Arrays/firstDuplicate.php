function solution($a) {
    
    $duplicate = array_diff_assoc($a,array_unique($a));
    var_dump($duplicate);
    $count = count($duplicate);
    if($count>=1)
        return current($duplicate);
    else
        return -1;
}
