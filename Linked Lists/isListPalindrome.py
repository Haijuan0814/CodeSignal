# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def solution(l):
   
    middle = fast =l
    firstReverseHalf = list()
    while fast and fast.next:
        # get the middle
        middle = middle.next
        fast = fast.next.next
        
        # get the reverse of first half nodes
        temp = l.next
        l.next = firstReverseHalf
        firstReverseHalf = l
        l = temp
    
    if fast:
        middle = middle.next
    
    while middle:
        if middle.value != firstReverseHalf.value:
            return False
        middle = middle.next
        firstReverseHalf = firstReverseHalf.next
        
    return True
        

