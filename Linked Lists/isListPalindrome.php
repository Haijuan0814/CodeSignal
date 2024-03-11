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
function solution($list) {
    //get the middle and reverse the first half
    $middle=$fast=$list;
    $reverse=null;
    while($fast && $fast->next!=null){
        $middle = $middle->next;
        $fast = $fast->next->next;
        
        $temp = $list->next;
        $list->next = $reverse;
        $reverse = $list;
        $list = $temp;
    }
    //fast left 1, odd number of nodes
    if($fast){
        $middle=$middle->next;
    }
    
    while ($middle) {
        if ($reverse->value != $middle->value) return false;
        $middle = $middle->next;
        $reverse = $reverse->next;
    }
    return true;
}
