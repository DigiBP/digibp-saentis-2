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

<div class="form-style-3">
  <form>
    <fieldset>
      <legend>Personal</legend>
      <label for="field1"><span>Name <span class="required">*</span></span>
        <input class="input-field" type="text" name="field1" value=""/>
      </label>
      <label for="field2"><span>Email <span class="required">*</span></span>
        <input class="input-field" type="email" name="field2" value=""/>
      </label>
      <label for="field3"><span>Phone <span class="required">*</span></span>
        <input class="input-field" type="text" name="field3" value=""/>
      </label>
      <label for="field4"><span>Subject</span>
        <select class="select-field" name="field4">
          <option value="Appointment">Appointment</option>
          <option value="Interview">Interview</option>
          <option value="Regarding a post">Regarding a post</option>
        </select>
      </label>
    </fieldset>
    <fieldset>
      <legend>Message</legend>
      <label for="field6"><span>Message <span class="required">*</span></span>
        <textarea class="textarea-field" name="field6"></textarea>
      </label>
      <label><span> </span>
        <input type="submit" value="Submit"/>
      </label>
    </fieldset>
  </form>
</div>
    

</form>
    
        </ul>

    </body>

</html>
