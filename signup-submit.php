<?php include("top.html") ?>

<?php
	#create a class for this info?
	include('Person.php'); //include Person class

	$file = file_get_contents("singles.txt"); #get text file
	$singleArray = explode("\n", $file); #break up the file into an array, each element of array contains the whole line of info
	$single = new person(); //creates a single person object

	//echo $single->toString(); //for testing purposes

	//signs up user
	//TODO: make sure this correctly writes to file, having permission issues on my local computer
	file_put_contents("singles.txt", "\n".$single->toString, FILE_APPEND);
?>

<div>
	<h1>Thank you!</h1>
	<p>
		Welcome to NerdLuv, <?php echo $single->name ?><br/><br/>
		Now <a href="matches.php">log in to see your matches!</a>
	</p>
</div>
<!-- include bottom html -->
<?php include("bottom.html"); ?>