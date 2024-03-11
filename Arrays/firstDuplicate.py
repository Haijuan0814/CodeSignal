
# the aim is to find the first duplicate number
def solution(a):
    seen=set()
    for number in a:
        if number in seen:
            return number
        else:
            seen.add(number)
    return -1
        
        

