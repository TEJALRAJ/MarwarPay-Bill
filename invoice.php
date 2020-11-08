
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
*{box-sizing: border-box;
  align-content:center;
  font-family: Calibri; 
}
.bold{ font-weight: bold; }
.center{text-align: center;}
.left{border-left: 1px solid black;}
.right{border-right: 1px solid black;}
.top{border-top:1px solid black;}
.bottom{border-bottom:1px solid black;}

.r div{border-bottom:1px solid black;
       border-collapse: collapse;
       float: left;
       height:auto;
       }
.r div p{ padding:5px;
          margin:0; }

.container{ margin-left:auto;
            margin-right: auto; 
            width: 820px;}
.r5 div{height: 200px;} 
.r4 div{height: 40px;}
.r14 div{height:50px;}           



.container div p{
   padding: 10px;
}

</style>

<body>
<div class="container">  
<p class="center">
 <strong> <?php
    if ( isset($_REQUEST['bill']) ) {
    echo htmlentities($_REQUEST['bill']);
    }
    ?>
    - Invoice
  </strong>
</p>
<div class="r r2">
<div class="left top right" style="width:400px; height:120px; "> 
  <p><strong>MARWARPAY INFO SOLUTION PRIVATE LIMITED HIRAPURA, JAIPUR, RAJASTHAN</strong><br>
             Company's GST No: <strong>08AANCM5105E1ZL</strong><br>
             Company's PAN: <strong>AANCM5105E</strong><br>
             Email:
            <a href = "mailto:marwarpay@gmail.com">marwarpay@gmail.com</a>
</p> </div>

<div class="right top center" style="width:400px; height:40px;">
  <p> Date:
    <?php
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[mday] $mydate[month], $mydate[year]";
    ?></p> </div>

<div class="right center" style="width:200px; height:40px;"> 
  <p>Dealer Code (Member ID) </p> </div>
    
    <div class="right center" style="width:200px; height:40px;"> 
    <p>    
 <strong> <?php
    if ( isset($_REQUEST['d_code']) ) {
    echo htmlentities($_REQUEST['d_code']);
    }
    ?></strong></p> </div>

    <div class="right center" style="width:200px; height:40px;"> <p>Buyer's PAN No:</p> </div>
    <div class="right center" style="width:200px; height:40px;"> 
    <p>
 <strong> <?php
    if ( isset($_REQUEST['b_pan_num']) ) {
    echo htmlentities($_REQUEST['b_pan_num']);
    }
    ?></strong> </p> </div>
</div> 


<div class="r r3">
  <div class="left right" style="width:400px; height:120px; "> <p>Buyer <br>
  <strong> <?php
    if ( isset($_REQUEST['buyer']) ) {
    echo htmlentities($_REQUEST['buyer']);
    }
    ?>
    </strong>
    <br>

   <?php
    if ( isset($_REQUEST['address']) ) {
    echo htmlentities($_REQUEST['address']);
    }
    ?>
  </p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Buyer's GST No:</p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
 <strong>  <?php
    if ( isset($_REQUEST['b_gst_num']) ) {
    echo htmlentities($_REQUEST['b_gst_num']);
    }
    ?></strong>
  </p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Mode/Terms of Payment </p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
   <?php
    if ( isset($_REQUEST['payment']) ) {
    echo htmlentities($_REQUEST['payment']);
    }
    ?></p> </div>
  <div class="right center" style="width:200px; height:40px;"> <p>Place Of Supply</p> </div>
  <div class="right center" style="width:200px; height:40px;"> 
   <p>
    <?php
    if ( isset($_REQUEST['place']) ) {
    echo htmlentities($_REQUEST['place']);
    }
    ?>
    </p> </div>

</div> 

<div class="r r4 center">
  <div class="left right" style="width:60px;  "> <p>S. No.</p> </div>
  <div class="right" style="width:300px; "> <p>Particulars</p> </div>
  <div class="right" style="width:120px;"> <p>Quantity</p> </div>
  <div class="right" style="width:80px; "> <p>Rate</p> </div>
  <div class="right" style="width:60px; "> <p>Per</p> </div>
  <div class="right" style="width:180px; "> <p>Amount</p> </div>
</div> 

<div class="r r5 center">
  <div class="left right" style="width:60px;  "> <p></p> </div>
  <div class="right" style="width:300px; "> 
    <p>
         <?php
    if ( isset($_REQUEST['item_1'] ) ) {
    echo htmlentities($_REQUEST['item_1']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['item_2']) ) {
    echo htmlentities($_REQUEST['item_2']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['item_3']) ) {
    echo htmlentities($_REQUEST['item_3']);
    }
    ?><br>
   <?php
    if ( isset($_REQUEST['item_4']) ) {
    echo htmlentities($_REQUEST['item_4']);
    }
    ?><br>
    <?php
    if ( isset($_REQUEST['item_5']) ) {
    echo htmlentities($_REQUEST['item_5']);
    }
    ?> 

    </p> </div>
  <div class="right" style="width:120px; ">
      <p>
         <?php
    if ( isset($_REQUEST['quant_1']) ) {
    echo htmlentities($_REQUEST['quant_1']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['quant_2']) ) {
    echo htmlentities($_REQUEST['quant_2']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['quant_3']) ) {
    echo htmlentities($_REQUEST['quant_3']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['quant_4']) ) {
    echo htmlentities($_REQUEST['quant_4']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['quant_5']) ) {
    echo htmlentities($_REQUEST['quant_5']);
    }
    ?> 

    </p> </div>
  <div class="right" style="width:80px; ">
        <p>
         <?php
    if ( isset($_REQUEST['rate_1']) ) {
    echo htmlentities($_REQUEST['rate_1']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['rate_2']) ) {
    echo htmlentities($_REQUEST['rate_2']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['rate_3']) ) {
    echo htmlentities($_REQUEST['rate_3']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['rate_4']) ) {
    echo htmlentities($_REQUEST['rate_4']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['rate_5']) ) {
    echo htmlentities($_REQUEST['rate_5']);
    }
    ?> 

    </p></div>
  <div class="right" style="width:60px; ">
          <p>
         <?php
    if ( isset($_REQUEST['per_1']) ) {
    echo htmlentities($_REQUEST['per_1']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['per_2']) ) {
    echo htmlentities($_REQUEST['per_2']);
    }
    ?><br>
        <?php
    if ( isset($_REQUEST['per_3']) ) {
    echo htmlentities($_REQUEST['per_3']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['per_4']) ) {
    echo htmlentities($_REQUEST['per_4']);
    }
    ?> 
    <br>
        <?php
    if ( isset($_REQUEST['per_5']) ) {
    echo htmlentities($_REQUEST['per_5']);
    }
    ?> 

    </p></div>
  <div class="right" style="width:180px;">
            <p>
         <?php
         $Amount1 =0;
          $Amount2 =0;
          $Amount3 =0;
          $Amount4 =0;
          $Amount5 =0;

         include_once 'calculation.php';
         if(is_numeric($_REQUEST['rate_1']) && is_numeric($_REQUEST['quant_1']) ){
         $Amount1 = (item($_REQUEST['rate_1'],$_REQUEST['quant_1']));
         echo htmlentities($Amount1);}
         ?><br>
         <?php
         if(is_numeric($_REQUEST['rate_2']) && is_numeric($_REQUEST['quant_2']) ){
         $Amount2 = (item($_REQUEST['rate_2'],$_REQUEST['quant_2']));
         echo htmlentities($Amount2);}
         ?>
         <br>
         <?php
         if(is_numeric($_REQUEST['rate_3']) && is_numeric($_REQUEST['quant_3'])){
         $Amount3 = (item($_REQUEST['rate_3'],$_REQUEST['quant_3']));
         echo htmlentities($Amount3);}
         ?>
                  <br>
         <?php
         if(is_numeric($_REQUEST['rate_4']) && is_numeric($_REQUEST['quant_4']) ){
         $Amount4 = (item($_REQUEST['rate_4'],$_REQUEST['quant_4']));
         echo htmlentities($Amount4);}
         ?>
                  <br>
         <?php
         if(is_numeric($_REQUEST['rate_5']) && is_numeric($_REQUEST['quant_5'])){
         $Amount5 = (item($_REQUEST['rate_5'],$_REQUEST['quant_5']));
         echo htmlentities($Amount5);}
         ?>

    </p> </div>
</div> 

<div class="r r2 ">
  <div class="right left" style="width:360px; height:40px; text-align: right; padding-right: 5px;">
    <p>Total</p></div>
  <div class="right" style="width:120px; height:40px;"> </div>
  <div class="right" style="width:80px; height:40px;"> </div>
  <div class="right" style="width:60px; height:40px;"> </div>
  <div class="right center" style="width:180px; height:40px;"> <p>
    <?php 
  
     $total = (total($Amount1,$Amount2,$Amount3,$Amount4,$Amount5));
     echo htmlentities($total);
    ?>

  </p> </div>
</div> 
<div class="r r2 ">
  <div class="right left" style="width:360px; height:40px; text-align: right; padding-right: 5px;">
    <p>Total GST</p></div>
  <div class="right" style="width:120px; height:40px;"> </div>
  <div class="right" style="width:80px; height:40px;"><p class="center">
  <?php 
  if ( isset($_REQUEST['gst']) ) {
    echo htmlentities($_REQUEST['gst']);
    }
  ?>%
  </p>
  </div>
  <div class="right" style="width:60px; height:40px;"> </div>
  <div class="right center" style="width:180px; height:40px;"> <p>
    <?php 
     
     $totGST = (totalgst($total));
     echo htmlentities($totGST);
    ?>

  </p> </div>
</div> 
<div class="r r2 ">
  <div class="right left" style="width:360px; height:40px; text-align: right; padding-right: 5px;">
    <p>Grand Total</p></div>
  <div class="right" style="width:120px; height:40px;"> </div>
  <div class="right" style="width:80px; height:40px;"> </div>
  <div class="right" style="width:60px; height:40px;"> </div>
  <div class="right center" style="width:180px; height:40px;"> <p>
    <?php 

     $Grandtotal = (gtotal($total,$totGST));
     echo htmlentities($Grandtotal);
    ?>

  </p> </div>
</div> 
<div class="r r2">
  <div class="left right" style="width:800px; height:200px;">
  <p style="float:left; "><strong>Total Amount in words</strong></p>
    <p style="text-align: right;">E. & O.E</p>
    <p style="font-size:14px; "> <strong>INR 
      <?php
      echo (numberTowords($Grandtotal))
      ?>
        
      </strong></p> 
 
  </div>
</div>
<div class="r r2">
  <div class="left right" style="width:400px; height:80px;"></div>
  <div class="right" style="width:400px; height:80px;">
    <p><strong>For MARWARPAY INFO SOLUTION PRIVATE LIMITED</strong></p>  
    <p style="text-align: right">Authorised Signatory</p>
  </div>
</div>


<div class="r r19 center">
   <div class="bottom left right" style="width:800px;"> <p> <span class="bold">Note: </span> This is a Computer Generated Slip and does not Require Signature.</p> </div>
</div>
<button onclick="window.print()">Print this page</button>
</div>
</body>
</html>