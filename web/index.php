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
    
<label for="job">Interests:</label>
<select id="job" name="field4">
    
<optgroup label="Impact">
  <option value="football">1 - Critical</option>
  <option value="swimming">2 - High</option>
  <option value="fishing">3 - Medium</option>
  <option value="climbing">4 - Low</option>
</optgroup>
</select>   
    
    
--------------------------------------------------------------------------------------
<input type="text" name="field1" placeholder="Your Name *">
<input type="email" name="field2" placeholder="Your Email *">
<textarea name="field3" placeholder="About yourself"></textarea>
<label for="job">Interests:</label>
<select id="job" name="field4">
    
<optgroup label="Impact">
  <option value="football">Football</option>
  <option value="swimming">Swimming</option>
  <option value="fishing">Fishing</option>
  <option value="climbing">Climbing</option>
  <option value="cycling">Cycling</option>
  <option value="other_outdoor">Other</option>
</optgroup>
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="field3" placeholder="About Your School"></textarea>
</fieldset>
<input type="submit" value="Apply" />
</form>
</div>
    

</form>
    
        </ul>

    </body>

</html>
