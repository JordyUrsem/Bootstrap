<html>
 <head>
   <title>TheDutchTarantula</title>
   <link rel="stylesheet" href="css/style.css">
   <script src="js/filter.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body>
<!---navigation--->
<?php
include_once('includes/header.php');
include_once('includes/footer.php');
?>
<!---carousel--->
<section>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="img/regalis.jpg" alt="First slide">
          <div class="carousel-caption">
            <h5>Poecilotheria regalis</h5>
          </div>
    </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/goliathpurple.jpg" alt="Second slide">
              <div class="carousel-caption">
                <h5>Lasiodora parahybana</h5>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/metelica.jpg" alt="Third slide">
              <div class="carousel-caption">
                <h5>poecilotheria metallica</h5>
              </div>
            </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
</section>
<!---shop--->
<section id="shop">
  <div class="container">
    <h1>Categories</h1>
  <div class="row">
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
       <div class="containers">
         <div class="img-box">
           <input type="image" class="imgs"id="saveform" src="img/bulkspiders.jpg"  alt="img-responsive" />
             <div class="centered">BULK ORDER</div>
         </div>
       </div>
     </div>
   </div>
</div>
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
      <div class="containers">
        <div class="img-box">
          <input type="image" class="imgs"id="saveform" src="img/metelica.jpg"  alt="img-responsive" />
            <div class="centered">TARANTULAS</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
      <div class="containers">
        <div class="img-box">
          <input type="image" class="imgs"id="saveform" src="img/smithy2.jpg"  alt="img-responsive" />
            <div class="centered">OTHERS</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
      <div class="containers">
        <div class="img-box">
          <input type="image" class="imgs"id="saveform" src="img/goliathpurple.jpg"  alt="img-responsive" />
            <div class="centered">FEMALES</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
      <div class="containers">
        <div class="img-box">
          <input type="image" class="imgs"id="saveform" src="img/regalis.jpg"  alt="img-responsive" />
            <div class="centered">MALES</div>
         </div>
       </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="single-price">
    <div class="price-head">
      <div class="containers">
        <div class="img-box">
          <input type="image" class="imgs"id="saveform" src="img/COMMUNAL.jpg"  alt="img-responsive" />
            <div class="centered">COMMUNAL</div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<!---filter--->
<section id="promo">
  <div>
    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('poecilotheria')"> poecilotheria</button>
      <button class="btn" onclick="filterSelection('Brachmypelma')"> Brachmypelma</button>
      <button class="btn" onclick="filterSelection('Pterinochilus')"> Pterinochilus</button>
    </div>
  <div class="row">
    <div class="column Brachmypelma">
      <div class="content">
        <img src="img/bulkspiders.jpg" alt="Mountains" style="width:100%">
      </div>
    </div>
    <div class="column poecilotheria">
      <div class="content">
        <img src="img/COMMUNAL.jpg" alt="Lights" style="width:100%">
      </div>
    </div>
    <div class="column Pterinochilus">
      <div class="content">
        <img src="img/goliathpurple.jpg" alt="Nature" style="width:100%">
      </div>
    </div>
    <div class="column Pterinochilus">
      <div class="content">
        <img src="img/goliathpurple.jpg" alt="Car" style="width:100%">
      </div>
    </div>
    <div class="column Brachmypelma">
      <div class="content">
        <img src="img/bulkspiders.jpg" alt="Car" style="width:100%">
      </div>
    </div>
    <div class="column poecilotheria">
      <div class="content">
        <img src="img/regalis.jpg" alt="Car" style="width:100%">
      </div>
    </div>
    <div class="column Brachmypelma">
      <div class="content">
        <img src="img/bulkspiders.jpg" alt="Car" style="width:100%">
      </div>
    </div>
    <div class="column Pterinochilus">
      <div class="content">
        <img src="img/goliathpurple.jpg" alt="Car" style="width:100%">
      </div>
    </div>
    <div class="column poecilotheria">
      <div class="content">
        <img src="img/metelica.jpg" alt="Car" style="width:100%">
      </div>
    </div>
  </div>
</div>
</section>
<!---comments--->
<section id="comment">
<div class="container">
	<div class="row">
    <div class="commentform">
      <label for="name">Name: </label>
      <input type="text" placeholder="Name" name="" value="">
      <br>
      <label for="name">Message: </label>
      <textarea rows="4" cols="100" placeholder="What is on your mind"></textarea><br>
      <input type="submit" name="verzenden" value="verzenden">
    </div>
		 <div class="media comment-box">
            <div class="media-left">
                <a href="#">
                    <img class="img-responsive user-photo" src="img/personicon.png">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Spiderman</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="img-responsive user-photo" src="img/personicon.png">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Spiderwoman</h4>
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</section>
<!---footer--->
<section id="footer">
  <div class="container">
    <h1>Here is the footer</h1>
    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
  </div>
</section>
</body>
</html>
