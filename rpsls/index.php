<?php
require("functions.php");

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Rock, Paper, Scissors, Lizard, Spock</title>
        <meta charset="utf-8">
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    	<div class="jumbotron">
    		<h1>Rock, Paper, Scissors, Lizard, Spock</h1>
    		<h5>Choose your move!</h5>
	    	<form method="post" action=<?php echo htmlentities($_SERVER['PHP_SELF']) ?>>
	    		<div class="radio">
	    			<label>
	                    <input type="radio" id="rock" value="rock" name="myChoice">
	                    Rock
	                </label>
	            </div>
	            <div class="radio">
	                  <label>
	                    <input type="radio" id="paper" value="paper" name="myChoice">
	                    Paper
	                  </label>
	            </div>
	            <div class="radio">
	                  <label>
	                    <input type="radio" id="scissors" value="scissors" name="myChoice">
	                    Scissors
	                  </label>
	            </div>
	            <div class="radio">
	                  <label>
	                    <input type="radio" id="lizard" value="lizard" name="myChoice">
	                    Lizard
	                  </label>
	            </div>
	            <div class="radio">
	                  <label>
	                    <input type="radio" id="spock" value="spock" name="myChoice">
	                    Spock
	                  </label>
	            </div>
	            <input type="submit" name="submit">
	    	</form>
    	</div>
    	<?php  

    		if(isset($_POST['submit'])) { 
    			$rand = rand(1, 5);  
	    		$choice;
	    		$me = $_POST['myChoice'];

	    		if ($rand == 1) {
	    			$choice == 'rock';
	    		}elseif ($rand == 2) {
	    			$choice = 'paper';
	    		}elseif ($rand == 3) {
	    			$choice = 'scissors';
	    		}elseif ($rand == 4) {
	    			$choice = 'lizard';
	    		}elseif ($rand == 5) {
	    			$choice = 'spock';
    			}

    			//$winner = $outcome | $phrase = $action
    			list($winner, $phrase) = compareMoves($me, $choice);

    			if ($winner == 'computer') {

    				print '<div class="alert alert-success"><h3>Computer</h3><img src="img/' . $choice . '.jpg" /></div>';

    				print '<h4>'. $phrase . '</h4>';

    				print '<div class="alert alert-danger"><h3>Human</h3><img src="img/' . $me . '.jpg" /></div>';

    			} elseif ($winner == 'human') {

    				print '<div class="alert alert-success"><h3>Human</h3><img src="img/' . $me . '.jpg" /></div>';

    				print '<h4>'. $phrase . '</h4>';

    				print '<div class="alert alert-danger"><h3>Computer</h3><img src="img/' . $choice . '.jpg" /></div>';

    			} elseif ($winner == 'tie') {

    				print '<div class="alert alert-warning left"><h3>Human</h3><img src="img/' . $me . '.jpg" /></div>';

    				print '<h4>'. $phrase . '</h4>';

    				print '<div class="alert alert-warning right"><h3>Computer</h3><img src="img/' . $choice . '.jpg" /></div>';

    			} elseif ($winner == ''){

    				print '<div class="alert alert-warning left"><h2>Choose a move then press submit.</h2></div>';

    			}
    			
    		} else {

    			print '<div class="alert alert-warning left"><h2>Choose a move then press submit.</h2></div>';
    		}
    	?>

    	<footer>
    		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" property='stylesheet' crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
    	</footer>
    </body>
</html>