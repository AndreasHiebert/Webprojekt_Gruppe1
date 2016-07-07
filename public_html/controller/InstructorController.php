<?php

class InstructorController {

	public function showInstructorPage() {
		global $smarty;

		return $smarty->fetch('../view/Instructor.html');
	}

	public function approveInstructor() {
		global $smarty;

		$tempRepo =  new InstructorRepository();
		$tempObjects = $tempRepo->getAllInstructors();
		$tempInstructor = new Instructor();
		$tempInstructor = $tempObjects[$_REQUEST['id']-1];
		$tempInstructor->setApproved(1);
		$tempRepo->saveInstructor($tempInstructor);

		
		echo "<script type='text/javascript'>
		location.href=\"index.php\";
		</script>";
	}

	

	public function createAchievement() {
		global $smarty;
		global $db;

		$code = $_REQUEST['code'];
		$name = $_REQUEST['name'];
		$points = $_REQUEST['points'];
		$obtained = time()+3600;
		$obtained = date('Y-m-d H:i:s', $obtained);

		$code0 = substr($code,0,5);
		$code1 = substr($code,5,5);
		$code2 = substr($code,10,5);

		$code = $code0.'-'.$code1.'-'.$code2;


		echo "<script type='text/javascript'>alert('$code');</script>";


		$stmt = $db->prepare('INSERT INTO achievements (name, code, obtainedDate, value) values (:name, :code, :obtainedDate, :value)');

		$stmt->bindValue(':name', $name, PDO::PARAM_STR);
		$stmt->bindValue(':code', $code, PDO::PARAM_STR);
		$stmt->bindValue(':obtainedDate', $obtained, PDO::PARAM_STR);
		$stmt->bindValue(':value', $points, PDO::PARAM_INT);

		$stmt->execute();

		echo "<script type='text/javascript'>
		location.href=\"index.php\";
		</script>";
	}

}

?>