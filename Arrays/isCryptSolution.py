

def solution(crypt, solution):
    sol = dict(solution)  # keyValue Format
    decodeCrypt = [("".join(sol[i] for i in word)) for word in crypt]
    
    if (decodeCrypt and int(decodeCrypt[0]) + int(decodeCrypt[1]) != int(decodeCrypt[2])):
        return False
        
    for number in decodeCrypt:
        print(number)
        if str(number)[0] == '0' and len(str(number)) > 1:
            return False
   
    return True
    
    
    

    

