<?php 
  $title = "Complex Graphhicx | Blog | stay updated with what is happening around the web with our feeds";  
  include('Components/header.inc.php'); ?>

<?php
  require_once 'Components/login.php';
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) die("Fatal Error");
?>
  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="blog-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                  <h2 class="title2"></h2>
                </div>
                <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                  <h2 class="title3"></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/1.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#">Why is online presence good for your company.</a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/2.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#">How to register a domain and get E-mails for your company. </a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/3.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#">Cooporate Identity and why you should creare a culture for your brand. </a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="assets/img/blog/4.jpg" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> Is social media marketing realy good for my company? </a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>categories</h4>
                  <ul>
                    <li>
                      <a href="#">Web security</a>
                    </li>
                    <li>
                      <a href="#">Internet</a>
                    </li>
                    <li>
                      <a href="#">Graphics designs</a>
                    </li>
                    <li>
                      <a href="#">Web designs</a>
                    </li>
                    <li>
                      <a href="#">S.E.O </a>
                    </li>
                    <li>
                      <a href="#">content creation</a>
                    </li>
                    <li>
                      <a href="#">Staying safe on the web</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                    <li>
                      <a href="#">Web security</a>
                    </li>
                    <li>
                      <a href="#">Internet</a>
                    </li>
                    <li>
                      <a href="#">Graphics designs</a>
                    </li>
                    <li>
                      <a href="#">Web designs</a>
                    </li>
                    <li>
                      <a href="#">S.E.O </a>
                    </li>
                    <li>
                      <a href="#">content creation</a>
                    </li>
                    <li>
                      <a href="#">Staying safe on the web</a>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog  -->

        
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="blog-text">
                    <h4>
                      <a href="" class="title"> Complex graphicx blog posts </a>
                    </h4>
                    <p class="post">
                        Like any other tech enthusist we had to keep an informtative blog to help raise awenesse 
                        in community while tying to educate and guide where we can.
                    </p>
                  </div>
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/1.jpg" alt="blog-img" class="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="">11 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar date" ></i>2022-03-05 / 09:10:16
                    </span>
                  </div>
                </div>
              </div>
              
             
              
              <!-- End single blog 
              <div class="blog-pagination">
                <ul class="pagination">
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
                -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->


  <?php include('Components/footer.inc.php'); ?>