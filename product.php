<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the cake house</title>
   <link rel="stylesheet" href="style.css">
   <style>
    .add-button {
      background-color: rgb(56, 42, 241); 
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    .add-button:hover {
      background-color:rgb(56, 42, 241);
    }
    body{
      background-image: url("bg.png");
    }
  </style>
</head>
<body>
    <div id="nav">
       <div id="title">
        <a href="index.html">
        <img src="cakelogo.png" alt="logo">
        </a>
       </div>
       <div id="buttons">
     
       </div>
    </div>
   
    <div id="body">
    

                 
        
                <div id="addcategories">
                 
                    <table >
                          <tr>
                        
            <?php
$host="localhost";
$user="root";
$pass="";
$dname="cake";
$con=mysqli_connect($host,$user,$pass,$dname);


 $catname=$_GET['catname'];
                       $q="select * from product where catname = '$catname'; ";
               
               $qq=mysqli_query($con,$q);
               while($rw=mysqli_fetch_assoc($qq))
                    { 
                  ?>
                
                    <td>
                            <div id="topcake">
                       <img src="<?php echo $rw['image'];?> ">
                          <div id="categoriestext">
                     <h4> <?php echo $rw['pname'];?><br>
                      <?php echo $rw['description'];?><br>
                          <?php echo '₹',$rw['price'];?><br>
                          <?php
                             $qqq="select * from log;";
               
               $qqqq=mysqli_query($con,$qqq);
              $r=mysqli_fetch_assoc($qqqq)
                          ?>

                           <button onclick="location.href='addcart.php?uname=<?php echo $r['uname'];?>&price=<?php echo $rw['price'];?>&pname=<?php echo $rw['pname'];?>'" class="add-button">+Add</button>
                     </h4>
                      </div>
                    
            
                     <td>
                            </div>
                 <?php
                    }
                    ?>  
                 
              <tr>
         <table>
             </div>
                </div>
                </div>

                
                
               
                
  
</body>
</html>

