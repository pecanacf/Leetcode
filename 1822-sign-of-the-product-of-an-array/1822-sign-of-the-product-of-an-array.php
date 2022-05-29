class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arraySign($nums) {
    {
      $sign = 1;
        foreach ($nums as $num) {
            if ($num < 0) $sign *= -1;
            if ($num === 0) return 0;
        }
        return $sign;
    }
    }
}