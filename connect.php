<?php
    $ThingsToDo = $_POST['ThingsToDo'];
    $TasksBy = $_POST['TasksBy'];
    $Participants = $_POST['Participants'];
    $Observer = $_POST['Observer'];
    $Deadline = $_POST['Deadline'];

    $conn = new mysqli('localhost', 'addlist' , '','witstask');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into tasks('ThingsToDo', 'TasksBy', 'Participants', 'Observer', 'Deadline') values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $ThingsToDo, $TasksBy, $Participants, $Observer, $Deadline);
		$execval = $stmt->execute();
		echo $execval;
		echo "Tasks added successfully...";
		$stmt->close();
		$conn->close();
	} 
  









?>