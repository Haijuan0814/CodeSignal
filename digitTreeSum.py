#
# Binary trees are already defined with this interface:
# class Tree(object):
#   def __init__(self, x):
#     self.value = x
#     self.left = None
#     self.right = None


def solution(t , current_sum = 0):
    if not t:
        return 0
        
    current_sum = current_sum * 10 + t.value
    
    if not t.left and not t.right:
        return current_sum
        
    return solution(t.left, current_sum) + solution(t.right, current_sum)
                
        
 
        

