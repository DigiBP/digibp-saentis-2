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

<div class="wrap">

  <div>
    <label for="fname">First Name</label>
    <input id="fname" type="text" class="cool"/>
  </div>

    
    <div>
  <label class="col-md-4 control-label" for="impact">Impcat</label>
  
    <select id="impact" name="impact" class="form-control">
      <option value="1">1 - Critical</option>
      <option value="2">2 - High</option>
      <option value="3">3 - Medium</option>
      <option value="4">4 - Low</option>
    </select>
  </div>
    </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
  <div>
    <label for="lname">Last Name</label>
    <input id="lname" type="text" class="cool"/>
  </div>
  
  <div>
    <label for="email">Some Long Copy Goes Here</label>
    <input id="email" type="text" class="cool"/>
  </div>
</div>


</form>
    
        </ul>

    </body>

</html>
