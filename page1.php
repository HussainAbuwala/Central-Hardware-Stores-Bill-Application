<html>
	<head>  
		<title>CHS INVOICE</title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<link rel="stylesheet" type="text/css" href="page1.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="page1.js"></script>
    </head>
    
    <body>
        
        <!-- DISPLAY HEADER INFORMATION -->
        <div class = "landingpage">
			<h1>1</h1>   
			<h2>Create New Bill</h2>
			<form class = 'display inpd' action = 'chsAdvnc.php' method='POST' onsubmit='return check(event);'>
				
				<label>Bill_no</label>
				<input type='text' name='b_no'  id= 'b_no' autocomplete="off"  />
				<input type='submit' name='Next' value='Next' id = 'nxt'  />
				<p></p>
				<div id="error">
				</div>
	
				<div id="valid">
				</div>
	
			</form>
		</div>
    </body>

</html>