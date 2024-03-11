// mapping
// check leading zero
// caculate equatation

function solution($crypt, $solution) {
    $mapping = array_combine(array_column($solution,0), array_column($solution,1));
    $decodedCrypt = array_map(function ($word) use ($mapping) {
        return strtr($word, $mapping);
    }, $crypt);
    
    if (intval($decodedCrypt[0]) + intval($decodedCrypt[1]) == intval($decodedCrypt[2])){
        $headingZero= array_map(function($word){
            return $word[0]=='0' && $word !=='0'?true:false; 
        },$decodedCrypt);

        if(in_array(true,$headingZero)){
            return false;
        }
        return true;
    } else {
        return false;
    }
    
}
