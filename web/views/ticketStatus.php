<!DOCTYPE html>
<html>

<head>
  <title>Säntis - Ticket Status</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<div class="container">
	 <h3>Ticket Status</h3>
     
<form role="form"
   name="variablesForm" method="POST">


   <div class="row">
      <div class="col-xs-6">
         <h4>Please provide your e-mail adress you used when creating the ticket.</h4>
           <!-- Priority -->
         <div class="form-group">
            <label for="email">E-Mail</label>
            <div class="controls">
                <input type="email" class="form-control mytext" required  name="email" placeholder="Please enter your email here" />
            </div>
         </div>
         
   <input type="submit" class="btn btn-primary btn-lg" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//echo '<h2>Display ticket status</h2>';

/* *********************************************************
 * Get Process Instances
 *  ****************************************************** */
//echo '<h2>List of Instances</h2>';

// Get Process IDs
$processInstances = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance", "GET", NULL);

// Convert JSON to array
$arrProcessInstances = json_decode($processInstances, true);

// Debug Output
//print_r($arrProcessInstances); 

// Iterature trough IDs and get 
foreach($arrProcessInstances as $instance ){
 	//echo 'test: '.$arrProcessInstances[0]['id'];
 	//echo $instance['id'].'<br />';
	$instances[] = $instance['id'];
}

/* *********************************************************
 * Get Process Variables from retrived Instances
 *  ****************************************************** */
echo '<h2>List of Instances with Variables</h2>';

$ticketStatus = NULL;
for ($i = 0; $i < 20; $i++) {
	$instancesDetails = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance/".$instances[$i]."/variables", "GET", NULL);
	
	// Convert JSON to array (Not necessary, returns array!)
	$arrInstancesDetails = json_decode($instancesDetails, true);
	
	// Save all information into array
	$allInstances[$i][$instances[$i]] = $instancesDetails;
	
	// Get Ticket Status Summary (only if it is set)
	echo '<table class="table" width="100%"><tr>';
	if($arrInstancesDetails['customerMail']['value'] === $_POST['email']){
		// Get ID of instance
		echo '<td>'.$instances[$i].'<td />';
		echo '<td>'.$arrInstancesDetails['customerMail']['value'].'<td />';
		echo '<td>'.$arrInstancesDetails['ticketStatus']['value'].'<td />'; 
		
		
		//$ticketStatus[] = $arrInstancesDetails['customerMail']['value'];
		//echo 'This is it: '.$arrInstancesDetails['ticketStatus']['value'];
	}
	echo '</td></tr>';
}
print_r($allInstances);

/*
// Save JSON as file
$jsonFile = json_encode($allInstances);
$date = date('Y-m-d-H-i-s');
$fp = fopen('results'.$date.'.json', 'w');
fwrite($fp, json_encode($allInstances, JSON_UNESCAPED_SLASHES));
fclose($fp);*/

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
}

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



</body>
</html>
