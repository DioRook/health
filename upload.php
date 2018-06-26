<?php
include ("apis/connection.php");
$ds = DIRECTORY_SEPARATOR;  //1
$id = $_POST['uidai'];
$type=$_POST['des'];
print_r($_FILES);
echo "<br>";
print_r($_POST);
echo "<br>";
$q="SELECT * FROM patients WHERE uidai = '$_POST[uidai]' ";
$r=mysqli_query($connect,$q);
$a=mysqli_fetch_assoc($r);
echo "<br>a :";
print_r($a);
print_r($q);
echo "<br> r:";
print_r($r);
if($a){
$storeFolder = 'doc'.$ds.$id.$ds.$type;   //2
print_r($storeFolder);
echo "<br>";
if (!file_exists($storeFolder)) {
    mkdir($storeFolder, 0777, true);
}

$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$newname =  date("d-m-Y-");
//$ran=rand(100, 999);
$name = $newname  . '.'.$ext;
print_r($name);
echo "<br>";
 
if ($_FILES['file']['name']!='') {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath =  $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $name;  //5
    $i=1;

    while(file_exists($targetFile)){
	if(strrchr($targetFile, '(')){
    	$name=explode('('.$i.')', $name);
		print_r($name);
		echo "<br>";
		$i+=1;
		$name=implode('('.$i.')', $name);
		print_r($name);
		echo "<br>";
		$targetFile =  $targetPath. $name; 
    }else{
		$name=$newname.'('.$i.')'.'.'.$ext;
		$targetFile =  $targetPath. $name;
	}
	}
 	print_r($targetFile);
	echo "<br>";
    move_uploaded_file($tempFile,$targetFile); //6 
    header("Location: uploadrec.php?upload=1");   

}else{
	header("Location: uploadrec.php?upload=2");   
}
}else{
	header("Location: uploadrec.php?upload=0");   
	
}
?> 