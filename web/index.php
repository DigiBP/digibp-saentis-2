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
    

  <option value="critical">1 - Critical</option>
  <option value="high">2 - High</option>
  <option value="medium">3 - Medium</option>
  <option value="low">4 - Low</option>

</select>   
    
    
--------------------------------------------------------------------------------------
    
<label for="job">Urgency:</label>
<select id="job" name="field4">
    

  <option value="high">1 - High</option>
  <option value="medium">2 - Medium</option>
  <option value="low">3 - Low</option>
 
</select>       
    
--------------------------------------------------------------------------------------
    
   <label for="job">Priority:</label>
<select id="job" name="field4">
    

  <option value="high">1 - High</option>
  <option value="medium">2 - Medium</option>
  <option value="low">3 - Low</option>
 
</select>     
    
    
    
--------------------------------------------------------------------------------------
    
  
   <label for="job">Affected Applications:</label>
<select id="job" name="field4">
  <option value="sap">SAP</option>
  <option value="servicenow">Service Now</option>
  <option value="microsoft">Microsoft</option>
 
</select>     
    
    
    
    
--------------------------------------------------------------------------------------
 <label for="job">SystemID:</label>  
<textarea name="field3" placeholder="SytemID"></textarea>
    
-------------------------------------------------------------------------------------- 
 <label for="job">Summary:</label>  
<textarea name="field3" placeholder="Pease write an short summary"></textarea>

--------------------------------------------------------------------------------------
<label for="job">Description of Issue:</label>  
<textarea name="field3" placeholder="Please describe your issue here"></textarea>
--------------------------------------------------------------------------------------
<label for="job">Provide an detailed step-by-step Description:</label>  
<textarea name="field3" placeholder="Provide detailed Step-by-Step Description"></textarea>
--------------------------------------------------------------------------------------
--------------------------------------------------------------------------------------


</fieldset>
<fieldset>
<legend><span class="number">2</span> Please provide some information about you.</legend>
<label for="job">Name:</label>  
<input type="text" name="field1" placeholder="Your Name *">
<label for="job">E-Mail:</label>  
<input type="email" name="field2" placeholder="Your Email *">

<label for="job">Additional Information:</label>  
<textarea name="field3" placeholder="Additional Iformation"></textarea>
</fieldset>
<input type="submit" value="Send" />
</form>
</div>
    

</form>
    
        </ul>

    </body>

</html>
