<?php	
	class Student{
		private  $first_name, $last_name, $id, $courses;
		
		function constructor($first_name, $last_name, $id, $courses)
		{
		$this->setFirstName($first_name);
		$this->setLastName($last_name);
		$this->setID($id);
		$this->setCourses($courses);
		}
		
		function getFirstName()
		{
			return $this->first_name;
		}
		function setFirstName($fn)
		{
			$this->first_name = $fn;
		}
		function getLastName()
		{
			return $this->last_name;
		}
		function setLastName($ln)
		{
			$this->last_name=$ln;
		}
		function getId()
		{
			return $this->id;
		}
		function setId($i)
		{
			$this->id=$i;
		}
		function getName()
		{
			return $this->last_name. ", ".$this->first_name;
		}
		function setCourses($c){
			$this->courses=$c;
		}
		function getCourses(){
			return $this->courses;
		}
	}
	
?>

	
		
