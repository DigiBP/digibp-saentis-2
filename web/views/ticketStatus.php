<!DOCTYPE html>
<html>

<head>
  <title>Säntis - Ticket Status</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
	


<?php

/* *********************************************************
 * List JSON Files
 *  ****************************************************** */
/*echo '<h2>JSON File name</h2>';
$dir    = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);*/

echo '<h2>Display ticket status</h2>';

/* *********************************************************
 * Get Process Instances
 *  ****************************************************** */
echo '<h2>List of Instances</h2>';

// Get Process IDs
$processInstances = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance", "GET", NULL);

// Convert JSON to array
$arrProcessInstances = json_decode($processInstances, true);

// Debug Output
//print_r($arrProcessInstances); 

// Iterature trough IDs and get 
foreach($arrProcessInstances as $instance ){
 	//echo 'test: '.$arrProcessInstances[0]['id'];
 	echo $instance['id'].'<br />';
	$instances[] = $instance['id'];
}

/* *********************************************************
 * Get Process Variables from retrived Instances
 *  ****************************************************** */
echo '<h2>List of Instances with Variables</h2>';

for ($i = 0; $i < 20; $i++) {
	$instancesDetails = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance/".$instances[$i]."/variables", "GET", NULL);
	
	// Convert JSON to array (Not necessary, returns array!)
	$arrInstancesDetails = json_decode($instancesDetails, true);
	
	// Save all information into array
	$allInstances[$i][$instances[$i]] = $instancesDetails;
	
	// Get Ticket Status Summary (only if it is set)
	if($arrInstancesDetails['ticketStatus']['value'] != ""){
		$ticketStatus[] = $arrInstancesDetails['ticketStatus']['value'];
		//echo 'This is it: '.$arrInstancesDetails['ticketStatus']['value'];
	}
}

// JSON output
header('Content-Type: application/json');
echo json_encode($allInstances);

// Debug Output
//print_r($allInstances);

// Save JSON as file
$jsonFile = json_encode($allInstances);
$date = date('Y-m-d-H-i-s');
$fp = fopen('results'.$date.'.json', 'w');
fwrite($fp, json_encode($allInstances, JSON_UNESCAPED_SLASHES));
fclose($fp);

// Iterate and save in array
/*foreach($instancesDetails as $inst){
	//echo 'Origin: '.$inst['ticketOrigin']['value'].'<br />';
	//echo 'Status: '.$detail['ticketStatus']['value'].'<br />';

}*/

//print_r($instancesDetails);




// Test Output
//$instancesDetails[0]['ticketOrigin']['value'];

// Output
/*foreach($arrInstancesDetails as $detail){
	echo 'Origin: '.$detail['ticketOrigin']['value'].'<br />';
	echo 'Status: '.$detail['ticketStatus']['value'].'<br />';

}*/

// Methods
function callCamundaAPI($url, $type, $data_string){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	  if(!empty($data_string)){
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                	'Content-Type: application/json',
             	'Content-Length: ' . strlen($data_string))
        	);
	  }
        $result = curl_exec($ch);
	  return $result;

}


?>

<?php
 
$dataPoints = array(
	array("x"=> 10, "y"=> 41),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);
	
?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
