<?php

use yii\widgets\ListView;

	 echo '<table border="1" style="width:100%">';
		echo '<tr style="background-color:#4F80BD">';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>First Name</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Last Name</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Address 1</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Address 2</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>City</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>State</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Zip</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Country</b></font></td>';
		echo '<td style="width:10%; padding: 5px;"><font color="white"><b>Creation Date</b></font></td>';
		echo '</tr>';
	echo '</table>';

	echo ListView::widget([
		'dataProvider' => $registerDataProvider,
		'options' => 
		[
			'class' => 'list-wrapper',
			'id' => 'listRegister',
		],
		'layout' => "{items}\n{pager}\n{summary}",
		'itemView' => function ($model, $key, $index, $widget) 
		{
			return $this->render('itemRegister',['model' => $model,'index' => $index]);
		},
		'itemOptions' => 
		[
			'tag' => false,
		],
		'pager' => 
		[
			'firstPageLabel' => 'first',
			'lastPageLabel' => 'last',
			'nextPageLabel' => 'next',
			'prevPageLabel' => 'previous',
			'maxButtonCount' => 10,
		],
])
?>