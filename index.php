<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Books Resell</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="./stye.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />

 

  </head>

  <body>

    <header id="mu-header" class="" role="banner">
      <div class="container">
        <nav class="navbar navbar-default mu-navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Books Resell</a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav mu-menu navbar-right">
                <li><a href="index.php">HOME</a></li>
                
                <li><a href="#mu-contact">CONTACT</a></li>
                <li><a href="register-book.php">SELL BOOKS</a></li>
                <li><a href="book_category.php">BUY BOOKS</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>



    <section id="mu-hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-sm-push-6">
            <div class="mu-hero-right">
              <img src="assets/images/first.jpg" alt="Ebook img" />
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-sm-pull-6">
            <div class="mu-hero-left">
              <h1>Perfect Landing Page To Resell Your Books</h1>
              <p>
                You learned you studied and you gained some knowledge and then
                your work done, You kept your books aside with no use, But now
                you can resell your old books and can help someone to buy those
                books with least and affordable price.
              </p>
              <?php
                session_start();
                if(!isset($_SESSION["user"])){
               ?>
              <a href="login.php" class="mu-primary-btn">Login Now!</a>
              <?php } ?>

              <?php
                if(isset($_SESSION["user"])){
               ?>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="display: inline-block;">
                <button name="signoff" type="submit" style="cursor: pointer;" class="mu-primary-btn">Login out!</button>
              </form>
              <?php } ?>


<?php
if(isset($_POST["signoff"])){
         session_destroy();
         header( "location: index.php", true, 303);
      }
?>

              <a href="#mu-pricing" class="mu-primary-btn">READ BOOKS</a>
              <span>*Avaliable in PDF, ePUB, Mobi & Kindle.</span>
            </div>
          </div>
        </div>
      </div>
    </section>


    <main role="main">
      <!-- Start Counter -->
      <section id="mu-counter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-counter-area">
                <div class="mu-counter-block">
                  <div class="row">
                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-single-counter">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        <div class="counter-value" data-count="2341">0</div>
                        <h5 class="mu-counter-name">Total Books</h5>
                      </div>
                    </div>
                    <!-- / Single Counter -->

                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-single-counter">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <div class="counter-value" data-count="23">0</div>
                        <h5 class="mu-counter-name">Categories</h5>
                      </div>
                    </div>
                    <!-- / Single Counter -->

                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-single-counter">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="counter-value" data-count="1055">0</div>
                        <h5 class="mu-counter-name">Active Readers</h5>
                      </div>
                    </div>
                    <!-- / Single Counter -->

                    <!-- Start Single Counter -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-single-counter">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="counter-value" data-count="10">0</div>
                        <h5 class="mu-counter-name">Best Sellers</h5>
                      </div>
                    </div>
                    <!-- / Single Counter -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counter -->

      <!-- Start Book Overview -->
      <section id="mu-book-overview">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-book-overview-area">
                <div class="mu-heading-area">
                  <h2 class="mu-heading-title">Book Reseller Overview</h2>
                  <span class="mu-header-dot"></span>
                  <p>
                    You can upload your information and start to sell your old
                    books which will add value to ones knowledge treasure
                  </p>
                </div>

                <!-- Start Book Overview Content -->
                <div class="mu-book-overview-content">
                  <div class="row">
                    <!-- Book Overview Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-area-chart" aria-hidden="true"></i>
                        </span>
                        <h4>Books Selling Analytics</h4>
                        <p>We have the highest selling books record</p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-cubes" aria-hidden="true"></i>
                        </span>
                        <h4>Multi Sellers</h4>
                        <p>
                          We have numerous verified sellers from where you can
                          buy books easily
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-modx" aria-hidden="true"></i>
                        </span>
                        <h4>Diffrent Categories</h4>
                        <p>
                          We are not limited to education we have variey of
                          books
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-files-o" aria-hidden="true"></i>
                        </span>
                        <h4>Books On Rents</h4>
                        <p>
                          We also provide books on rental system, dont worry if
                          you can't buy it, you can rent it
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- Book Overview Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        </span>
                        <h4>Books Pdf</h4>
                        <p>
                          Some books are available in pdf format you can also
                          buy it in pdf, if you want
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-language" aria-hidden="true"></i>
                        </span>
                        <h4>Multi Language Books</h4>
                        <p>
                          We belive that language should not be the problem of
                          knowledge gaining, so we support multi language books
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-gg" aria-hidden="true"></i>
                        </span>
                        <h4>Good Customer Support</h4>
                        <p>
                          We have great customer support which will solve all
                          your issues
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->

                    <!-- About Us Single Content -->
                    <div class="col-md-3 col-sm-6">
                      <div class="mu-book-overview-single">
                        <span class="mu-book-overview-icon-box">
                          <i class="fa fa-wpforms" aria-hidden="true"></i>
                        </span>
                        <h4>World Wide Avaliablity</h4>
                        <p>
                          We are available on world-wide, So you can buy books
                          from anywhere sitting in your comfort-zone
                        </p>
                      </div>
                    </div>
                    <!-- / Book Overview Single Content -->
                  </div>
                </div>
                <!-- End Book Overview Content -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Book Overview -->

      <!-- Start Video Review -->
      <section id="mu-video-review">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-video-review-area">
                <div class="mu-heading-area">
                  <h2 class="mu-heading-title">Check Out Our Video Review</h2>
                  <span class="mu-header-dot"></span>
                  <p>
                    This Video Show Us Why Books Are Our Best Friend, And Why
                    Everyone Should Read Books Frequently
                  </p>
                </div>

                <!-- Start Video Review Content -->
                <div class="mu-video-review-content">
                  <iframe
                    class="mu-video-iframe"
                    width="100%"
                    height="480"
                    src="https://www.youtube.com/embed/A-jzAyOO6d4"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
                <!-- End Video Review Content -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Video Review -->

      <!-- Start Author -->
      <section id="mu-author">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-author-area">
                <div class="mu-heading-area">
                  <h2 class="mu-heading-title">Some Quotes...</h2>
                  <span class="mu-header-dot"></span>
                </div>

                <!-- Start Author Content -->
                <div class="mu-author-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mu-author-image">
                        <img src="assets/images/kalam.jpg" alt="Author Image" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mu-author-info">
                        <h3>A. P. J. Abdul Kalam</h3>
                        <p>
                          "One Best Book is equal to Hundred Good Friends, One
                          Good Friend is equal to a Library"
                        </p>

                        <p>
                          Avul Pakir Jainulabdeen Abdul Kalam was an Indian
                          aerospace scientist and politician who served as the
                          11th President of India from 2002 to 2007. He was born
                          and raised in Rameswaram, Tamil Nadu and studied
                          physics and aerospace engineering.
                        </p>

                        <div class="mu-author-social">
                          <a href="https://www.facebook.com/Presidentkalam/"
                            ><i class="fa fa-facebook"></i
                          ></a>
                          <a href="https://twitter.com/APJAbdulkalam00"
                            ><i class="fa fa-twitter"></i
                          ></a>
                          <a
                            href="https://www.linkedin.com/in/apjabdulkalamfoundation/"
                            ><i class="fa fa-linkedin"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Author Content -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="mu-heading-area">
            <h2 class="mu-heading-title">Online Books Readings</h2>
            <span class="mu-header-dot"></span>
          </div>
        </div>
      </div>
      <!-- End Author -->
      <!-- Start Pricing -->
      <section id="mu-pricing">
        <div class="container">
          <div class="row">
            <div class="slider owl-carousel">
              <div class="card">
                <div class="img">
                  <img
                    src="assets/images/book_categories/fantacy.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Fantacy</div>
                  <p>This Book Belong To Fantacy Stories Novels</p>
                  <div class="btn">
                    <a href="../Pages/Fanatcy.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/adventure.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Adventure</div>
                  <p>This Book Belong To Adventure Stories Novels</p>
                  <div class="btn">
                    <a href="../Pages/Adventure.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/romance.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Romance</div>
                  <p>This Book Belong To Romance Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Romance.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/contemporary.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Contemporary</div>
                  <p>This Book Belong To Contemporary Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Cotemprary.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/dystopian.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Dystopian</div>
                  <p>This Book Belong To Dystopian Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Dystopian.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/mystery.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">mystery</div>
                  <p>This Book Belong To Mystery Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Mystery.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/horror.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Horror</div>
                  <p>This Book Belong To Horror Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Hrror.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/thriller.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Thriller</div>
                  <p>This Book Belong To Thriller Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Thriller.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/paranormal.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Paranormal</div>
                  <p>This Book Belong To Paranormal Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Paranoraml.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/historical.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Historical</div>
                  <p>This Book Belong To Historical Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Historical.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/science.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Science</div>
                  <p>This Book Belong To Romance Science Novels</p>
                  <div class="btn">
                    <a href="./Pages/Science.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/memoir.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Memoir</div>
                  <p>This Book Belong To Memoir Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Memoir.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/cooking.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Cooking</div>
                  <p>This Book Belong To Romance Cooking Novels</p>
                  <div class="btn">
                    <a href="./Pages/Cooking.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img src="./assets/images/book_categories/art.jpg" alt="" />
                </div>
                <div class="content">
                  <div class="title">Art</div>
                  <p>This Book Belong To Art Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Art.html"> <button>Read more</button></a>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/development.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Development</div>
                  <p>This Book Belong To Development Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Development.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/motivational.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Motivational</div>
                  <p>This Book Belong To Motivational Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Motivational.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/health.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Health</div>
                  <p>This Book Belong To Health Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Health.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="img">
                  <img
                    src="./assets/images/book_categories/humor.jpg"
                    alt=""
                  />
                </div>
                <div class="content">
                  <div class="title">Humor</div>
                  <p>This Book Belong To Humor Stories Novels</p>
                  <div class="btn">
                    <a href="./Pages/Humor.html">
                      <button>Read more</button></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br />
      <!-- End Pricing -->

      <!-- Start Testimonials -->
      <section id="mu-testimonials">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-testimonials-area">
                <div class="mu-heading-area">
                  <h2 class="mu-heading-title">What Our Readers Says</h2>
                  <span class="mu-header-dot"></span>
                </div>

                <div class="mu-testimonials-block">
                  <ul class="mu-testimonial-slide">
                    <li>
                      <p>
                        "Reading is One Of The Most Intresting Habbit I Love
                        About"
                      </p>
                      <img
                        class="mu-rt-img"
                        src="assets/images/temp1.jpg"
                        alt="img"
                      />
                      <h5 class="mu-rt-name">- Alice Boga</h5>
                      <span class="mu-rt-title">Public Speker</span>
                    </li>

                    <li>
                      <p>
                        "I Love To Read Novel While I Travel, It Give Me Peace
                        In Mind"
                      </p>
                      <img
                        class="mu-rt-img"
                        src="assets/images/temp3.jpg"
                        alt="img"
                      />
                      <h5 class="mu-rt-name">- Jhon Doe</h5>
                      <span class="mu-rt-title">Novelist</span>
                    </li>

                    <li>
                      <p>
                        "I belive in the fact is the books are the biggest
                        treasure that we have"
                      </p>
                      <img
                        class="mu-rt-img"
                        src="assets/images/temp2.jpg"
                        alt="img"
                      />
                      <h5 class="mu-rt-name">- Jessica Doe</h5>
                      <span class="mu-rt-title">Web Developer</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials -->

      <!-- Start Contact -->
      <section id="mu-contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-contact-area">
                <div class="mu-heading-area">
                  <h2 class="mu-heading-title">Drop Us A Message</h2>
                  <span class="mu-header-dot"></span>
                  <p>
                    If You Have Any Issues, You Can Message To Us, We Will Help
                    You
                  </p>
                </div>

                <!-- Start Contact Content -->
                <div class="mu-contact-content">
                  <div id="form-messages"></div>
                  <form
                    id="ajax-contact"
                    method="post"
                    action="mailer.php"
                    class="mu-contact-form"
                  >
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Name"
                        id="name"
                        name="name"
                        required
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Enter Email"
                        id="email"
                        name="email"
                        required
                      />
                    </div>
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        placeholder="Message"
                        id="message"
                        name="message"
                        required
                      ></textarea>
                    </div>
                    <button type="submit" class="mu-send-msg-btn">
                      <span>SUBMIT</span>
                    </button>
                  </form>
                </div>
                <!-- End Contact Content -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact -->

      <!-- Start Google Map -->
      <div class="container border border-primary mu-heading-area">
        <h2 class="mu-heading-title text-center">Our Location</h2>
        <span class="mu-header-dot"></span>
        <section id="mu-google-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.373283203034!2d83.82886371479482!3d19.047318657823286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c96658f8652ad%3A0x7dafcb1b8586f019!2sGIET%20University!5e0!3m2!1sen!2sin!4v1617627677211!5m2!1sen!2sin"
            width="100%"
            height="600"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </section>
      </div>

      <!-- End Google Map -->
    </main>

    <footer id="mu-footer" role="contentinfo">
      <div class="container">
        <div class="mu-footer-area">
          <div class="mu-social-media">
            <a href="https://www.facebook.com/gietuniversitygunupur/"
              ><i class="fa fa-facebook"></i
            ></a>
            <a href="https://twitter.com/gietuniversity"
              ><i class="fa fa-twitter"></i
            ></a>
            <a href="https://www.linkedin.com/school/gietuniversitygunupur"
              ><i class="fa fa-linkedin"></i
            ></a>
          </div>
          <p class="mu-copyright">
            &copy; Copyright
            <a rel="nofollow" href="http://booksresll.com">booksell.com</a>. All
            right reserved.
          </p>
        </div>
      </div>
    </footer>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/slick.min.js"></script>

    <script type="text/javascript" src="assets/js/counter.js"></script>

    <script type="text/javascript" src="assets/js/app.js"></script>

    <script type="text/javascript" src="assets/js/custom.js"></script>
  </body>
</html>
