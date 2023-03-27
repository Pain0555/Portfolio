

<?php
$connect=mysqli_connect('localhost','root','','Jay');
// create a variable
$first_Name=$_POST['first_Name'];
$first_Email=$_POST['first_Email'];
$first_Subject=$_POST['first_Subject'];
$first_Message=$_POST['first_Message'];
// $email=$_POST['email'];

//Execute the query


mysqli_query($connect,"INSERT INTO my_form (first_Name,first_Email,first_Subject,first_Message)
		        VALUES ('$first_Name','$first_Email','$first_Subject','$first_Message')");
				
	if(mysqli_affected_rows($connect) > 0){
		echo"<h1> Thank You!!!</h1>";
		echo "$first_Name";
        echo"<br><br>";
	echo '<a href="index.html">Click here to return to Homepage</a>';
} else {
	echo mysqli_error ($connect);
}