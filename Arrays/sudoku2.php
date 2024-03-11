//每一行不能重复
//每一列不能重复
//每个3*3的表格不能重复
function solution($grid) {
    for($index=0;$index<9;$index++){
        $row = $grid[$index];
        $column = array_column($grid,$index);
        $block = []; 
        for ($i = 3 * floor($index / 3); $i < 3 * floor($index / 3) + 3; $i++) {
            for ($j = 3 * ($index % 3); $j < 3 * ($index % 3) + 3; $j++) {
                $block[]=$grid[$i][$j];
            }
        }
        $check = repeatCheck($row)&&repeatCheck($column)&&repeatCheck($block);
        if(!$check){
            return false;
        }
    }

    
    
    return true;
}




//每一行不能重复
//每一列不能重复
//每个3*3的表格不能重复
function solution1($grid) {
    //每一行不能重复
    foreach($grid as $k=>$row){
        //提取数字
        $row_check = repeatCheck($row);
        if(!$row_check){
            return false;
        }
    }
    
    //每一列不能重复
    for($i=0;$i<9;$i++){
        $line=[];
        foreach($grid as $k=>$row){
            $line[]=$row[$i];
        }
        $line_check = repeatCheck($line);
        if(!$line_check){
            return false;
        }
    }

    // 检查每个3×3子网格是否包含1到9的数字
    for ($block = 0; $block < 9; $block++) {
        $blockSet = [];
        for ($i = 3 * floor($block / 3); $i < 3 * floor($block / 3) + 3; $i++) {
            for ($j = 3 * ($block % 3); $j < 3 * ($block % 3) + 3; $j++) {
                $blockSet[]=$grid[$i][$j];
            }
        }
        $block_check = repeatCheck($blockSet);
        if(!$block_check){
            return false;
        }
    }
    
    return true;
}


function repeatCheck($row) {
    //提取数字
    $row = array_filter($row, 'is_numeric');
    //$row_intval = array_map('intval', $row);
    // 判断是否有重复数据
    if($row){
        $row_unique = array_unique($row);
        if (count($row) === count($row_unique)) {
            return true;
        } else {
            return false;
        }
    }else{
        return true;
    }
}
