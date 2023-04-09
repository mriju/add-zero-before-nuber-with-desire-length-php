<?php
// Your code here!
//one dimantional arrary 
function generateminute(){
    for($i=1; $i<=60; $i++){
        $str_length = 2;
        $i = substr("0{$i}", -$str_length);
        $result[] = $i; 
        
    }
    return $result;
}
print_r(generateminute());


//multi dimentional array
<?php echo sprintf("%02s",$key+1)?>
?>
