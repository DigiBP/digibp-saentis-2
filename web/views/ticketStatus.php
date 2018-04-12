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
      <div class="col-xs-8">
         <h4>Please provide your e-mail adress you used when creating the ticket.</h4>
	   This might take a moment, please be patient.
           <!-- Priority -->
         <div class="form-group">
            <label for="email">E-Mail</label>
            <div class="controls">
                <input type="email" class="form-control mytext" required  name="email" placeholder="Please enter your email here" />
            </div>
         </div>
         
   <input type="submit" class="btn btn-primary btn-lg btn-block" value="Check Ticket Status">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	/* *********************************************************
	 * Get Process Instances
	 *  ****************************************************** */
	
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

	for ($i = 0; $i < 20; $i++) {
		$instancesDetails = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance/".$instances[$i]."/variables", "GET", NULL);
	
		// Convert JSON to array (Not necessary, returns array!)
		$arrInstancesDetails = json_decode($instancesDetails, true);
	
		// Save all information into array
		$allInstances[$i][$instances[$i]] = $instancesDetails;
	
	}
	print_r($allInstances);
	
	/* *********************************************************
	 * Display Ticket per E-Mail 
	 *  ****************************************************** */
	echo '<table class="table" width="100%">';
	echo '<tr><th>ID</th><th>Summary</th><th>E-Mail</th><th>Ticket Status</th></tr>';
	for($i = 0; $i < 20; $i++){
		
		// Get Ticket Status Summary (only if it is set)
	
		if($arrInstancesDetails['customerMail']['value'] === $_POST['email']){
			// Get ID of instance
			echo '<tr><td>'.$instances[$i].'</td>';
			echo '<td>'.$allInstances['summary']['value'].'</td>';
			echo '<td>'.$allInstances['customerMail']['value'].'</td>';
			echo '<td><strong>'.$allInstances['ticketStatus']['value'].'</strong></td>'; 
			echo '</tr>';
		}
	}
	
	echo '</table>';
	//print_r($allInstances);

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

<br /> <br /><center><span style="color:#8c8a8a;">&copy; Säntis Group</span></center><br /> <br />	

</body>
</html>
