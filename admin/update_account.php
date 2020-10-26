<?php

	include('../admin_session.php');
	
	$cpass=md5($_POST['cpass']);
	$repass=md5($_POST['repass']);
	
	if($cpass!=$repass){
		?>
		<script>
			window.alert('Required passwords did not match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	elseif($cpass==$srow['password']){
		?>
		<script>
			window.alert('Current password is match. Account not updated!');
			window.history.back();
		</script>
		<?php
	}
	else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if($password==$srow['password']){
			$fipassword=$password;
		}
		else{
			$fipassword=md5($password);
		}
		mysqli_query($conn,"update `user` set username='$username', password='$cpass' where userid='".$_SESSION['adminid']."'");
		mysqli_query($conn,"insert into activitylog (userid,action,activity_date) values ('".$_SESSION['adminid']."','Update account',NOW())");
        
        ?>
		<script>
			window.alert('Account updated successfully!');
			window.history.back();
		</script>
		<?php
		
	}
		
?>