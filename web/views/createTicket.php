<!DOCTYPE html>
<html>

<head>
  <title>Säntis - Create Ticket</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SaentisGroup</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://saentisincident-php.herokuapp.com/">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./createTicket.php">Open new Incident <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./ticketStatus.php">Check Incident Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./ticketDashboard.php">Ticket Dashboard (Tableau) (Admin only)</a>
      </li>
     
  </div>
</nav>	

<div class="container">
	 <br /><br />
	 <h2>Incident Creation </h2>
	 
	 <?php

$desc = str_replace(PHP_EOL,"\n",$_POST['description']);

	 // Create JSON
	 $data_string = '{
	   "variables": {
	     "impact": {
	       "value": "'.$_POST['impact'].'",
	       "type": "String"
	     },
	     "urgency": {
	       "value": "'.$_POST['urgency'].'",
	       "type": "String"
	     },
	     "affectedApplication": {
	       "value": "'.$_POST['affectedApplication'].'",
	       "type": "String"
	     },
	     "summary": {
	       "value": "'.$_POST['summary'].'",
	       "type": "String"
	     },
	     "description": {
	       "value": "'.$desc.'",
	       "type": "String"
	     },
	     "SystemID": {
	       "value": "'.$_POST['SystemID'].'",
	       "type": "String"
	     },
	     "stepByStep": {
	       "value": "'.$_POST['stepByStep'].'",
	       "type": "String"
	     },
	     "customerName": {
	       "value": "'.$_POST['customerName'].'",
	       "type": "String"
	     },
	     "customerMail": {
	       "value": "'.$_POST['customerMail'].'",
	       "type": "String"
	     },
	     "customerPhone": {
	       "value": "'.$_POST['customerPhone'].'",
	       "type": "String"
	     },
	     "ticketStatus": {
	       "value": "'.$_POST['ticketStatus'].'",
	       "type": "String"
	     },
	     "ticketOrigin": {
	       "value": "OnlineTicket",
	       "type": "String"
	     },
	      "isReallyIncident": {
	       "value": "isReallyIncident",
	       "type": "String"
	   }
	 }
	 }';
    
	     var_dump($data_string);

	 // If form was submitted
	 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     
	 	//$result = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-definition/key/OverallIncident/start", "POST", $data_string);
			 	$result = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-definition/key/OverallIncident/submit-form", "POST", $data_string);
      
	  	// Success
	  	if (strpos($result, 'definitionId') !== false) {
	  	     	echo '<div class="alert alert-success">';
	   		echo '<strong>Success!</strong> Your Incident was successfully created.';
	 		echo '</div>';
	  	} else{
	     	  	// Fail Error
	     	  	echo 'fail!';
	     	  	var_dump($result);
	  	}
	 }


	 // Method
	 function callCamundaAPI($url, $type, $data_string){
	         $ch = curl_init($url);
	         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
	         curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	                 'Content-Type: application/json',
	                 'Content-Length: ' . strlen($data_string))
	         );

	         $result = curl_exec($ch);
	 	  return $result;
	 	  var_dump($result);

	 }


	 ?>
     
<form role="form"
   name="variablesForm" method="POST">


   <div class="row">
      <div class="col-xs-6">
		<div class="container">
         <h4>Please provide some information about your Incident.</h4>
           <!-- Priority -->
         <div class="form-group">
            <label for="priority">Priority</label>
            <div class="controls">
               <select class="form-control" cam-variable-name="priority" 
                  cam-variable-type="String" 
                  name="priority">
                  <option>1 - High</option>
                  <option>2 - Medium</option>
                  <option>3 - Low</option>
               </select>
            </div>
         </div>
         <!-- Affected Application -->
         <div class="form-group">
            <label for="affectedApplication">Affected Application</label>
            <div class="controls">
               <select class="form-control" cam-variable-name="affectedApplication" 				cam-variable-type="String" name="affectedApplication">
                  <option>none</option>
                  <option>Excel</option>
                  <option>Word</option>
                  <option>Lotus Notes</option>
			     <option>Outlook</option>
			     <option>Website</option>
			     <option>SAP</option>
               </select>
            </div>
         </div></div>
       

    
      </div>
      <!-- close col div -->
      <div class="col-xs-6">
		<div class="container">
         <h4>Please provide some information about you.</h4>
   
          
            <!-- Customer Name  -->
         <div class="form-group">
            <label for="customerMail">Customer Name</label>
            <div class="controls">
               <input type="text" class="form-control mytext" cam-variable-type="String" required cam-variable-name="customerName" name="customerName" placeholder="Please enter your name here" />
            </div>
         </div>
          
          
         <!-- E-Mail -->
         <div class="form-group">
            <label for="customerMail">E-Mail</label>
            <div class="controls">
               <input type="text" class="form-control mytext" cam-variable-type="String" required cam-variable-name="customerMail" name="customerMail" placeholder="email@domain.com" />
            </div>
         </div>
          
                    
          <!-- Customer Phone -->
         <div class="form-group">
            <label for="customerMail">Customer Phone</label>
            <div class="controls">
               <input type="text" class="form-control mytext" cam-variable-type="String" required cam-variable-name="customerPhone" name="Customer Phone Adress" placeholder="Please enter your phone number" />
            </div>
         </div>
      </div><!-- col-xs-6 -->
   </div></div>
   <!-- Summary -->
   <div class="form-group">
      <label for="summary">Summary</label>
      <div class="controls">
         <textarea class="form-control mytext" cam-variable-type="String" required cam-variable-name="summary" name="summary" placeholder="Please describe your issue here"></textarea>
      </div>
   </div>
   <!-- Description of Issue -->
   <div class="form-group">
      <label for="description">Description of Issue</label>
      <div class="controls">
         <textarea rows="7" class="form-control mytext" cam-variable-type="String" required cam-variable-name="description" name="description" placeholder="Please describe your issue here"></textarea>
      </div>
   </div>
            
   
   <input class="btn btn-primary btn-lg btn-block" type="submit" value="Create Ticket"><br /> <br /><center><span style="color:#8c8a8a;">&copy; Säntis Group</span></center><br /> <br />	
</form>
   <!-- row -->


</div>
</body>
</html>

