# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#

# solution-1
def solution(l, n):
    result = []
    while l is not None:
        result.append(l.value)
        l = l.next
    first = result[:-n] # 0~n
    second = result[-n:] # n~last
    return second + first
    

# solution-2
def solution1(l, n):
    if n==0:
        return l
        
    # reverse
    revL = None
    while(l):
        temp = l.next
        l.next = revL
        revL = l
        l= temp
        
    # loop the reverse
    index = 0
    first = second = None
 
    while(revL):
        temp = revL.next
        if index < n:
            revL.next = first
            first = revL
        else:
            revL.next = second
            second = revL
        revL = temp
        index = index + 1
        
    result = first
    while first.next:
        first = first.next
    first.next = second   
    return result
        
        

