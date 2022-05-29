class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $array = str_split(strval($n));
        $product = 1;
        $sum = 0;
        
        for($i=0;$i<count($array);$i++){
            $product*=$array[$i];
            $sum+=$array[$i];
        }
        return $product-$sum;
    }
}