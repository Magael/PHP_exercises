<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array(
    0=>"health hazard",1=>"desgusting",2=>"filthy", 3=>"dirty",4=>"clean");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if($room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[3]){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>