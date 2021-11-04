<?class Subjects{
	public $subjects_array = array(
		"КПЗ",
		"Фізична культура",
		"Алгебра",
		"Геометрія",
		"Розробка веб застосувань",
		"Фізика"
	);
	public $students = "Пасиченко,Безединов,Серый,Корниенко,Волошко";	
	
	public function show($arr){
		echo "<hr>";
		foreach($arr as $s){
				echo $s;
				echo "<br>";
		};
	}
	public function changeArray($search, $change){
		//$ind = array_search($search,$this->subjects_array);
		//$this->$subjects_array[$ind] = $change;                  doesnt want to work
		$this->subjects_array[array_search($search,$this->subjects_array)] = $change;
	}
	public function changeArray2($search,$change,$count){
		$i = -1;
		$check = 0;
		foreach($this->subjects_array as $s){
			$i++;
			if($s == $search){
				$check++;
			}
			if ($check==$count){
				$s = str_replace($search,$change,$s);
				$this->subjects_array[$i] = $s;
			}
		}
	}
	public function show_spec($arr){
		echo "<hr>";
		foreach($arr as $s){
				echo $s['name'];
				echo " - ";
				echo $s['kilkist'];
				echo " h<br>";
		};
	}
	public function expansion(){
		for($i=0;$i<count($this->subjects_array);$i++){
			$name = $this->subjects_array[$i];
			$this->subjects_array[$i] = array(
				"name"=>$name,
				"kilkist" => 5
			);
		}
		$subject_split = array_chunk($this->subjects_array,3);
		$this->show_spec($subject_split[0]);
		$this->show_spec($subject_split[1]);
	}
	
}?>