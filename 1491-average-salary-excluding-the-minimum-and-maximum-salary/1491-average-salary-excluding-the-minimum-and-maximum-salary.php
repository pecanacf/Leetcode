class Solution {
    function average($salary) {
   
        unset($salary[array_search(max($salary),$salary)]);
        unset($salary[array_search(min($salary),$salary)]);
        return array_sum($salary)/count($salary);
   

    }
}