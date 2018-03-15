<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
    
<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
    
</head>

    <body>

<ul>
<li><a href="./views/createTicket.php">Create Ticket (Webform)</a></li>
<li><a href="./views/ticketStatus.php">Check Ticket Status</a></li>
<li><a href="./views/ticketDashboard.php">Ticket Dashboard (Overall)</a></li>

    <!--Form ame with h1  -->
    <h1>Incident Creation</h1>
    
    <form class="form-horizontal">

<div class="form-style-5">
<form>
<fieldset>
<legend><span class="number">1</span> Incident Info </legend>
    
<label for="job">Impact:</label>
<select id="job" name="field4">
    
<optgroup label="Impact">
  <option value="critical">1 - Critical</option>
  <option value="high">2 - High</option>
  <option value="medium">3 - Medium</option>
  <option value="low">4 - Low</option>
</optgroup>
</select>   
    
    
--------------------------------------------------------------------------------------
    
<label for="job">Urgency:</label>
<select id="job" name="field4">
    
<optgroup label="Urgency">
  <option value="high">1 - High</option>
  <option value="medium">2 - Medium</option>
  <option value="low">3 - Low</option>
 </optgroup>
</select>       
    
--------------------------------------------------------------------------------------
    
   <label for="job">Priority:</label>
<select id="job" name="field4">
    
<optgroup label="Priority">
  <option value="high">1 - High</option>
  <option value="medium">2 - Medium</option>
  <option value="low">3 - Low</option>
 </optgroup>
</select>     
    
    
    
--------------------------------------------------------------------------------------
    
  
   <label for="job">Affected Applications:</label>
<select id="job" name="field4">
    
<optgroup label="Affected Application">
  <option value="sap">SAP</option>
  <option value="servicenow">Service Now</option>
  <option value="microsoft">Microsoft</option>
 </optgroup>
</select>     
    
    
    
    
--------------------------------------------------------------------------------------
    
<input type="text" name="field1" placeholder="Your Name *">
<input type="email" name="field2" placeholder="Your Email *">
<textarea name="field3" placeholder="About yourself"></textarea>

</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="field3" placeholder="TEST"></textarea>
</fieldset>
<input type="submit" value="Send" />
</form>
</div>
    

</form>
    
        </ul>

    </body>

</html>
