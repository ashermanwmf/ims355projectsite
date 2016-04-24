<?php

function compareMoves($humanMove, $computerMove) {

	$win = [
				'rock' => array('rock' => 'tie',
										'paper' => 'computer',
										'scissors' => 'human',
										'lizard' => 'human',
										'spock' => 'computer'),

				'paper' => array('paper' => 'tie',
										'rock' => 'human',
										'scissors' => 'computer',
										'lizard' => 'computer',
										'spock' => 'human'),

				'scissors' => array('scissors' => 'tie',
											'rock' => 'computer',
											'paper' => 'human',
											'lizard' => 'human',
											'spock' => 'computer'),

				'lizard' => array('lizard' => 'tie',
										'rock' => 'computer',
										'paper' => 'human',
										'scissors' => 'computer',
										'spock' => 'human'),

				'spock' => array('spock' => 'tie',
										'rock' => 'human',
										'paper' => 'computer',
										'scissors' => 'human',
										'lizard' => 'computer')
			];



	$word = [

				'computer' => array(
									'rock' => 'crushes',
									'paper' => 'covers',
									'scissors' => 'cuts',
									'lizard' => 'poisons',
									'spock' => 'vaporizes'),
				'human' => array(
									'rock' => 'crushes',
									'paper' => 'covers',
									'scissors' => 'cuts',
									'lizard' => 'poisons',
									'spock' => 'vaporizes')

			];		

	$outcome = $win[$humanMove][$computerMove];

	if ($outcome == 'computer') {

		$action = $word[$outcome][$computerMove];

	}elseif ($outcome == 'human') { 

		$action = $word[$outcome][$humanMove];

	}elseif ($outcome == 'tie') {

		$action = 'tie';

	}

	$conditions = array($outcome, $action);

	return $conditions;

}




?>