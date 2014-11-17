
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php
//perform query
$query="Select * from subjects ";
$query .= "where visible=1 ";
$query .= "order by position desc ";

//$query= 
//test query errors only not the empty output
$result=mysqli_query($connection, $query);
confirm_query($result);
?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
	<ul>
		<?php 
		//use returned data
		while($subject=mysqli_fetch_assoc($result)){
		?>

		<li><?php echo $subject["menu_name"]."<br />"; ?></li>

			<!--
			<?php/*
					<?php 

					$query="Select * from pages ";
					$query .= "where visible=1 ";
					$query .= "and subject_id={$subject["id"]} ";
					$query .= "order by position desc ";
					//$query= 
					//test query errors only not the empty output
					$page_set=mysqli_query($connection, $query);
					confirm_query($page_set);
					?>					
			<ul class="pages">
			<?php	while($page=mysqli_fetch_assoc($page_set)){
		?>


		<li><?php echo $page["menu_name"]."<br />"; ?>

			</ul>

			<?php
			//release resources
			 mysqli_free_result($page_set); ?> 

		</li>
		<?php //var_dump($row);
		echo "<hr/>";
		} 
		?>

*/?> -->
		<?php //var_dump($row);
		echo "<hr/>";
		} 
		?>
	</ul>

	</div>

	<div id="page">
		<h2>Manage Website contents</h2>
		
	</div>
</div>

<?php
//release resources
 mysqli_free_result($result); ?> 

<?php include("../includes/layouts/footer.php"); ?>		
