<html>
	<head>
        
		<title>CHS INVOICE</title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="page2.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script>
            $( function() {
              $( "#b_d" ).datepicker({dateFormat: 'dd/mm/yy'});
			  $( "#o_d" ).datepicker({dateFormat: 'dd/mm/yy'});
            } );
        </script>
		
		<script src="page2.js"></script>
    
    <body>
		
        
        <!-- DISPLAY HEADER INFORMATION -->
        <h1>2</h1>
		<h2>Insert Records</h2>
		
		<form class = 'display inpd' action = 'page3.php' method='POST' target='_blank'>
			<input type='submit' name='display' target='_blank' value='Display' id = 'display'  />
			
			<?php
				
				echo "<input type='hidden' name='b_no'  id= 'b_no' value=  '$_POST[b_no]'/> ";
			
			?>
			<ul id="ul1">
				
				<li>
					<label>Order_no</label>
					<input type='text' name='o_no'  id= 'o_no'  autocomplete="off"/>
				</li>
				
				<li>
					<label>Bill_date</label>
					<input type='text' name='b_d'  id= 'b_d' readonly="readonly" />
				</li>
				
				<li>
					<label>Order_date</label>
					<input type='text' name='o_d'  id= 'o_d' readonly="readonly" />
				</li>

			</ul>
			
			
			<ul id="ul2">
				
				<li>
					<label>Quantity</label>
					<input type='text' name='qty[]'  id= 'qty' />
			
				</li>
	
			
				<li>
					<label>Rate</label>
					<input type='text' name='rate[]' id= 'rate'  />
				</li>
			
			
			
				<li>
					<label>Per</label>
					<input type='text' name='per[]' id= 'per'/>
				</li>
			
			
 
				<li>
					<label>PS</label>
					<input type='text' name='ps[]' id= 'ps'  />
				</li>
			
				<li id = "txtarea">
					<label>Description</label>
					<textarea name = 'desc[]' id= 'desc'></textarea>
				</li>
			
			</ul>
			
			<button type='button' name='add' id = 'add' >Add Record</button>
			</br>
			</br>
			</br>
			</br>
			<table id = 'tbl'>
				
				<tr id = 'tbhead'>
					<th id = 'qnt'>QNTY</th>
					<th id = 'desc2'>DESCRIPTION</th>
					<th id = 'rate'>RATE</th>
					<th id = 'pe'>PER</th>
					<th id = 'ps'>PS</th>
					<th id = 'btn'>Button</th>
				</tr>
				
				
			</table>
			

		</form>
		
    </body>

</html>