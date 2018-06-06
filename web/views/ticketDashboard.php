<!DOCTYPE html>
<html>

<head>
  <title>Säntis - Dashboard</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
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
      <li class="nav-item">
        <a class="nav-link" href="https://saentisincident-php.herokuapp.com/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./createTicket.php">Open new Incident</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./ticketStatus.php">Check Incident Status</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./ticketDashboard.php">Ticket Dashboard (Tableau) (Admin only) <span class="sr-only">(current)</span></a>
      </li>
     
  </div>
</nav>
<div class="container">
	<br /><br />
	 <h2>Ticket Dashboard</h2><div class='tableauPlaceholder' id='viz1528313813137' style='position: relative'><noscript><a href=''><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Sn&#47;Sntis_INC_Management_&#47;Overview&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Sntis_INC_Management_&#47;Overview' /><param name='tabs' value='yes' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Sn&#47;Sntis_INC_Management_&#47;Overview&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1528313813137');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='1366px';vizElement.style.height='818px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
	
<br /> <br /><center><span style="color:#8c8a8a;">&copy; Säntis Group</span></center><br /> <br />	
</div>
</body>
</html>
