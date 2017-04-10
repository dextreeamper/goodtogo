<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Document</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

        @yield('header')

    </head>
    <body>

    <div class="wrapper">

      <div class="blog-masthead">
          <div class="container">
              @yield('blog-masthead')
          </div>
      </div>

      <div class="navigation">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="Goodtogo">
              </a>
            </div>
            <div id="navbar-nav" class="navbar-collapse collapse">
              @yield('navigation')
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </nav>
      </div>

      <header class="page-header show">
        <figure class="responsive" data-media240="/images/homepage-background-dimgray-new.jpg" data-media481="/images/homepage-background-dimgray-new.jpg" data-media769="/images/homepage-background-dimgray-new.jpg" data-media1025="/images/homepage-background-dimgray-new.jpg" data-title="Valentines">
              
        <img src="/images/homepage-background-dimgray-new.jpg">

        </figure>
        <hgroup>

          <h1 class="text-uppercase">fresh. fast. convenient.</h1>
          <p>Your favorite restaurant, delivered to you.</p>

          <form class="form-inline">
          <p>Where are you? <span>Im staying at hotel.</span></p>
            <label class="sr-only" for="inlineFormInput">Street Address, city, state</label>
            <div class="input-group address mb-2 mr-sm-2 mb-sm-0">
              <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Street Address, city, state">
            </div>
            <label class="sr-only" for="inlineFormInputGroup">Zip Code</label>
            <div class="input-group zipcode mb-2 mr-sm-2 mb-sm-0">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Zip Code">
            </div>
            <button type="submit" class="btn btn-primary">Find Food</button>
          </form>
          
        </hgroup>
      </header>

      <section class="section one-goodtogo">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="title text-left"><strong>Good To Go</strong> delivers and caters from over 20 of Guam's most popular restaurants!</h2>
                  </div>
                  <div class="col-md-6">
                    <h2 class="title text-callus">Call us Today! <strong>300-7890</strong></h2>
                  </div>
                </div>
            </div>
      </section>

      <section class="section two-restaurants">
            <div class="container">
              <div class="row first">
                  <div class="col-md-3">
                    <img class="img-responsive" src="/images/thumbnail-images.jpg" >
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive" src="/images/four-new.jpg" >
                  </div>
                  <div class="col-md-3">
                    <img class="img-responsive" src="/images/thumbnail-images.jpg" >
                  </div>
              </div>

              <div class="row second">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/images/four-new.jpg" >
                  </div>
                  <div class="col-md-3">
                    <img class="img-responsive" src="/images/thumbnail-images.jpg" >
                  </div>
                  <div class="col-md-3">
                    <img class="img-responsive" src="/images/thumbnail-images.jpg" >
                  </div>
              </div>
            </div>
      </section>

      <section class="section three-branches">
          <div class="container">
            <div class="row">
              <div class="col-md-4 border">
                <span class="border"></span>
              </div>
              <div class="col-md-4">
                <h1 class="title text-center"><strong>How do I order?</strong></h1>
                <p class="text-center">Get your favourite food in 4 simple steps</p>
              </div>
              <div class="col-md-4 border">
                <span class="border"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <img src="/images/circle-thumbnail.png" class="img-responsive text-center">
                <h4 class="title text-center">1. Select a restaurant</h4>
                <p class="text-center">Find restaurants that deliver to you by entering your address</p>
              </div>
              <div class="col-md-4">
                <img src="/images/circle-thumbnail.png" class="img-responsive">
                <h4 class="title text-center">2. Order now or call 300-7890</h4>
                <p class="text-center">Pay fast & secure online or no delivery</p>
              </div>
              <div class="col-md-4">
                <img src="/images/circle-thumbnail.png" class="img-responsive">
                <h4 class="title text-center">3. Relax, you're GOOD TO GO!</h4>
                <p class="text-center">Food is prepared & delivered to your door</p>
              </div>
            </div>

            <div class="row">
              <div class="delivery-location">
                <img class="img-responsive" src="/images/deliver-location.png">
              </div>
            </div>
          </div>
      </section>

      <section class="section four-favorite-restaurant">
        <div class="container">
          <div class="row">
            <div class="col-xs-6">
              <img class="img-responsive" src="/images/favorite-restaurant-image.png">
            </div>
            <div class="col-xs-6">
              <h1 class="title text-left"><strong>Your Favorite restaurant delivered to you!</strong></h1>
              <p class="text-justify">
                Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.  
                </br></br>
                Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat. 
                </br></br>
                Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. 
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section five-newsletter">
        <div class="container">
          <div class="row">
            <h1 class="title text-center"><strong>Subscribe to our newsletter:</strong></h1>
            <p class="text-center">
              <i class="ion-checkmark-circled"></i> Don't miss out on our great offers. 
              <i class="ion-checkmark-circled"></i> Receives deals from all our top restaurants via e-mail
            </p>
            <form class="form-inline">
                <div class="input-group address mb-2 mr-sm-2 mb-sm-0">
                  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Enter your e-mail">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="container">
          <div class="row">

            <div class="span10 offset1">
              <div class="social-icons">
                <h1 class="text-center">Get in touch today!</h1>
                </br>
                <ul class="text-center">
                  <li class="fb"><a href="#"><i class="ion-social-facebook"></i></a></li>
                  <li class="insta"><a href="#"><i class="ion-social-instagram"></i></a></li>
                  <li class="twitt"><a href="#"><i class="ion-social-twitter"></i></a></li>
                </ul>
              </div>
            </div>

            <div class="footer-content text-center">
              </br>
              <span>Home | Restaurants | How Do I Order | Gift Certificate | About us | Contact us | Comments | Faq | Privacy Policy | Site Map</span></br></br>
              <span>Terms and Conditions, Privacy Policy  ©Copyright 2017 is registered trademark Good To Go! Singapore</span>
            </div>
            
          </div>
        </div>
      </footer>

      @yield('footer')

    </div>

    </body>
</html>