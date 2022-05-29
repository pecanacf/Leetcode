class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @param Integer[][] $points
     * @return Integer
     */
    function nearestValidPoint($x, $y, $points) {
        $manhattanDiff = INF;
        for ($i = 0; $i < count($points); $i++) {
            if ($x === $points[$i][0] && $y === $points[$i][1])
                echo $i;

            if ($x === $points[$i][0] || $y === $points[$i][1]) {
                $diff = ($x + $y) - ($points[$i][0] + $points[$i][1]);
                if (abs($diff) < $manhattanDiff) {
                    $manhattanDiff = abs($diff);
                    $index = $i;
                }
            }
        }
        if (isset($index)) {
            return $index;
        } else return -1;
    }
}