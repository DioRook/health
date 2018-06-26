<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Electronic Health Record System</title>
<link rel="stylesheet" href="css/index.css?<?php echo time();?>">
<link href="https://fonts.googleapis.com/css?family=Droid+Serif|Source+Sans+Pro|Lato" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style>
	.doct{
		width: 900px;
		height: 700px;
		border: 1px solid black;
	}
</style>

</head>
<body>
	<div class="row">
 <header>
        <div id="logo"></div> 
        <div id="title">Electronic Health Record System</div>
 </header>
   </div>
   	<div class="row">
   		<form class="form-inline" method="post" action="#">
			<input type="text" class="form-control mb-2 mr-sm-2" id="uidai" name="uidai" value="<?php echo $_POST['uidai'];?>" placeholder="Uidai">
			  <select name="des" id="des" class="uk-select" style="width:490px">
				<option value="Heart">Heart</option>
				<option value="Abdomen">Abdomen</option>
				<option value="Bladder">Bladder</option>
				<option value="Bones">Bones</option>
				<option value="Brain and spinal cord">Brain and spinal cord</option>
				<option value="Bronchial muscles">Bronchial muscles</option>
				<option value="Ear">Ear</option>
				<option value="Eye">Eye</option>
				<option value="Immune system of the body">Immune system of the body</option>
				<option value="Intestine">Intestine</option>
				<option value="Joints">Joints</option>
				<option value="Liver">Liver</option>
				<option value="Lungs">Lungs</option>
				<option value="Nerves">Nerves</option>
				<option value="Nerves and limb">Nerves and limb</option>
				<option value="Nose">    Nose</option>
				<option value="Pancreas and blood">Pancreas and blood</option>
				<option value="Skin">Skin</option>
				<option value="Spinal cord">Spinal cord</option>
				<option value="Spleen">Spleen</option>
				<option value="Stomach">Stomach</option>
				<option value="Teeth">Teeth</option>
				<option value="Throat">Throat</option>
				<option value="Thyroid gland">Thyroid gland</option>
				<option value="Tongue">Tongue</option>
				<option value="Tonsils">Tonsils</option>

  			</select>

			
			
			<button type="submit" class="btn btn-primary mb-2">Submit</button>
   		</form>
   	</div>
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
				<?php
				$dir = "doc/".$_POST['uidai'].'/'.$_POST['des'];
			
				// Open a directory, and read its contents
				if (is_dir($dir)){
				
				  if ($dh = opendir($dir)){
				    $file = scandir($dir);
				    foreach($file as $file) {
				    	if($file!='.' AND $file!=".."){?>
				    	
				  <a href="doc.php?file=<?php echo $file;?>&id=<?php echo $_POST['uidai'];?>&type=<?php echo $_POST['des'];?>" class="list-group-item list-group-item-action flex-column align-items-start ">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><?php echo $file;?></h5>
				      <small>3 days ago</small>
				    </div>
				    <p class="mb-1"><?php echo $file;?></p>
				  </a>
				    <?php }
					}
				    closedir($dh);
				  }
				}
				?>
			</div>
			
			<div class="col-md-9" >
				<?php if(isset($_GET['file'])){?>
					<div class="doct">
						<embed src="<?php echo $dir.$_GET['file'];?>" width=100% height=100%/>
								
					</div>
				<?php }?>
			</div>
		
		</div>
   
</body>
</html>
<!---->