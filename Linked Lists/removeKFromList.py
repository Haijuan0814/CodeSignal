# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def solution(l, k):
    arr = l
    newList = ListNode(0)
    newList.next = l
    prev = newList
    while(arr):
        if(arr.value == k):
            prev.next = arr.next
        else:
            prev = arr    
            
        arr = arr.next
        
    return newList.next

