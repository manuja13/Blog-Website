<style>
  body {
    background-image: linear-gradient(to left bottom, #1d2027, #1c212b, #1c222f, #1a2333, #192437, #222e44, #2b3851, #34435e, #4b5b79, #637595, #7c8fb2, #95abd0);
    background-size:300% 300%;
    animation:color 12s ease-in-out infinite;
    background-attachment:fixed;
  }
  @keyframes color{
    0%{
      background-position: 0 50%;
    }
    50%{
      background-position: 100% 50%;
    }
    100%{
      background-position: 0 50%;
    }
  }
  .sub{
    text-align:center;
    margin: 40px auto;
    max-width:570px;
    position: relative;
    font-family:Georgia;
    font-weight:bold;
    padding-top:20px;
    padding-bottom:10px;
    color:white;
  }
  
  h1:before{
    background-color:white;
    display:block;
    width:160px;
    height:5px;
    content:"";
    position:absolute;
    left:0;
    top:50%;
    z-index: -1;
  }

  h1:after{
    background-color:white;
    display:block;
    width:160px;
    height:5px;
    content:"";
    position:absolute;
    right:0;
    top:50%;
    z-index: -1;
  }
</style>

<!--Carousel Start-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="resources\img\Carousel\car2.jpg" class="tales"%>
      <h1 class="carohead5">WHEN NOTHING'S <br> GOING RIGHT <br> JUST GO OFF-ROAD</h1>
    </div>
    <div class="carousel-item active">
      <img src="resources\img\Carousel\car11.jpg" class="tales"%>
      <h1 class="carohead3">READY FOR YOUR TOUR ?</h1>
    </div>
    <div class="carousel-item">
      <img src="resources\img\Carousel\car3.jpg" class="tales"%>
      <h1 class="carohead4">EXPLORE <br> THE WORLD <br> ON 4 WHEELS</h1>
    </div>
    <div class="carousel-item">
      <img src="resources\img\Carousel\car4.jpg" class="tales"%>
      <h1 class="carohead1">ROADS? <br> WHERE WE'RE GOING <br> WE DON'T NEED ROADS</h1>
    </div>
    <div class="carousel-item">
      <img src="resources\img\Carousel\car5.jpg" class="tales"%>
      <h1 class="carohead2">STRAIGHT ROADS <br> DON'T MAKE <br> SKILLED DRIVERS</h1>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Carousel End-->


<!--Home Cards-->
<h1 class="sub">BLOGS</h1>
<center><div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;background-image: linear-gradient(to left bottom, #ffffff, #eeeef6, #dcddee, #c9cde6, #b4bede, #b4bede, #b4bede, #b4bede, #c9cde6, #dcddee, #eeeef6, #ffffff);">
        <img src="resources\img\Blog\blog1.jpg" class="card-img-top" alt="...">
        <div class="card-body" >
        <h5 class="card-title">7 TIPS FOR PLANNING AN OFF-ROAD TRIP</h5>
        <p class="card-text">Regular road trips can be lots of fun, but driving on flat stretches of highway for hours on end can get redundant after a while.Off-road... </p>
        <center><a href="pages\posts\post1.php">
          <button class="buttonx" style="vertical-align:middle">
            <span>See more</span>
          </button>
        </a></center>
      </div>
    </div>
  </div>

  <div class="col-md-3">
      <div class="card" style="width: 18rem;background-image: linear-gradient(to left bottom, #ffffff, #eeeef6, #dcddee, #c9cde6, #b4bede, #b4bede, #b4bede, #b4bede, #c9cde6, #dcddee, #eeeef6, #ffffff);">
        <img src="resources\img\Blog\blog2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">HOW CAN YOU CUT YOUR OFF-ROAD VEHICLE’S FUEL COSTS?</h5>
        <p class="card-text">Off-roaders always expect to cause some sort of damage to their vehicles when they hit the trails... </p>
        <center><a href="pages\posts\post2.php">
          <button class="buttonx" style="vertical-align:middle">
            <span>See more</span>
          </button>
        </a></center>
      </div>
  </div>
</div>
<div class="col-md-3">
    <div class="card" style="width: 18rem;background-image: linear-gradient(to left bottom, #ffffff, #eeeef6, #dcddee, #c9cde6, #b4bede, #b4bede, #b4bede, #b4bede, #c9cde6, #dcddee, #eeeef6, #ffffff);">
      <img src="resources\img\Blog\blog3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">4WD VS. AWD: WHICH IS BETTER FOR OFF-ROADING?</h5>
        <p class="card-text">Four-wheel drive is the older brother of the two systems, going back to locomotives and the first... </p>
        <center><a href="pages\posts\post3.php">
          <button class="buttonx" style="vertical-align:middle">
            <span>See more</span>
          </button>
        </a></center>
      </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card" style="width: 18rem;background-image: linear-gradient(to left bottom, #ffffff, #eeeef6, #dcddee, #c9cde6, #b4bede, #b4bede, #b4bede, #b4bede, #c9cde6, #dcddee, #eeeef6, #ffffff);">
      <img src="resources\img\Blog\blog4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HOW TO PROTECT YOUR OFF-ROAD VEHICLE’S EXTERIOR</h5>
        <p class="card-text">When you’re in your off-road vehicle, the last thing you should be thinking about is if it’s going to ...</p>
        <center><a href="pages\posts\post4.php">
          <button class="buttonx" style="vertical-align:middle">
            <span>See more</span>
          </button>
        </a></center>
      </div>
    </div>
</div></center>   
     
<!--Home Cards End-->

 <!--Gallery--> 
 <h1 class="sub">GALLERY</h1>
 <center><video autoplay loop muted height="700"source src="resources\videos\beach.mp4"> </video></center>

 <center><a href="pages\_trails.php;"style="margin:2px;">
  <button class="button" style="vertical-align:middle">
    <span>Explore the Gallery</span>
  </button>
</a></center>
<!--Gallery End--> 

<!--Trails-->
<h1 class="sub">Trails</h1>
<h2 style="margin:40px;color:white;">MOST CHALLENGING OFF-ROAD TRAILS</h2>
     
<div class="container">
  <div class="box">
    <img style="width: 250px; height:250px;" src="resources\img\Cards\card1.jpg">
  </div>
  <div class="box">
    <img style="width: 250px; height:250px;"src="resources\img\Cards\card2.jpg">
  </div>
  <div class="box">
    <img style="width: 250px; height:250px;" src="resources\img\Cards\card3.jpg">
  </div>
  <div class="box">
    <img style="width: 250px; height:250px;" src="resources\img\Cards\card4.jpg">
  </div>
  <div class="box">
    <img style="width: 250px; height:250px;" src="resources\img\Cards\card5.jpg">
  </div>
</div>
<center><a href="pages\_trails.php;"style="margin:2px;">
  <button class="button" style="vertical-align:middle">
    <span>Search for Trails</span>
  </button>
</a></center>
<!--Trails End-->