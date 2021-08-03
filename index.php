<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Primland - Resort Management System</title>
</head>
<body>
    <div class="modal" id="modal">
        <div class="modal_content">
            <a href="#" class="modal_close">X</a>
            <ul class="navigation_list">
                <li class="navigation_item"><a href="aboutus.php" class="navigation_link">About Primland</a></li>
                <li class="navigation_item"><a href="aboutus.html" class="navigation_link">About Us</a></li>
                <li class="navigation_item"><a href="Gallery.html" class="navigation_link">Gallery</a></li>
                <li class="navigation_item"><a href="AdminLogin.php" class="navigation_link">Admin Login</a></li>
            </ul>
        </div>
    </div>

    <section id="title">
   
        <!-- Nav Bar -->
      <div class="container-fluid">
         <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#section-about">About</a>
                <a class="nav-link" href="#section-features">Features</a>
                <a class="nav-link" href="#section-rooms">Pricing</a>
                </div>
            </div>
             <a class="nav-link my-2 my-sm-0 menubtn" href="#modal">Menu</a>
        </nav>
        
          <div class="container-intro">
              <h1 class="heading-primary">
                  <span class="heading-primary-main">Primland</span>
                  <span class="heading-primary-sub">where life happen</span>
              </h1>
              <a href="checkpage.php" class="btn btn-light btn-book">Book Now</a>
          </div>
           
      </div>
    </section>

   <section id="section-about">
            <div class="u-center-text">
                <h2 class="heading-secondary">Exciting Place for Amazing Peoples</h2>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <h3 class="heading-tertiary"> You're Going to fall in Love </h3>
                    <p class="paragraph">
                        Primland is an integrated resort fronting Heidelberg in Germany, owned by the Las Vegas Sands
                        corporation. At its opening in 2010, it was billed as the world's most expensive standalone casino
                        property at S$8 billion, including the land cost. The resort, designed by Moshe Safdie, includes a
                        2,561-room hotel, a 120,000-square-metre.
                    </p>

                    <h3 class="heading-tertiary"> Live Adventure like you never have before </h3>
                    <p class="paragraph">
                        Research scientists are the primary audience for the journal, but summaries and accompanying
                        articles are intended to make many of the most important.
                    </p>
                    <a href="aboutus.php" class="btn-text"> Learn More &rarr;</a>
              </div>
              <div class="col-lg-6">
                  <img src="images/nat2.jpg" alt="Photo 2" class="composition_photo composition_photo-p2" />
                  <img src="images/nat3.jpg" alt="Photo 3" class="composition_photo composition_photo-p3" />
                </div>
            </div>
   </section>

    <section id="section-features">
        <div class="con-fea">
            <div class="row ">
                <div class="col-lg">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary">Explore the World</h3>
                        <p class="feature-box__text">
                            16 independent Cottages and suites set on the outskirts of the magnificent Ranthambore National Park. Your ideal escape from city life.
                        </p>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-compass"></i>
                        <h3 class="heading-tertiary">India's Finest Collection Of Luxury Boutique Experiences</h3>
                        <p class="feature-box__text">
                            Space and privacy located in calm and peaceful surroundings close to native is what the Tree of Life offers.
                            Your ideal getaway...
                        </p>
                    </div></div>
                <div class="col-lg">
                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary">Go back to the days of the Raj</h3>
                        <p class="feature-box__text">
                            A 40 acre British Colonial Estate built in 1862 set inside the Binsar Wildlife Sanctuary. 11 tastefully done rooms and a whole bouquet of guided nature treks and walks available through the wildlife sanctuary.
                        </p>
                    </div>
                </div>
                <div class="col-lg">
                     <div class="feature-box">
                        <i class="feature-box__icon icon-basic-heart"></i>
                        <h3 class="heading-tertiary">Find a Way</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis nihil ipsum maxime sequi, ex beatae ad necessitatibus veniam rem obcaecati aut quae facilis quaerat eum. Id perferendis odio tenetur non!
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
       
    <section id="section-rooms">
        <div class="u-center-text">
            <h2 class="heading-secondary">Rooms which we offer</h2>
        </div>
        <div class="row">
              <div class="col-lg-3">
               <div class="card" style="width: 22rem;">
                    <img src="images/deluxcard.jpg" class="card-img-top" alt="Delux Room">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">The simple yet eligant room</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">○ 39 square meter room</li>
                        <li class="list-group-item">○ Exclusive access to skypark swimming pool</li>
                        <li class="list-group-item">○ Entry to award-winning Banyan Tree Fitness Club</li>
                        <li class="list-group-item">○ Complimentary Airport Shuttle Bus to Hotel</li>
                        <li class="list-group-item">○ Complimentary high-speed internet access</li>
                    </ul>
                    <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
                </div>
              </div>
             <div class="col-lg-3">
               <div class="card" style="width: 22rem;">
                    <img src="images/premier.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Premier Room</h5>
                        <p class="card-text">To live the luxrious life</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">○ 47-square meter room</li>
                        <li class="list-group-item">○ Exclusive access to Sands SkyPark Infinity Pool</li>
                        <li class="list-group-item">○ Entry to award-winning Banyan Tree Fitness Club</li>
                        <li class="list-group-item">○ Complimentary Airport Shuttle Bus to Hotel</li>
                        <li class="list-group-item">○ Complimentary high-speed internet access</li>
                    </ul>
                    <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
                </div>
              </div>
              <div class="col-lg-3">
               <div class="card" style="width: 22rem;">
                    <img src="images/clubroom.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Club Room</h5>
                        <p class="card-text">Experience the royal living</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">○ 62-square meter room</li>
                        <li class="list-group-item">○ Complimentary breakfast at The Club at Marina Bay Sands</li>
                        <li class="list-group-item">○ Exclusive access to Sands Skypark Infinity Pool</li>
                        <li class="list-group-item">○ Complimentary Airport Shuttle Bus to Hotel</li>
                        <li class="list-group-item">○ Entry to award-winning Banyan Tree Fitness Club</li>
                    </ul>
                    <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
                </div>
              </div>
        </div>
    </section>

    <footer class="mfooter">
        <div class="con-footer">
            <p>&copy Copyright 2020</p>
            <p>A project by  Sahil Suvarna</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>