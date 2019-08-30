<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> i-Vidy </title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles-merged.css">
    <link rel="stylesheet" href="public/css/style.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="icon" type="image/png" href="public/images/lolo.png" />
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="uiCookies:FineOak">FineOak</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#" data-nav-section="welcome">Bienvenue</a></li>
            <li><a href="#" data-nav-section="specialties">Menu</a></li>
            <li><a href="#" data-nav-section="reservation">Réservation</a></li>
            <li><a href="#" data-nav-section="events">Evénements</a></li>
            <li><a href="#" data-nav-section="contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url(public/images/hero_bg_1.jpg)" class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Passez les commandes</h1>
                  <h3 class="secondary-heading">Chez nous</h3>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(public/images/hero_bg_2.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Nous livrons</h1>
                 <h3 class="secondary-heading">Pour vous</h3>
                </div>
              </div>
            </div>
          </div>
          
        </li>
        <li style="background-image: url(public/images/hero_bg_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Réservez vos tables</h1>
                  <h3 class="secondary-heading">En quelques clics</h3> 
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              
              <h1 class="secondary-heading">Qui sommes-nous?</h1>
              <span class="seperator">* * *</span>
            </div>
            <p>Voluptatibus quaerat laboriosam fugit non Ut consequatur animi est molestiae enim a voluptate totam natus modi debitis dicta impedit voluptatum quod sapiente illo saepe explicabo quisquam perferendis labore et illum suscipit</p>
           
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="public/images/public/images_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="public/images-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url(public/images/hero_bg_2.jpg);" data-stellar-background-ratio="0.5" data-section="specialties">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Menu</h2>
              <h3 class="secondary-heading">Nos plats</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- probootstrap-bg-white -->
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="probootstrap-cell-retro">
            <div class="half">

              <?php
              
              for($i=0; $i<$half_repas; $i++){
              ?>
                <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                  <div class="image" style="background-image: url(public/images/<?= $tab_repas[$i]["image"] ?>);">
                  </div>
                  <div class="text text-center">
                    <h3><?= $tab_repas[$i]["nom"] ?></h3>
                    <p class="price">Ar <?= $tab_repas[$i]["prix"] ?></p>
                    <a class="favorite styled" href="index.php?action=livrer&amp;id_repas=<?= $tab_repas[$i]["id_repas"] ?>">Livrer</a>
                    <a class="favorite styled" href="index.php?action=commander&amp;id_repas=<?= $tab_repas[$i]["id_repas"] ?>">Commander</a>
                  </div>
                </div>
              <?php
                  }
              ?>

            </div>
            <div class="half">

              <?php
              for($i=$half_repas; $i<$nbr_repas; $i++){
              ?>
                <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                  <div class="image" style="background-image: url(public/images/<?= $tab_repas[$i]["image"] ?>);">
                  </div>
                  <div class="text text-center">
                    <h3><?= $tab_repas[$i]["nom"] ?></h3>
                    <p class="price">Ar <?= $tab_repas[$i]["prix"] ?></p>
                    <a class="favorite styled" href="index.php?action=livrer&amp;id_repas=<?= $tab_repas[$i]["id_repas"] ?>">Livrer</a>
                    <a class="favorite styled" href="index.php?action=commander&amp;id_repas=<?= $tab_repas[$i]["id_repas"] ?>">Commander</a>
                  </div>
                </div>
              <?php
                  }
              ?>


            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url(public/images/hero_bg_5.jpg);"  data-stellar-background-ratio="0.5" data-section="reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Booking</h2>
              <h3 class="secondary-heading">Reserver une table</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <form method="post" class="probootstrap-form">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="people">Nombre de personnes</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                      <select name="people" id="people" class="form-control">
                        <option value="#">1 personne</option>
                        <option value="#">2 personnes</option>
                        <option value="#">3 personnes</option>
                        <option value="#">4+ personnes</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="date">Date</label>
                    <div class="form-field">
                      <i class="icon icon-calendar"></i>
                      <input type="text" id="date" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="time">Heure</label>
                    <div class="form-field">
                      <i class="icon icon-clock"></i>
                      <input type="text" id="time" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END row -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Nom</label>
                    <div class="form-field">
                      <i class="icon icon-user2"></i>
                      <input type="text" id="name" class="form-control" placeholder="Votre nom complet">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="form-field">
                      <i class="icon icon-mail"></i>
                      <input type="text" id="email" class="form-control" placeholder="Votre adresse email">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <div class="form-field">
                      <i class="icon icon-phone"></i>
                      <input type="text" id="phone" class="form-control" placeholder="Votre numéro de téléphone">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <input type="submit" name="submit" id="submit" value="Approuver" class="btn btn-lg btn-primary btn-block">
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url(public/images/hero_bg_4.jpg);"  data-stellar-background-ratio="0.5" data-section="events">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Upcoming</h2>
              <h3 class="secondary-heading">Our Events</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="public/images/public/images_square_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="public/images/public/images_square_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="public/images/public/images_square_4.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="date">June 29, 2017</span>
                <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Contact</h1>
              <h3 class="secondary-heading">Discutons</h3>
            </div>
            <p>Si nos servives vous ont plu, dites le nous. Si vous avez des remarques ou des propositions, envoyez le nous. Merci de votre coopération.</p>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="c_name">Votre nom</label>
                <div class="form-field">
                  <input type="text" id="c_name" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_email">Votre adresse email</label>
                <div class="form-field">
                  <input type="text" id="c_email" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_message">Votre message</label>
                <div class="form-field">
                  <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="c_submit" id="c_submit" value="Envoyer" class="btn btn-primary btn-lg">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Locations</h3>
              <div class="row">
                <div class="col-md-6">
                  <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
                </div>
                <div class="col-md-6">
                  <p> 198 West 21th Street, Suite 721 <br> New York NY 10016</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Open Hours</h3>
              <div class="row">
                <div class="col-md-4">
                  <p>Monday - Thursday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Friday - Sunday <br> 5:30pm - 10:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Available for Catering <br> Email or Call Us</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2017 <a href="https://uicookies.com/">uiCookies:Resto</a>. All Rights Reserved. Images by <a href="https://graphicburger.com/">GraphicBurger</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
          <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="public/js/scripts.min.js"></script>
    <script src="public/js/custom.min.js"></script>

  </body>
</html>