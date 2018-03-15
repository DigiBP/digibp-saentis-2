<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<h3>Incident Creation </h3>
<div class="container">
<form role="form"
   name="variablesForm" action="#" method="POST">
   <div class="row">
      <div class="col-xs-6">
         <h2>Please provide some information about your Incident.</h2>
         <!-- Impact-->
         <div class="form-group">
            <label for="impact">Impact</label>
            <div class="controls">
               <select cam-variable-name="impact" 
                  cam-variable-type="String" 
                  name="impact">
                  <option>1 - Critical</option>
                  <option>2 - High</option>
                  <option>3 - Medium</option>
                  <option>4 - Low</option>
               </select>
            </div>
         </div>
         <!-- Urgency -->
         <div class="form-group">
            <label for="urgency">Urgency</label>
            <div class="controls">
               <select cam-variable-name="urgency" 
                  cam-variable-type="String" 
                  name="urgency">
                  <option>1 - High</option>
                  <option>2 - Medium</option>
                  <option>3 - Low</option>
               </select>
            </div>
         </div>
         <!-- Priority -->
         <div class="form-group">
            <label for="priority">Priority</label>
            <div class="controls">
               <select cam-variable-name="priority" 
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
               <select cam-variable-name="affectedApplication" 				cam-variable-type="String" name="affectedApplication">
                  <option>none</option>
                  <option>Excel</option>
                  <option>Word</option>
                  <option>Lotus Notes</option>
               </select>
            </div>
         </div>
         <!-- SystemID -->
         <div class="form-group">
            <label for="systemID">SystemID</label>
            <div class="controls">
               <input type="text" class="form-control mytext" cam-variable-type="String" required cam-variable-name="systemID" name="systemID" placeholder="Indication on which System the user is located" />
            </div>
         </div>
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
               <textarea class="form-control mytext" cam-variable-type="String" required cam-variable-name="description" name="description" placeholder="Please describe your issue here"></textarea>
            </div>
         </div>

         <!-- Step by Step -->
         <div class="form-group">
            <label for="stepByStep">Provide detailed step-by-step Description</label>
            <div class="controls">
               <textarea class="form-control mytext" cam-variable-type="String" required cam-variable-name="stepByStep" name="stepByStep" placeholder="Provide detailed step-by-step description to reproduce the issue, including screenshots and relevant parameters"></textarea>
            </div>
         </div>
      </div>
      <!-- close col div -->
      <div class="col-xs-6">
         <h2>Please provide some information about you.</h2>
         <!-- E-Mail -->
         <div class="form-group">
            <label for="customerMail">E-Mail</label>
            <div class="controls">
               <input type="text" class="form-control mytext" cam-variable-type="String" required cam-variable-name="customerMail" name="customerMail" placeholder="email@domain.com" />
            </div>
         </div>
      </div><!-- col-xs-6 -->
   </div>
   <input type="submit" value="Submit">
</form>
   <!-- row -->

<?php

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
      "value": "'.$_POST['description'].'",
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
    }
  }
}';

callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-definition/key/Overall/start", $data_string);

function callCamundaAPI($url, $data_string){
        $ch = curl_init('https://saentisincident.herokuapp.com/rest/process-definition/key/Overall/start');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);
	  var_dump($result);

}


?>
</div>
</body>
</html>

