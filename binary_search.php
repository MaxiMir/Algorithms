<?

	function binary_search(array $nums, int $search_num)
	{
		$startInd = 0;
		$endInd = count($nums) - 1;		

		while ($startInd <= $endInd) { 
			$average = ($startInd + $endInd) / 2;
			$middleInd = is_float($average) ? floor($average) : $average;
			$currElem = $nums[$middleInd];

			if ($currElem == $search_num) {
				return $middleInd;	
			} elseif ($currElem > $search_num) {
				$endInd = $middleInd - 1;
			} else {
				$startInd = $middleInd + 1;
			}
		}

		return null;
	}