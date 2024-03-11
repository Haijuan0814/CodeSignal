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
function solution($l1, $l2) {
    $result = new ListNode(0);
    $_result = $result;
    while ($l1 || $l2){
        if(!$l1){
            $_result->next = $l2;
            $l2 = null;
        }else if(!$l2){
            $_result->next = $l1;
            $l1 = null;
        }else{
            if($l1->value >= $l2->value){
                $_result->next = new ListNode($l2->value);
                $l2 = $l2->next;
            }else{
                $_result->next = new ListNode($l1->value);
                $l1 = $l1->next;
            }
        }
        $_result = $_result->next;
    }
    return $result->next;
}
