
<!--? Hero Start -->
<!-- <div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-70">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Hero End -->
<!--? Blog Area Start-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                <?php 
                    $date=0;
                    for($i=0;$i<count($liste);$i++) { ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                        
                            <img class="card-img rounded-0" height="350" width="50" src="<?php echo images_url_front($liste[$i]['Photo']) ?>" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="blog_details.html">
                                <h2 class="blog-head" style="color: #2d2d2d;"><a href="<?php echo site_url("fiche/".$liste[$i]['url']."-".$liste[$i]['id']) ?>"><?php echo $liste[$i]['Nom']; ?></a></h2>
                            </a>
                            <p><?php echo $liste[$i]['Description']; ?></p>
                            <!-- <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul> -->
                        </div>
                    </article>
                <?php } ?>

                    
                    <!-- -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Search</button>
                        </form>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                        <?php for($i=0;$i<count($listeCateg);$i++) { ?>
                        <ul class="list cat-list">
                            <li>
                                <a href="<?php echo site_url("Contenu_Controller/Liste_Contenu?id=".$listeCateg[$i]['id']) ?>" class="d-flex">
                                    <p><?php echo $listeCateg[$i]['nom']; ?></p>
                                </a>
                            </li>
                        </ul>
                        <?php } ?>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        <div class="media post_item">
                            <img src="assets/img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="blog_details.html">
                                    <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>