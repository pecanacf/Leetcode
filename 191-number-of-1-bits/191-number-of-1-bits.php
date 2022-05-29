class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
             $n = decbin($n);
        return substr_count($n,'1');  
    }
}