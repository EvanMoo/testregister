<?php

	$color = "white";
	if($index%2 == 0)
	{
		$color = "lightblue";
	}
	 echo '<table border="1" style="width:100%">';
		echo '<tr style="background-color:'.$color.'">';
		echo '<td style="width:10%; padding: 5px;"><b> ' .$model->nameFirst. '</b></td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->nameLast. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->address1. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->address2. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->city. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->state. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->zip. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->country. '</td>';
		echo '<td style="width:10%; padding: 5px;"> ' .$model->dateCreation. '</td>';
		echo '</tr>';
	echo '</table>';

?>