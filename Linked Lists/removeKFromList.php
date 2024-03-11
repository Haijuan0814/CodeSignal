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

function solution($l, $k) {
    $newList = new ListNode(0);
    $newList->next = $l;
    $prev = $newList;
    while($l){
        if($l->value == $k){
            $prev->next=$l->next;
        }else{
            $prev = $l;
        }
        $l = $l->next;
    }
    return $newList->next;
    
}
