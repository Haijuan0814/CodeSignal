# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def solution(l1, l2):
    result = ListNode(0)
    _result = result
    while(l1 or l2):
        if l1 == None:
            _result.next = ListNode(l2.value)
            l2 = l2.next
        elif l2 == None:
            _result.next = ListNode(l1.value)
            l1 = l1.next
        else:
            if l1.value >= l2.value:
                _result.next = ListNode(l2.value)
                l2 = l2.next
            else:
                _result.next = ListNode(l1.value)
                l1 = l1.next
        _result = _result.next
    return result.next
        

