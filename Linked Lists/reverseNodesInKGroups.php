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
/*---solution 1-----------*/
function solution($l, $k) {
    $a = $b = [];
    while($l){
        $a[] = $l->value;
        $l = $l->next;
        if(count($a)==$k){
            $b = $b ? array_merge($b,array_reverse($a)):array_reverse($a);
            $a = [];
        }
    }
    $b = array_merge($b,$a);
    return $b;
}

/*---soulution 2--*/
function reverseNode($node){
    $result=null;
    $length =0;
    while($node){
        $temp = $node->next;
        $node->next = $result;
        $result = $node;
        $node = $temp;
        $length++;
    }
    return $result;
}

function solution2($l, $k) {
    if($k<=1){
        return $l;
    }
    
    $index = 0;
    $ret = new ListNode(0);
    $_ret = $ret;
    $block = null;
    
    while($l){
        $temp = $l->next;
        $l->next = $block;
        $block = $l;
        $l = $temp;
        $index++;
        if($index==$k){
            $_ret->next = $block;
            while($block){
                $_ret = $_ret->next;
                $block =$block->next;
            }
            $index=0;
        }
    }
    //last group which number less than K, don't have to reverse
    if($block){
        $_ret->next = reverseNode($block);
    }
    return $ret->next;
}
