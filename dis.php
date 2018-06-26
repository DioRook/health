<!DOCTYPE html>
<html>
	<head>
		<title>Display|FirstAid</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<?php
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$databaseName = "healthcare";

	$connect = mysqli_connect($host, $user, '', $databaseName);
	?>
	</head>
	<body>
		<div class="container" style="border:1px solid black; background-color: black">
		<div class="row">
			<form class="form-inline mb-2" method="post" action="dis.php?id=1">
				<input class="form-control mb-2" type="text" value="<?php echo $_POST['uidai']; ?>" name="uidai" placeholder="UIDAI"/>
				<input class="form-control mb-2" type="text" value="<?php echo $_POST['rid']; ?>" name="rid" placeholder="R_ID"/>
				<input class="form-control mb-2" type="hidden" name="S" value="1"/>
				<button class="form-control  mb-2" type="submit">Display</button>
			</form>	
		</div>
		<?php
	if(isset($_POST['S'])){
		$q="SELECT * FROM firstaid WHERE uidai='$_POST[uidai]' AND rid='$_POST[rid]'";
		$r=mysqli_query($connect,$q);
		if($r){
			$list=mysqli_fetch_assoc($r);?>
		<div class="row" style="border:1px solid black; background-color: black">

			<div class="col-md-4" style="border:1px solid black; background-color: black">
				<input class="form-control mb-2" type="text" disabled value="UIDIA"/>
				<input class="form-control mb-2" type="text" disabled value="Recorder's ID"/>
				<input class="form-control mb-2" type="text" disabled value="Present Complaint"/>
				<input class="form-control mb-2" type="text" disabled value="History Present Complaint"/>
				<input class="form-control mb-2" type="text" disabled value="On Arival"/>
				<input class="form-control mb-2" type="text" disabled value="On Examination"/>
				<input class="form-control mb-2" type="text" disabled value="Allergies"/>
				<input class="form-control mb-2" type="text" disabled value="Impression"/>
				<input class="form-control mb-2" type="text" disabled value="Treatment"/>
				<input class="form-control mb-2" type="text" disabled value="Plan"/>
				<input class="form-control mb-2" type="text" disabled value="Radia Pluse"/>
				<input class="form-control mb-2" type="text" disabled value="Carotid Pluse"/>
				<input class="form-control mb-2" type="text" disabled value="Respiratory Rate"/>
				<input class="form-control mb-2" type="text" disabled value="Eyes Glasgow Coma Scale"/>
				<input class="form-control mb-2" type="text" disabled value="Verbal Glasgow Coma Scale"/>
				<input class="form-control mb-2" type="text" disabled value="Motar Glasgow Coma Scale"/>
				<input class="form-control mb-2" type="text" disabled value="Medical Condition"/>
				<input class="form-control mb-2" type="text" disabled value="Major Injuery"/>
				<input class="form-control mb-2" type="text" disabled value="Minor Injuery"/>
			</div>
			<div class="col-md-8" style="border:1px solid black; background-color: black">
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['uidai']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['rid']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['pc']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['hpc']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['oa']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['oe']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['alg']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['imp']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['tx']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['plan']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['rp']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['cp']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['rr']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['egcs']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['vgcs']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['mgcs']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['cmeds']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['maj_inj']; ?>"/>
				<input class="form-control mb-2" type="text" disabled value="<?php echo $list['min_inj']; ?>"/>
				
			</div>
			
			</div>
			<?php
						
		}else{
			echo mysqli_error($connect)."<br>querry:".$q;
		} }?>
		</div>
		</div>
	</body>
</html>