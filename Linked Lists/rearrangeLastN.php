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
function solution($l, $n) {
    $result = [];
    while($l){
        $result[] = $l->value;
        $l = $l->next;
    }
    $first = array_slice($result,0,count($result)-$n);
    $second = array_slice($result,-$n,$n);
    return array_merge($second,$first);
    
}
