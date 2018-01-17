<?php

function getTitle() {
	return '12 Days of Christmas';
}

function getLyrics() {

	$days = array('first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eigth', 'ninth', 'tenth', 'elevent', 'twelfth');

	$gifts = array(
		'A partridge in a pear tree',
		'Two turtle doves',
		'Three French hens',
		'Four calling birds',
		'Five golden rings',
		'Six geese a-laying',
		'Seven swans a-swimming',
		'Eight maids a-milking',
		'Nine ladies dancing',
		'Ten lords a-leaping',
		'Eleven pipers piping',
		'Twelve drummers drumming'
	);

	for ($i = 0; $i < count($days); $i++) {

		echo '<div id="day' . $i . '" style="display:inline">';
		echo '<span>On the ' . $days[$i] . ' day of Christmas my true love gave to me</span><br>';

		if ($i == 0)  // first day
			echo $gifts[$i] . '<br>';
		else // days 2 to 12
			for ($j = $i; $j >= 0; $j--) {
				if ($j == 0)
					echo '<span>And ' . $gifts[$j] . '</span><br>';
				else
					echo '<span>' . $gifts[$j] . '</span><br>';
			}

		echo '</div>';
	}
}