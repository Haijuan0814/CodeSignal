# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def reverseNode(node):
    result= None
    while node:
        temp = node.next
        node.next = result
        result = node
        node = temp
    return result

def solution(a, b):
    aRev = reverseNode(a)
    bRev = reverseNode(b)
    carry = 0
    result = ListNode(0)
    _result = result
    
    while(aRev or bRev):
        value = carry
        if(aRev):
            value = value + aRev.value
            aRev = aRev.next
        if(bRev):
            value = value + bRev.value
            bRev = bRev.next
            
        carry = value // 10000
        n = ListNode(value % 10000)
        _result.next = n
        _result = _result.next
        
    if(carry==1):
        n = ListNode(carry)
        _result.next = n

    return reverseNode(result.next) 
            

