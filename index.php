<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';
$result = getAllBlog();
?>


  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="home"></ion-icon>

              <span>Al-Tahleel Real Estate Brokerage</span>
            </p>

            <h2 class="h1 hero-title">Find Your Dream House By Us</h2>

            <p class="hero-text">
              Discover Your Dream Property with Al-Tahleel Real Estate Brokerage, Your Trusted Partner in Real Estate
            </p>

            <button class="btn">Make An Enquiry</button>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/mainlogo.svg" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner-1.png" alt="House interior">

            <img src="./assets/images/about-banner-2.jpg" alt="House interior" class="abs-img">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">The Leading Real Estate Rental Marketplace.</h2>

            <p class="about-text">
              Over 39,000 people work for us in more than 70 countries all over the This breadth of global coverage,
              combined with
              specialist services
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <p class="about-item-text">Smart Home Design</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="leaf-outline"></ion-icon>
                </div>

                <p class="about-item-text">Beautiful Scene Around</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="wine-outline"></ion-icon>
                </div>

                <p class="about-item-text">Exceptional Lifestyle</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <p class="about-item-text">Complete 24/7 Security</p>
              </li>

            </ul>

            <p class="callout">
              "Enimad minim veniam quis nostrud exercitation
              llamco laboris. Lorem ipsum dolor sit amet"
            </p>

            <a href="#service" class="btn">Our Services</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" id="service">
        <div class="container">

          <p class="section-subtitle">Our Services</p>

          <h2 class="h2 section-title">Our Main Focus</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-1.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Buy a home</a>
                </h3>

                <p class="card-text">
                  over 1 million+ homes for sale available on the website, we can match you with a house you will want
                  to call home.
                </p>

                <a href="#" class="card-link">
                  <span>Find A Home</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-2.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Rent a home</a>
                </h3>

                <p class="card-text">
                  over 1 million+ homes for sale available on the website, we can match you with a house you will want
                  to call home.
                </p>

                <a href="#" class="card-link">
                  <span>Find A Home</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-3.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Sell a home</a>
                </h3>

                <p class="card-text">
                  over 1 million+ homes for sale available on the website, we can match you with a house you will want
                  to call home.
                </p>

                <a href="#" class="card-link">
                  <span>Find A Home</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PROPERTY
      -->

      <section class="property" id="property">
        <div class="container">

          <p class="section-subtitle">Properties</p>

          <h2 class="h2 section-title">Featured Listings</h2>

          <ul class="property-list has-scrollbar">

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/property-1.jpg" alt="New Apartment Nice View" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Belmont Gardens, Chicago</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>$34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">New Apartment Nice View</a>
                  </h3>

                  <p class="card-text">
                    Beautiful Huge 1 Family House In Heart Of Westbury. Newly Renovated With New Wood
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="./assets/images/author.jpg" alt="William Seklo" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">William Seklo</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/property-2.jpg" alt="Modern Apartments" class="w-100">
                  </a>

                  <div class="card-badge orange">For Sales</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Belmont Gardens, Chicago</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>$34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Modern Apartments</a>
                  </h3>

                  <p class="card-text">
                    Beautiful Huge 1 Family House In Heart Of Westbury. Newly Renovated With New Wood
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="./assets/images/author.jpg" alt="William Seklo" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">William Seklo</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/property-3.jpg" alt="Comfortable Apartment" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Belmont Gardens, Chicago</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>$34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Comfortable Apartment</a>
                  </h3>

                  <p class="card-text">
                    Beautiful Huge 1 Family House In Heart Of Westbury. Newly Renovated With New Wood
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="./assets/images/author.jpg" alt="William Seklo" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">William Seklo</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/property-4.png" alt="Luxury villa in Rego Park" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Belmont Gardens, Chicago</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>$34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Luxury villa in Rego Park</a>
                  </h3>

                  <p class="card-text">
                    Beautiful Huge 1 Family House In Heart Of Westbury. Newly Renovated With New Wood
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="./assets/images/author.jpg" alt="William Seklo" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">William Seklo</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="features">
        <div class="container">

          <p class="section-subtitle">Our Aminities</p>

          <h2 class="h2 section-title">Building Aminities</h2>

          <ul class="features-list">

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </div>

                <h3 class="card-title">Parking Space</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="water-outline"></ion-icon>
                </div>

                <h3 class="card-title">Swimming Pool</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <h3 class="card-title">Private Security</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="fitness-outline"></ion-icon>
                </div>

                <h3 class="card-title">Medical Center</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="library-outline"></ion-icon>
                </div>

                <h3 class="card-title">Library Area</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="bed-outline"></ion-icon>
                </div>

                <h3 class="card-title">King Size Beds</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <h3 class="card-title">Smart Homes</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="football-outline"></ion-icon>
                </div>

                <h3 class="card-title">Kid’s Playland</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="blog" id="blog">
        <div class="container">

          <p class="section-subtitle">News & Blogs</p>

          <h2 class="h2 section-title">Leatest News Feeds</h2>

          <ul class="blog-list has-scrollbar">
            <?php
              foreach ($result as $row){  ?>
                <li>
                <div class="blog-card">

<figure class="card-banner">
  <img src=<?= $row['topic_image']?> alt="The Most Inspiring Interior Design Of 2021" class="w-100">
</figure>

<div class="blog-content">

  <div class="blog-content-top">

    <ul class="card-meta-list">

      <li>
        <a href="#" class="card-meta-link">
          <ion-icon name="person"></ion-icon>

          <span>by: <?= $row['user_name']?></span>
        </a>
      </li>

      <li>
        <a href="#" class="card-meta-link">
          <ion-icon name="pricetags"></ion-icon>

          <span><?= $row['topic_name']?></span>
        </a>
      </li>

    </ul>

    <h3 class="h3 blog-title">
      <a href="#"><?= $row['subject']?></a>
    </h3>

  </div>

  <div class="blog-content-bottom">
    <div class="publish-date">
      <ion-icon name="calendar"></ion-icon>

      <time datetime="2022-27-04"><?= $row['created_date']?></time>
    </div>

    <a href=".\blog.php?id=<?=$row["blog_id"]?>" class="read-more-btn">Read More</a>
  </div>

</div>

</div>
                </li>
                <?php
              }
            ?>
            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-1.png" alt="The Most Inspiring Interior Design Of 2021" class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: Admin</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Interior</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">The Most Inspiring Interior Design Of 2021</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2022-27-04">Apr 27, 2022</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-2.jpg" alt="Recent Commercial Real Estate Transactions" class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: Admin</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Estate</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">Recent Commercial Real Estate Transactions</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2022-27-04">Apr 27, 2022</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-3.jpg" alt="Renovating a Living Room? Experts Share Their Secrets"
                    class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: Admin</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Room</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">Renovating a Living Room? Experts Share Their Secrets</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2022-27-04">Apr 27, 2022</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="cta-card">
            <div class="card-content">
              <h2 class="h2 card-title">Looking for a dream home?</h2>

              <p class="card-text">We can help you realize your dream of a new home</p>
            </div>

            <button class="btn cta-btn">
              <span>Explore Properties</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <?php
require_once './template/footer.php';
?>