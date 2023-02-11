<?php
include 'db.php';
// session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>online watch website</title>

    <link rel="icon" href="img/wi.jpg">
   <link rel="stylesheet" href="ft.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- fafa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>a{
  color: black;
  text-decoration: none;
}</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">fastrack</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           

            
       
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" id="myInput">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
  </nav>

  <div class="col-md-12">
    <img src="img/header.jpg" alt=""style="height:100%;width:100%;">
  </div>

  <div class="pt-5"></div>
   
  <div class="col-md-12 mt-5">

    <div class="row">
    
        <div class="col-md-1 mt-3"></div>
        <div class="col-md-3 mt-3">

         <button class="btn" style="border:1px solid silver;height:50px;width:80%;;">compare</button>
         <span style="margin-top:10px;float:left;;"><b>FILTER BY</b></span>
         <span style="margin-top:10px;float:left;margin-left:140px;text-decoration:underline;">Clear all</span>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-5 py-2"  data-toggle="collapse" data-target="#demo">
         <b><span>PRICE</span></b> <span style=";color:grey;float:right;"><i class="fa fa-plus" aria-hidden="true"></i></span></div>
         <div id="demo" class="collapse col-md-12" >
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id=""><span>Between 0000 And 0500 (6)</span></div>
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id="">Between And (19)</div>
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id="">uOOO And More (8)</div>
         </div>
         

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2" data-toggle="collapse" data-target="#demo1">
         <b><span>AVAILABLITY</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo1" class="collapse col-md-12" >
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id=""><span>Include Out Of Stock</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;" class="mt-2 py-2" data-toggle="collapse" data-target="#demo2">
         <b><span>VIRTUAL TRY ON</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo2" class="collapse col-md-12" >
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id=""><span>Yes(33)</span></div>
         </div>


         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo3">
         <b><span>GENDER</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo3" class="collapse col-md-12" >
           <div class="col-md-12" style="background-color:grey;height:30px;"><input type="checkbox" name="" id=""><span>unisex(33)</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo4">
         <b><span>DISCOUNTS</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo4" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>17% Off (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>30% Off (33)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>33% Off (33)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>35% Off (33)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38% Off (33)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>40% Off (33)</span></div>
           <div class="col-md-12"><input type="checkbox" name="" id=""><span>50% Off (33)</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo5">
         <b><span>STRAP MATERIAL </span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo5" class="collapse col-md-12" style="background-color:grey;height:30px;">
           <div class="col-md-12"><input type="checkbox" name="" id=""><span>Silicon(33)</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo6">
         <b><span>STRAP COLOR</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo6" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Aqua Blue(1)</span></span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span> black(9)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Blue(9)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Dual color(3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Grey(1)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Orange(1)</span></div>
           <div class="col-md-12"><input type="checkbox" name="" id=""><span>Pink(3)</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo7">
         <b><span>DIAL COLOR</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo7" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Black (23)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>digital(3)</span></div>
         </div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo8">
         <b><span>FUNCTION</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo8" class="collapse col-md-12"style="background-color:grey;height:30px;" >
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Digital (11)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Smart(23)</span></div>
</div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo9">
         <b><span>COLLECTION</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo9" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex Curv (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex Hello (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex Play  (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex Play Plus (4)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Reflex Vox (8)</span></div>
</div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo10">
         <b><span>MOVEMENT</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo10" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Digital (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>Smart(30)</span></div>
</div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo11">
         <b><span>PRODUCT CATERGORY</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo11" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>watches (33)</span></div>
        
</div>

         <div style="background-color:#f6f6f6;height:50px;width:80%;;" class="mt-2 py-2"  data-toggle="collapse" data-target="#demo12">
         <b><span>CASE LEVEL</span></b> <span style="float:right;color:grey;"><i class="fa fa-plus" aria-hidden="true"></i></span>
         </div>

         <div id="demo12" class="collapse col-md-12" style="background-color:grey;height:30px;">
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38074 (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38077 (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38075 (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38079 (3)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38099 (4)</span></div>
         <div class="col-md-12"><input type="checkbox" name="" id=""><span>38089 (8)</span></div>
</div>
         
        </div>

        <div class="col-md-8 mt-3">
        <div class="col-md-12"  >
          <div class="row">

            <?php
            $sql="SELECT * FROM `fff` WHERE 1";
            $result=mysqli_query($c,$sql);
            while($row=mysqli_fetch_array($result)){
?>
          <div class="col-md-4 col-6 half showoff mt-5" id="myTable">
          <a href="<?php echo $row['link'] ?>"  target="_blank" style="color:black;text-decoration:none"> 
            <div class="col-md-12 bg-light half">
            <img src="admin/photo/<?php echo $row['img']?>" style="height:100%;width:100%;">
            </div><center>
            <b><p><?php echo $row['name']?></p></b>
            <span>₹<?php echo $row['price']?></span> <span><del></del></span> <span></span><br>
<div class="badge badge-primary">NO COST EMI</div>
<div class="badge badge-primary">SMART WATCH</div>
<button class="mybtn col-md-12">
  QUICK VIEW
</button>
</a>
    </center>
          </div>
          <?php
            }
            ?>
         <style>
          .@media(max-width:600px){
            .half{
              height:50%;
              width:50%;
            }
          }
         </style>
           
            
          </div>
        </div>

        </div>

     </div>
    </div>

</div>

<div class="col-md-12 mt-5" style="background-color:#222222;border-bottom:1px solid silver">
  <div class="row">
    <div class="col-md-2 col-sm-6 py-3">
     <ul style="list-style-type:none;">
      <li style="color:white;font-size:14px;" class="mt-3"><b>CUSTOMER SERVICE</b></li>
      <li style="color:white;font-size:14px;" class="mt-4">Payment Option</li>
      <li style="color:white;font-size:14px;" class="mt-3">Track Order</li>
      <li style="color:white;font-size:14px;" class="mt-3">Find a Store</li>
      <li style="color:white;font-size:14px;" class="mt-3">Encircle Program</li>
     </ul>
    </div>

    <div class="col-md-2 col-sm-6 py-3">
    <ul style="list-style-type:none;">
      <li style="color:white;font-size:14px;" class="mt-3"><b>CONTACT US</b></li>
      <li style="color:white;font-size:14px;" class="mt-4">1800-266-0123</li>
      <li style="color:white;font-size:14px;" class="mt-3">customercare@titan.co.in</li>
      <li style="color:white;font-size:14px;" class="mt-3">Frequently Asked Questions</li>
     </ul>
    </div>

    <div class="col-md-2 col-sm-6 py-3">
    <ul style="list-style-type:none;">
      <li style="color:white;font-size:14px;" class="mt-3"><b>POLICIES</b></li>
      <li style="color:white;font-size:14px;" class="mt-4">Return & Exchange</li>
      <li style="color:white;font-size:14px;" class="mt-3">Cancellation</li>
      <li style="color:white;font-size:14px;" class="mt-3">Shipping</li>
      <li style="color:white;font-size:14px;" class="mt-3">Warranty Policies</li>
      <li style="color:white;font-size:14px;" class="mt-3">Delivery Information</li>
     </ul>
    </div>

    <div class="col-md-2 col-sm-6 py-3">
    <ul style="list-style-type:none;">
      <li style="color:white;font-size:14px;" class="mt-3"><b>ABOUT FASTRACK</b></li>
      <li style="color:white;font-size:14px;" class="mt-4">About Us</li>
      <li style="color:white;font-size:14px;" class="mt-3">Careers</li>
     </ul>

    </div>

    <div class="col-md-4 col-sm-12 py-4">
      
    <p><b style="color:white;font-size:14px;">DOWNLOAD WORLD OF TITAN APP</b></p>
<div class="col-md-12">
  <div class="row">
<div class="col-md-6 col-6"> <a href="https://apps.apple.com/us/app/world-of-titan/id1351637761?ls=1"  target="_blank"> <span><img src="img/apple.svg" style="width:170px;"></span></a></div>

<div class="col-md-6 col-6"><a href="https://play.google.com/store/apps/details?id=com.titancompany.tx37consumerapp&cm_sp=Homepage-_-footer-_-AndroidAppLogo&pli=1"  target="_blank"><span><img src="img/playstore.jpg" style="width:170px;"></span></a><br></div>
  

     
    </div>
    </div>

    <div class="col-md-12 pt-5"></div>
    <ul style="list-style-type:none;padding:0px"  class="symbol ">
    <li class="symbol"><b style="color:white;font-size:14px;">FOLLOW US ON</b></li>
    <li class="symbol"><a href="https://www.facebook.com/fastrack?sessionId=5689807f-ad7d-40b6-a83c-9def1e401eb3.71ba1e7b-1a89-4dbd-b214-63b8cd90ab9e"  target="_blank"><i class="fa fa-facebook ml-3 symbol" aria-hidden="true"></a></i></li>

    <li class="s1"><a href="https://twitter.com/Fastrack?sessionId=5689807f-ad7d-40b6-a83c-9def1e401eb3.71ba1e7b-1a89-4dbd-b214-63b8cd90ab9e" target="_blank"><i class="fa fa-twitter ml-3 s1" aria-hidden="true"></a></i></i></li>

    <li class="s2"><a href="https://plus.google.com/+fastrack?sessionId=5689807f-ad7d-40b6-a83c-9def1e401eb3.71ba1e7b-1a89-4dbd-b214-63b8cd90ab9e" target="_blank"><i class="fa fa-google-plus ml-3 s2" aria-hidden="true"></a></i></i></i></li>

    <li class="s3"><a href="https://www.instagram.com/fastrackworld/?sessionId=5689807f-ad7d-40b6-a83c-9def1e401eb3.71ba1e7b-1a89-4dbd-b214-63b8cd90ab9e" target="_blank"><i class="fa fa-instagram ml-3 s3" aria-hidden="true"></a></i></i></i></li>

    <li class="s4"><a href="https://in.pinterest.com/fastrack/?sessionId=5689807f-ad7d-40b6-a83c-9def1e401eb3.71ba1e7b-1a89-4dbd-b214-63b8cd90ab9e" target="_blank"><i class="fa fa-pinterest-p ml-3 s4" aria-hidden="true"></a></i></i></i></li>

    <li class="s5"><a href="https://www.youtube.com/user/fastrackworld" target="_blank"><i class="fa fa-youtube-play ml-3 s5" aria-hidden="true"></a></i>  </i></i></li>
    </ul><br><br>
    
    <p><b style="color:white;font-size:14px;">NEED HELP ?</b></p>  
    <span style="text-decoration:underline;color:white;"><b>Click Here</b></span>
    <a href="https://wa.me/7490939119?text=Hello" target="_blank"><span style="color:white; ">to chat with us on <img src="img/w1.png" style="height:20px;width:20px;"></span></a><br><br>

    <b><span class="t">TERMS & CONDITION</span></b>
    <b><span class="t">PRIVACY POLICIY</span></b>


    </div>
  </div>
</div>
</div>

<div class="col-md-12 p-2"  style="background-color:#222222;">
<img src="img/Visa_white.svg" style="height:50px;width:50px;margin-left:50px;">
<img src="img/mc.jpg" style="height:30px;width:50px;margin-left:50px;">
<img src="img/Paypal_white.svg" style="height:50px;width:50px;margin-left:50px;">
<img src="img/maestro.png" style="height:30px;width:50px;margin-left:50px;">
<img src="img/Rupay_white.svg" style="height:50px;width:50px;margin-left:50px;">
<img src="img/club.jpg" style="height:30px;width:40px;margin-left:50px;">


<span style="color:#6d6d6d;font-size:11px;" class="float-right p-3"><b>© 2022 Titan Company Limited. All Rights Reserved.</b></span>
</div>




<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  </body>
</html>