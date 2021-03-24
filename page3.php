<?php


    $b_no = $_POST["b_no"];     //bill_no
    $o_no = $_POST["o_no"];     //order_no
    $b_d = $_POST["b_d"];       //bill_date
    $o_d = $_POST["o_d"];       //order_date
    $ps = $_POST["ps"];         //ps
    $qty = $_POST["qty"];       //quantity
    $per = $_POST["per"];       //per
    $desc = $_POST["desc"];     //description
    $rate = $_POST["rate"];     //rate

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
  <link rel="stylesheet" type="text/css" href="page3.css">
  <meta name = "viewport" content="width=device-width, initial-scale=1.0">
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>
  		@page { size: A4 }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="page3.js"></script>
 

</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body id = "bdy" class="A4">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  
  <div id = 'bdiv' style="text-align: center">
        <button type='button' name='save' id='save'>SAVE TO SERVER</button> 
    </div>
  
  <section id = "sec1" class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    
    
   
     <div class = 'headerr'>
			
			<span class = 'left'>FAX &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:+880-31-610241</span>
            <span class = 'mid'>DEPENDABLE ORGANIZATION SINCE 1947</span>
            <span class = 'right'>TEL: +880-31-611125, 631957</span>

	 </div>
	 

	 
	 <div class = 'sub-head'>
	  
			<span class = 'left'>E-MAIL : aaabuwala@yahoo.co.in</span>
            <span class = 'right'>+880-31-2852034-35-36</span>
			
	 </div>
	 
	 <div class = 'title'>
			
			<h2>CENTRAL HARDWARE STORES</h2>
			<p id = 'sub1'>IMPORTERS,STOCKISTS,RETAILERS & SUPPLIERS OF GENERAL HARDWARE AND MACHINERY, MILL MINING REQUISITES,</p>
            <p id = 'sub2'>SPECIALIST IN GAS CUTTING & WELDING EQUIPMENTS,MARINE EQUIPMENTS, HAND TOOLS, POWER TOOLS ETC.</p>
            <p id = 'sub3'>129, JUBILEE ROAD, P.O. BOX NO. 42, CHITTAGONG-4000, BANGLADESH.</p>
			<img id = 'img' src="symbol.png">

	 </div>
	 
	 <form class = 'inpinfo1'>
             
			<?php
				  
				  echo "
						<span class = 'left'>BILL NO.&nbsp&nbsp&nbsp&nbsp&nbsp <input type='text' name='author' id='b_no' value= '$b_no' /></span>
						<span class = 'right'>Date: <input type='text' name='author' id = 'b_d' value= '$b_d' /></span>
				  ";
			
			?> 
			
			
      </form>
	 
	 <form class = 'inpinfo1'>
             
			<?php
				  
				  echo "<span class = 'left'>ORDER NO. <input type='text' name='author' id = 'o_no' value= '$o_no' /></span>
						<span class = 'right'>Date: <input type='text' name='author' id = 'o_d' value= '$o_d'/></span>";
			
			?>
			
			
      </form>
	 
	 <div class = 'inpinfo2'>
	  
			<span>Messrs <textarea id = "big"></textarea></span>
			<p id = 'h3h'>Interest @ 15 percent will be charged ectra, if it is not paid within 15 days of billing date. We are not responsible for any breakage / damage / pilferage / shortage of the goods partly or wholly after leaving our Warehose / Store</p>
        
			
	 </div>
	 
	 <table class = 'inpinfo3'>
            <tr id = 'tbhead'>
                <th id = 'qnt'>QNTY</th>
                <th id = 'desc'>DESCRIPTION</th>
                <th id = 'rate'>RATE</th>
                <th id = 'pe'>PER</th>
                <th id = 'ta'>TAKA</th>
                <th id = 'ps'>PS</th>
            </tr>
            
            
            <?php
                
                $sum = 0;
                for ($j = 1 ; $j < sizeof($qty) ; ++$j) {
            
                $taka = $rate[$j] * $qty[$j];
                $sum += $taka;
                
                echo "<tr class = 'content'>
                        <td>$qty[$j]</td>
                        <td>$desc[$j]</td>
                        <td>$rate[$j]</td>
                        <td>$per[$j]</td>
                        <td>$taka</td>
                        <td>$ps[$j]</td>                    
                    </tr>";
          
                }
            
            ?>
            
            <tr>
			  <td>&nbsp&nbsp</td>
			  <td>&nbsp&nbsp</td>
			  <td class = "total"colspan= '2'>Total Taka</td>
			  <td class = "total"><?php echo "$sum"?></td>
			  <td class = "total">&nbsp&nbsp</td>
			</tr>
    
     </table>
        <?php
        
             
             echo "
             
             <div class = 'footer'>
               
               <span class = 'left'>Enclo:</span>
               <span>Checked by</span>
               <span class = 'right'>E. & O. E</span>
           
   
             </div>";
             
        ?>
     </section>

  

</body>

</html>