function solution(a) {
    var n = a.length -1;
   
    const rows = n+1;
const cols = n+1; 
const newData = Array.from({ length: rows }, () => Array(cols).fill(undefined));


    
    for(i=0;i<=n;i++){
        for(j=0;j<=n;j++){
            var _i=j;
            var _j=n-i;
            newData[_i][_j] = a[i][j];
        }
    }
    return newData;
}
