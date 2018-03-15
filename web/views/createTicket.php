<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
<h3>Incident Creation </h3>
<form role="form"
   name="variablesForm">
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
   <!-- row -->

<?php

$data = json_encode($_POST);
var_dump($data);
CallAPI("POST", "https://saentisincident.herokuapp.com/rest/engine/default/process-definition/key/OverallIncident/start", $data);
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}



?>

</body>
</html>
