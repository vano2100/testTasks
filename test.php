<?php

class Sequence{
	private $numbers = [];
	private $maxCount;

	public function __construct($maxCount){
		$this->maxCount = $maxCount;
	}

	public function add($num){
		if ( count($this->numbers) < $this->maxCount ){
			$this->numbers[] = $num;
		} else{
			$this->Numbers[$this->getMinNumber()] = $num;
		}
	}

	private function getMinNumber(){
		$minVal = 0;
		$minKey = 0;
		foreach($this->numbers as $key => $value){
			if ($minVal > $value){
				$minKey = $key;
				$minVal = $value;
			}
		}
		return $minKey;
	}

	public function getMaxNumbers(){
		return $this->numbers;
	}
}

$digits = function(int $length)
{
  while ($length > 0) {
    yield mt_rand();
    --$length;
  }
};


$sequence = new Sequence(5);
foreach ($digits(20) as $number) {
  $sequence->add($number);
}
print_r($sequence->getMaxNumbers());
