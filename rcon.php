<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>247 | RCON PANEL</title>
<SCRIPT SRC='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js'></SCRIPT>
<SCRIPT SRC='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js'></SCRIPT>
<SCRIPT SRC='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js'></SCRIPT>
<SCRIPT SRC='script.js'></SCRIPT>
</head>
	
<body><noscript><div class='title'><b>WARNING!</b>Javascript is disabled. Some functions will not operate!</div><br></noscript>

<nav class='navbar'>
    <div class='navbar-header'>
        <a class='navbar-brand'>RCON Panel</b></a>
    </div>
</nav>

<?php

    require_once("rcon_code.php");

    $IP = "";
    $PORT = "";
    $PASSWORD = "";
    $COMMAND = "";
    $OUTPUT = "No Output - Submit a Command";

if ($_POST)
{ 
    $IP = $_POST["IP"];
    $PORT = $_POST["PORT"];
    $PASSWORD = $_POST["PASSWORD"];
    $COMMAND = $_POST["COMMAND"];

    $srcds_rcon = new srcds_rcon();
    $OUTPUT = $srcds_rcon->rcon_command($IP, $PORT, $PASSWORD, $COMMAND);
}


	print ("<div>");
	print ("<table class='table'>");
	print ("<tr>");
	print ("<td>");
    print ("<form action='rcon.php' method='post' autocomplete='off' name='CUSTOMCOMMAND'>");
    print ("<input type='text' name='IP' class='form-control voffset1' placeholder='Server IP' value=\"$IP\"/>");
    print ("<input type='text' name='PORT' class='form-control voffset1' placeholder='Server Port' value=\"$PORT\"/>");
	print ("<input type='password' name='PASSWORD' class='form-control voffset1' placeholder='RCON Password' value=\"$PASSWORD\"/>");
	print ("<input type='text' name='COMMAND' class='form-control voffset1' placeholder='Command'/><button type='button' class='btn btn-primary voffset1' value='Submit'>Send</button>"); 

	print ("<div class='form-inline'>");
    print ("<td rowspan='3' class='txtarea'>");	
    print ("<button type='button' class='btn btn-primary' value='Server Status' onclick='serverstatus()'>Status</button>");
    print ("<button type='button' class='btn btn-primary' value='Map List' onclick='maplist()'>Map List</button>");
    print ("<button type='button' class='btn btn-primary' value='Restart' onclick='restart()'>Restart</button>");
    print ("<input type='text' name='MAPNAME' class='form-control voffset1' placeholder='Map Name'><button type='submit' onclick='changemap()' class='btn btn-primary voffset1'>Change Map</button>");
	print ("</div>");
    print ("<textarea rows='30' class='form-control voffset1' cols='110' readonly='readonly' style='cursor :default'>$OUTPUT</textarea>");
	
    print ("</td></tr>");
    print ("<tr>");
	print ("<td>");
	print ("</form>");
	
    print ("<form name='COMMONCOMMANDS' class='voffset1'>");
    print ("<input type='text' size='5' name='KICKID' placeholder='ID' class='form-control voffset1' placeholder='Steam ID'><input type='text' name='KICKREASON' class='form-control voffset1' placeholder='Reason'><button type='submit' value='Kick ID' class='btn btn-primary voffset1' onclick='kickid()'>Kick ID</button>");
    print ("<input type='text' name='SEARCH' value='' class='form-control voffset1' placeholder='CVAR'><button type='submit' class='btn btn-primary voffset1' value='CVAR Search' onclick='search()'>CVAR Search</button>");    
    print ("<input type='text' name='SAY' value='' class='form-control voffset1' placeholder='Message'><button type='submit' class='btn btn-primary voffset1' value='Say' onclick='say()'>Say</button>");
	
    print ("</form>");
	print ("</td>");	
	print ("</table>");
    print ("</div>");
	print ("<div class='voffset3'></div>");
	print ("</div>");

?>

	
	<script>$('textarea')
    .attr('unselectable', 'on')
    .css('-webkit-user-select', 'none')
    .css('-moz-user-select', 'none')
    .css('-ms-user-select','none')
    .css('-o-user-select','none')
    .css('user-select','none')
    .on('selectstart', false)
    .on('mousedown', false)
	</script>
	
    </body>
</html>
	
