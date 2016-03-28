<?php
/* OUTPUT
	 * * * * *
	 * * * * *
	 * * * * *
	 * * * * *
	 * * * * *
 */
$i = $j = 0; // is this required? 
for( $i = 0;$i < 5;$i++ ) {
	for( $j = 0;$j < 5;$j++ ) {
		print '*';
	}
	echo "<br>";
}

/* OUTPUT
	 * 
	 * * 
	 * * * 
	 * * * *
	 * * * * *
 */
$i = $j = 0; // is this required? 
for( $i = 0;$i < 5;$i++ ) {
	for( $j = 0;$j <= $i;$j++ ) {
		print '*';
	}
	echo "<br>";
}

/* OUTPUT
		 *
       * *
     * * *
   * * * *
 * * * * *
 */
$i = $j = 0; // is this required? 
for( $i = 0;$i < 5;$i++ ) {
	for( $j = 4;$j > $i;$j-- ) {
		echo "&nbsp;&nbsp;";
	}
	
	for( $k = 0;$k <= $i;$k++ ) {
		print '*';
	}
	echo "<br>";
}

/* OUTPUT
 * * * * *
   * * * *
     * * *
       * *
         *
*/
for( $i = 1;$i <= 5;$i++ ) {
	for( $k = 0;$k < $i - 1;$k++ ) {
		echo "&nbsp;&nbsp;";
	}
	for( $j = 1;$j <= 5 - $i + 1;$j++ ) {
		print '*';
	}	
	echo "<br>";
}
