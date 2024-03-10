def solution(fileSystem):
    
    if not fileSystem:
        return 0
    if '.' not in fileSystem:
        return 0
    
    stack = [0]
    _stack = []
    maxLength = 0
    
    # parts = fileSystem.split('\f')
    
    pathLen = {0:0} # dictionary
    
    for part in fileSystem.splitlines():
        name = part.lstrip('\t')
        depth = len(part) - len(name)

        if '.' in name:
            currentLength = pathLen[depth] + len(name)
            maxLength = max(maxLength,currentLength)
        else:
            pathLen[depth+1] = pathLen[depth] + len(name)+1
        
    print(pathLen)
    return maxLength