def solution(grid):
    rows = grid
    cols = list(zip(*grid))
    subs = []
    
    for i in range(0,7,3):
        for j in range(0,7,3):
            subs.append(grid[i][j:j+3] + grid[i+1][j:j+3] + grid[i+2][j:j+3])
            # subs.append([grid[r][c] for r in range(i,i+3) for c in range(j,j+3)])

    def isvalid(arr):
        numbers_only = [n for n in arr if n != '.']
        return len(numbers_only) == len(set(numbers_only))
        #set 无序不重复数据结构
    
    return all([
        all(map(isvalid, rows)),
        all(map(isvalid, cols)),
        all(map(isvalid, subs))
    ])
    

        

