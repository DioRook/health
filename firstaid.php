<!DOCTYPE html>
<html>
<head>
	<?php
	$host = "localhost";
	$user = "root";
	$databaseName = "healthcare";

	$connect = mysqli_connect($host, $user, '', $databaseName);
	?>
<title>Page Titlefirst aid health records</title>
<style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px inset;
}
input[type=button] {
    width: 50%;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 3px outset;
    background-color:lime;
}
.header ul{
  margin: 0;
  padding: 15px;
  list-style-type: none; 
  background-color: #dddddd;
}
.header a.active {
  background-color: white;
}

.header li{
  display: inline;
  text-align: center;
  padding: 14px 16px;
  font-size: 20px;
  
}
.header li a{
  color: black;
  padding: 8px;
  text-decoration:none;
  border-radius: 4px;
}
.header li a:hover {
  background-color: #03FDC4;
  color: blue;
}
</style>


</head>



<body style="background-color:#48D1CC; margin: 0px; padding: 0px;">
<div class="header" style="background-color: black; position:absolute;width: 100%; ">
<h1 style="color: white;">Electronic Health Record Sytem</h1>
<nav class="nav-bar">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<input type="search" id="search" name="search" placeholder="search" style="float:right">
</ul>
</nav>
</div>
<br><br><br><br><br><br><br><br><br>
<div style="width:650px; margin:auto;background-color:white;padding:30px;box-shadow:5px 5px 5px #696969;">
	<?php
	if(isset($_POST['submitted'])){
		$q="INSERT INTO firstaid (uidai,rid,pc,hpc,oa,oe,alg,imp,tx,plan,rp,cp,rr,egcs,vgcs,mgcs,cmeds,maj_inj,min_inj) VALUES ('$_POST[uidia]','$_POST[rid]','$_POST[pc]','$_POST[hpc]','$_POST[oa]','$_POST[oe]','$_POST[alg]','$_POST[imp]','$_POST[tx]','$_POST[plan]','$_POST[rp]','$_POST[cp]','$_POST[rr]','$_POST[egcs]','$_POST[vgcs]','$_POST[mgcs]','$_POST[cmeds]','$_POST[maj_inj]','$_POST[min_inj]')";
		$r=mysqli_query($connect,$q);
		if($r){
			echo "<alert alert-success>Added</alert>";
			
		}else{
			echo mysqli_error($connect)."<br>querry:".$q;
		}
	}
	
	?>
<form method="post" action="firstaid.php">
ID:<input type="text" id="uidia" name="uidia" placeholder="UIDAI">
RECORDER ID:<input type="text" id="rid" name="rid"  placeholder="Recorder's Uidia">
PC: <input type="text" id="pc" name="pc" placeholder=" Presenting complaint">
HPC: <input type="text" id="hpc" name="hpc" placeholder="History of Presenting Complaint">
O/A: <input type="text" id="oa" name="oa" placeholder=" on arrival">
O/E: <input type="text" id="oe" name="oe" placeholder=" on examination">
ALLERGIES <input type="text" id="allergies" name="alg" placeholder=" Any known allergies? ">
IMP: <input type="text" id="imp" name="imp" placeholder=" Your impression of the patient / problem ">
TX: <input type="text" id="tx" name="tx" placeholder="  Specific treatment carried out by you">
PLAN: <input type="text" id="plan" name="plan" placeholder=" What’s the plan for this patient? Handover? Transport?">
<fieldset>
<legend>PULSE:</legend>
RADIAL:<input type="text" id="radial" name="rp" >
Carotid:<input type="text" id="carotid" name="cp" >
</fieldset>
respiratory rate::<input type="text" id="respiratory" name="rr" >
<fieldset>
<legend>The Glasgow Coma Scale (GCS):</legend>
EYES:<input type="text" id="eyes" name="egcs" >
VERBAL:<input type="text" id="verbal" name="vgcs" >
MOTAR:<input type="text" id="motar" name="mgcs" >
MEDICAL CONDITION:<input type="text" id="cmeds" name="cmeds" placeholder="Medical Condition">
</fieldset>
INJURIES:

<fieldset>
<legend>injuries</legend>
major:<input type="text" id="major" name="maj_inj" >
minor:<input type="text" id="minor" name="min_inj" >
</fieldset>
<br>
<button type="submit" value="save">SAVE</button>
	<input type="hidden" name="submitted" value="1" />
</form>
</div>
</body>
</html>