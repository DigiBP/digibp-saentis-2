<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
</head>

    <body>

<ul>
<li><a href="./views/createTicket.php">Create Ticket (Webform)</a></li>
<li><a href="./views/ticketStatus.php">Check Ticket Status</a></li>
<li><a href="./views/ticketDashboard.php">Ticket Dashboard (Overall)</a></li>

    
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Incident Creation</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="impact">Impcat</label>
  <div class="col-md-2">
    <select id="impact" name="impact" class="form-control">
      <option value="1">1 - Critical</option>
      <option value="2">2 - High</option>
      <option value="3">3 - Medium</option>
      <option value="4">4 - Low</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="urgency">Urgency</label>
  <div class="col-md-2">
    <select id="urgency" name="urgency" class="form-control">
      <option value="1">1 - High</option>
      <option value="2">2 - Medium</option>
      <option value="3">3 - Low</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="priority">Priority</label>
  <div class="col-md-2">
    <select id="priority" name="priority" class="form-control">
      <option value="1">1 - High</option>
      <option value="2">2 - Medium</option>
      <option value="3">3 - Low</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="affectedApplication">Affected Application</label>
  <div class="col-md-2">
    <select id="affectedApplication" name="affectedApplication" class="form-control">
      <option value="1">Excel</option>
      <option value="2">Word</option>
      <option value="3">Lotus Notes</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Description of the issue</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="Please desscribe your issue here." class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="summary">Summary</label>  
  <div class="col-md-5">
  <input id="summary" name="summary" type="text" placeholder="Please desscribe your issue here." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SystemID">System ID</label>  
  <div class="col-md-5">
  <input id="SystemID" name="SystemID" type="text" placeholder="Indication on which System the user is." class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stepByStep">Provide detailed step-by-step Description</label>  
  <div class="col-md-5">
  <input id="stepByStep" name="stepByStep" type="text" placeholder="Provide a step-by-step Guide." class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customerMail">E-Mail</label>  
  <div class="col-md-5">
  <input id="customerMail" name="customerMail" type="text" placeholder="Enter your E-Mail adress." class="form-control input-md" required="">
    
  </div>
</div>

</fieldset>
</form>
    
        </ul>

    </body>

</html>
