<!DOCTYPE html>
<html>

<head>
  <title>Saentis Incident Management</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
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
      <li class="nav-item active">
        <a class="nav-link" href="https://saentisincident-php.herokuapp.com/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./views/createTicket.php">Open new Incident</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./views/ticketStatus.php">Check Incident Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./views/ticketDashboard.php">Ticket Dashboard (Tableau) (Admin only)</a>
      </li>
     
  </div>
</nav>
     <div class="container">     <div class="container">
<br /><br />
<h2> Welcome to Säntis Incident Management </h2>
Please choose your desired action from the menu.<br /><br />
<button type="button" class="btn btn-outline-primary"  onclick="location.href='./views/createTicket.php'";>Open new Incident</button><br /><br />
<button type="button" class="btn btn-outline-secondary"  onclick="location.href='./views/ticketStatus.php'";>Check Incident Status</button><br /><br />
<button type="button" class="btn btn-outline-info" onclick="location.href='/views/ticketDashboard.php'";>Ticket Dashboard (Admin only)</button><br /><br />
<button type="button" class="btn btn-outline-dark" onclick="location.href='https://saentisincident.herokuapp.com/'";>Camunda Process Engine</button><br /><br />



<br /> <br /><center><span style="color:#8c8a8a;">&copy; Säntis Group</span></center><br /> <br />	
</div></div>
</body>

</html>
