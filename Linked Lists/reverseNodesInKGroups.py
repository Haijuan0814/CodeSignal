# Singly-linked lists are already defined with this interface:
# class ListNode(object):
#   def __init__(self, x):
#     self.value = x
#     self.next = None
#
def solution(l, k):
    a = []
    b = []
    while(l):
        a.append(l.value)
        l = l.next
        if len(a)==k:
            _a = list(reversed(a))
            b.extend(_a)
            a=[]
    b.extend(a)
    return b;

