
<!DOCTYPE html>
<html lang="en">
<head>
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the cake house</title>
   <link rel="stylesheet" href="style.css">
    <style>
    body.bottom-center {
    
      display: flex;
      justify-content: center;
      align-items: flex-end;
      height: 100vh;
      margin: 0; 
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
       
        <button id="a" type="submit" onclick="doBoth()">My Cart</button>
       
        <button onclick="window.location.href='login.php';"  id="b">Login</button>
        <button  onclick="window.location.href='signup.php';" id="b">signup</button>
        
      </div>

    </div>
     
    <div id="bgimg">
        <div id="tagline"> 
            <h1>Turning Moments into Memories with Cake</h1>
        </div>
         
    </div>
    <div id="body">
        <div id="whitebg">
            <h1>Categories</h1>
           <div>
            <div id="categories">
                <div id="addcategories">
                    <table >
                         
                        
            <?php
             
$host="localhost";
$user="root";
$pass="";
$dname="cake";
$con=mysqli_connect($host,$user,$pass,$dname);



              $q="select * from category";
               $qq=mysqli_query($con,$q);
                while($rw=mysqli_fetch_assoc($qq))
                    {  
                  ?>
                 <tr>
                    <td>
               
                <a href="product.php?catname=<?php echo $rw['catname'];?>">
                    <img src="<?php echo $rw['image'];?>">
                    <div id="categoriestext">
                    <h3><?php echo $rw['catname'];?></h3>
                      </div>
                </a>
                   
                    </td>
                    
                    </tr>  
                           <?php
                    }
                    ?>  
                     
                    </table>
                      </div>
                   </div>          
              </div>
           
             
       
                  
            <div id="topselling">
             
                <h1>Top Selling</h1>
                <br>
            <div id="topitem">
                <div id="topcake">
                <table>
                          <tr>
                           
             <?php
               $q="select * from topselling";
               $qq=mysqli_query($con,$q);
                 ?>  
                
                <?php 
                while($rw=mysqli_fetch_assoc($qq))
                    {  
                  ?>
                  <td>
                    <img src="<?php echo $rw['photo'];?>">
                              <div id="caketxt">
                                 <h4><?php echo $rw['pname'];?></h4>
                                       </div>
                                        <h4><?php echo $rw['description'];?></h4>
                                  <h4>₹<?php echo $rw['price'];?></h4>
                                 
                       
                    <?php
                             $qqq="select * from log;";
               
               $qqqq=mysqli_query($con,$qqq);
              $r=mysqli_fetch_assoc($qqqq)
                          ?>

                           <button id="addbutton" onclick="location.href='addcart.php?uname=<?php echo $r['uname'];?>&price=<?php echo $rw['price'];?>&pname=<?php echo $rw['pname'];?>'" ">+Add</button>
                               </div>
                    </td>
                     <?php
                    }
                    ?>  
                    </tr>
                </table>
                    </div>
        </div>
    </div>
                  
  <div class="bottom-center">This website created by vivek patel(Full Stack Developer) & deep patel(fronted developer).</div>
</body>
 <?php
         include("con.php");
           $qqq="SELECT * FROM log";
         $qqqq=mysqli_query($con,$qqq);
         $fetch=mysqli_fetch_assoc($qqqq);
          
         $uname= $fetch['uname'];
             $qqqqq="SELECT * FROM user where uname = '$uname'";
             $qqqqqq=mysqli_query($con,$qqqqq);
             $fetch2=mysqli_fetch_assoc($qqqqqq);
             $num= $fetch2['mobile'];
         
?>
<script>


  function doBoth() {
   
    window.location.href = 'mycart.php?uname=<?php echo $uname;?>&mobile=<?php echo $num;?>';
    // 1. Create XMLHttpRequest object

  }  
  

</script>

 
</html>
