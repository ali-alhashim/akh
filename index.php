<!DOCTYPE html>
<html lang="en">
<head>

<!--------------Created By Ali Alhashim---------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL ABDULKARIM HOLDING</title>

   <?php require("share/headerLinks.php"); ?>

</head>

<body>
  
<?php  require("share/navbar.php");?> 
   

<div class="container">
        <main role="main" class="pb-3">
            <!--body-->
            
           <!--Welcome all languages -->
           <div class="WordsContainer">
           <div class="word w1">Welcome to AKH website</div>
           <div class="word w2">مرحباً بك في موقع شركة العبدالكريم</div>
           <div class="word w3">Willkommen auf der Website von Abdul Karim</div>
           <div class="word w4">Benvenuti nel sito di Abdul Karim</div>
           <div class="word w5">欢迎来到阿卜杜勒卡里姆网站 </div>
           </div>
         

        </main>
 </div>

 <br/>
     <!-----------carousel slide------------>
     <div>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="gallery/carousel/banner1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="gallery/carousel/banner2.png" alt="Second slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="gallery/carousel/banner3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    <!-----------end carousel slide------------->

    <br/>
    <!------ Statics ---------->
    <div class="container">

    <div class="d-flex flex-wrap justify-content-center w-100">

      <div class="card p-4 m-4 text-center ">
      Total Employees
      <h2 id="EmpTotal" class="num">2000<sub>+</sub></h2>
     </div>

     <div class="card p-4 m-4 text-center ">
      Total Branches
      <h2 id="BranchesTotal" class="num">2000<sub>+</sub></h2>
     </div>

     <div class="card p-4 m-4 text-center ">
      Total Showrooms
      <h2 id="ShowroomsTotal" class="num">2000<sub>+</sub></h2>
     </div>


     <div class="card p-4 m-4 text-center ">
     Total Years Of Experience
      <h2 id="ExperienceTotal" class="num">2000<sub>+</sub></h2>
     </div>



    </div>

    </div>


   

    <!--------end staticcs----->


<br/>
<br/>

<!--News & Media-->
<div class="w-100 bg-LightGray p-4">
<div class="container text-center">
<h5 class="subjectTitle">News & Media</h5>
<hr>
<div class="d-flex flex-wrap justify-content-center w-100">

   
<div class="card m-4" style="width: 18rem;">
  <img src="gallery/news/aramco.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-akhBule">Read More</a>
  </div>
</div>



<div class="card m-4" style="width: 18rem;">
  <img src="gallery/news/aramco.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-akhBule">Read More</a>
  </div>
</div>


<div class="card m-4" style="width: 18rem;">
  <img src="gallery/news/aramco.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-akhBule">Read More</a>
  </div>
</div>





</div>
<hr>
<a href="pages/news.php" class="btn btn-akhOrange"> View All </a>
</div>
</div>
<!--End News & Media -->

<br/>
<br/>

<!--Subsidiaries-->
<div class="container ">
<fieldset class="form-group border p-3">
<legend> Our Subsidiaries </legend>

<div class="row text-center">

  <div class="col-3 ">
  <a href="https://www.naizak.com/" target="_blank"><img src="gallery/subsidiary/naizak.png"  class="img-fluid" width="150px"/></a>
  </div>

  <div class="col-3 ">
    <a href="https://isg.com.sa/" target="_blank"><img src="gallery/subsidiary/isg.png" width="150px" class="img-fluid"/></a>
    
  </div>

  <div class="col-3 ">
  <a href="https://EWI.com.sa/" target="_blank"><img src="gallery/subsidiary/EWI.jpg" width="150px" class="img-fluid"/></a>
  </div>

  <div class="col-3 ">
  <a href="https://starlight.com.sa/" target="_blank"><img src="gallery/subsidiary/starlight.png" class="img-fluid"/></a>
  </div>
</div>

</fieldset>
 
</div>
<!--end Subsidiaries -->


<?php require("share/footer.php"); ?>
<?php require("share/footerLinks.php"); ?>


<!---Counter Script---->
<script>
                        $(document).ready(function(){
                            
                            

                            

                            function myLoop(counter , MaxCunter , divID) {         
                            setTimeout(function() {   
                                $(divID).text(counter); 
                                $(divID).append(" <sup>+</sup>");
                                  
                                counter++;                    
                              if (counter <= MaxCunter) 
                              {           
                                  myLoop(counter,MaxCunter , divID);             
                              }                      
                                   }, 100)
                                 }
                                 

                                  myLoop(0, 10 , "#BranchesTotal"); 
                                  
                                  myLoop(0, 2000 , "#EmpTotal"); 

                                  myLoop(0, 10 , "#ShowroomsTotal");

                                  myLoop(0,99,"#ExperienceTotal");

                         })
                    </script>

<!-----End Counter Script ---->

</body>

</html>