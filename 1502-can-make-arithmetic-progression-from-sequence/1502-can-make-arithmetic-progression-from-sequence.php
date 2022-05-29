class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr) {
        sort($arr);
        
        for($i=0;$i<count($arr)-2;$i++){
            if($arr[$i]-$arr[$i+1] !== $arr[$i+1]-$arr[$i+2]) return false;
        } return true;
    }
}