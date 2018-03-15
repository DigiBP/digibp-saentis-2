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

<!--Rahmen ür Input  -->
<div class="wrap">

  <div>
    <label for="fname">First Name</label>
    <input id="fname" type="text" class="cool"/>
  </div>
    
      
  <div> 
      <label for="impact">Impcat</label>
    <select clas="cool" id="impact" type="text">
      <option value="1">1 - Critical</option>
      <option value="2">2 - High</option>
      <option value="3">3 - Medium</option>
      <option value="4">4 - Low</option>
    </select>
    
  </div>


    
  <div>
    <label for="lname">Last Name</label>
    <input id="lname" type="text" class="cool"/>
  </div>
  
  <div>
    <label for="email">Enter your EMail adress here</label>
    <input id="email" type="text" class="cool"/>
  </div>
</div>


</form>
    
        </ul>

    </body>

</html>
