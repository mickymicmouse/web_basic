<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin"); 
	$b = array_values($ceu);
	foreach ($b as $key => $value) {
		echo '&nbsp;', $key, '->', $value;
	}
	 $color = array ( "color" => array ( "a" => "Red", "b" => "Red", "c" => "White"), "numbers" => array ( 1, 2, 3, 4, 5, 6 ), "holes" => array ( "First", 5 => "Second", "Third")); 
	 echo '<br/>';
	 echo $color["color"]["a"];
	 echo '<br/>';
	 
	 
	  define("foo", "you are foo");
	  
	  echo foo;
	  $a = "heeloo";
	  $b = $a. "workjaife";
	  echo $b;
echo '<br/>';
	$d='A00';
	for ($i=0; $i <5; $i++) { 
		$d++;
		echo $d;
		echo '<br>';
	}
	$a= 128;
	$c= 14;
	while ($a > 13) {
		$a=$a-$c;
		
	}
	echo $a;
	echo '<br>';

	for ($i=0; $i < 6; $i++) { 
		echo "<br>";
		for ($j=0; $j <$i ; $j++) { 
			echo "*";
		}
	}
	for($i=6; $i<11; $i++){
		echo "<br>";
		for ($j=5; $j>10-$i ; $j--) { 
			echo"*";
		}
	}
	echo "<br>";
	
	
	echo "<br>";
	$ds=0;
	function Test() { global $ds; $ds+=7; echo $ds; } 
	Test(); Test(); Test(); 
	echo "<br>";
	echo $ds;
	echo "<br>";

	echo date("l"); 
	echo date("l jS \of F Y h:i:s A"); 
	echo "<br>";
	echo date("l \\t\h\e jS");
	echo "<br>";
	$nextWeek = time() + (7 * 24 * 60 * 60); 
	echo 'Now:      '. date('Y-m-d') ."\n"; 
	echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n"; 

	
	function print_form($f_name, $l_name, $email, $os) { ?> <form action="form_checker.php" method=“get"> First Name: <input type="text" name="f_name" value="<?php echo $f_name?>" /> <br/> Last Name <b>*</b>:<input type="text" name="l_name" value="<?php echo $l_name?>" /> <br/> Email Address <b>*</b>:<input type="text" name="email" value="<?php echo $email?>" /> <br/> Operating System: <input type="text" name="os" value="<?php echo $os?>" /> <br/><br/> <input type="submit" name="submit" value="Submit" /> <input type="reset" /> </form> <?php }
	function check_form($f_name, $l_name, $email, $os) { if (!$l_name||!$email){ echo "<h3>You are missing some required fields!</h3>"; print_form($f_name, $l_name, $email, $os); } else{ confirm_form($f_name, $l_name, $email, $os); } }  

	function confirm_form($f_name, $l_name, $email, $os) { ?> <h2>Thanks! Below is the information you have sent to us.</h2> <h3>Contact Info</h3> 

	<?php echo "Name: $f_name $l_name <br/>"; echo "Email: $email <br/>"; echo "OS: $os"; } 
	if (!isset($_GET["submit"])) { ?> <h3>Please enter your information</h3> <p>Fields with a "<b>*</b>" are required.</p> <?php print_form("","","",""); } else{ check_form($_GET["f_name"],$_GET["l_name"],$_GET["email"],$_GET["os"]); } ?>


	  ?>

</body>
</html>
