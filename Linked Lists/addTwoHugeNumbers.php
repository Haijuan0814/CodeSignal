// Singly-linked lists are already defined with this interface:
// class ListNode {
//   public $value;
//   public $next;
//
//   public function __construct($x) {
//     $this->value = $x;
//     $this->next = null;
//   }
// }
//
/* solution --1 */
function reverseNode($node){
    $result=null;
    while($node){
        $temp = $node->next;
        $node->next = $result;
        $result = $node;
        $node = $temp;
    }
    return $result;
}
function solution($a, $b) {
    $aRev=reverseNode($a);
    $bRev=reverseNode($b);
    $carry = 0;

    $result = new ListNode(0);
    $sum = $result;
    
    while($aRev || $bRev){
        $s = $carry + ($aRev?$aRev->value:0) + ($bRev?$bRev->value:0);
        $carry =  $s>=10000 ? 1:0;
        $realS = $s>=10000? $s - 10000 : $s;
        
        $sum->next = new ListNode($realS);
        $sum = $sum->next;
        
        if($aRev != null) {
            $aRev = $aRev->next;
        }
        if($bRev != null) {
            $bRev = $bRev->next;
        }
        
    }
    
    //get anything left and cast it to int
    if($carry==1) {
        $sum->next = new ListNode(1);
        $sum = $sum->next;
    }
    $sum->next = null;
        
    return reverseNode($result->next);
    
}




/* solution --2 */
function solution2($a, $b) {
    $sum1=$sum2='';
    while($a){
        $sum1.=str_pad($a->value,4,'0',STR_PAD_LEFT);
        $a=$a->next;
    }
    while($b){
        $sum2.=str_pad($b->value,4,'0',STR_PAD_LEFT);
        $b=$b->next;
    }
    //$sum=intval($sum1)+intval($sum2);
    if($sum1 > PHP_INT_MAX || $sum2 > PHP_INT_MAX){
        echo 'bbb';
        $sum= maxAdd($sum1,$sum2);
    }else{
        $sum = intval($sum1)+intval($sum2);
    }
    
    $length = strlen($sum);
    $bei_length = $length % 4 ==0 ? $length : 4* (intval($length/4) +1);
    $bei_sum = ($bei_length ==$length)?$sum: str_pad($sum,$bei_length,'0',STR_PAD_LEFT);


    // 使用 str_split 将字符串拆分成长度为 4 的子字符串
    $result = str_split($bei_sum, 4);
    foreach($result as $k=>$v){
        $result[$k]=intval($v);
    }
    return $result;
}




function maxAdd($num1,$num2){

    // 补齐前导零，使两个数字长度相等
    $length = max(strlen($num1), strlen($num2));
    $num1 = str_pad($num1, $length, '0', STR_PAD_LEFT);
    $num2 = str_pad($num2, $length, '0', STR_PAD_LEFT);

    $carry = 0;
    $result = '';

    // 从右向左逐位相加
    for ($i = $length - 1; $i >= 0; $i--) {
        $sum = (int)$num1[$i] + (int)$num2[$i] + $carry;
        $digit = $sum % 10;
        $carry = (int)($sum / 10);
        $result = $digit . $result;
    }

    // 如果最高位有进位，加上进位
    if ($carry > 0) {
        $result = $carry . $result;
    }
    return $result; 
}

