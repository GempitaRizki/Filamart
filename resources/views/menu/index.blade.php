
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filament - Simple Shopping Journey</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css linkf
  -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->





  <main>
    <article>


      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="cart"></ion-icon>

              <span>Shop Smarter</span>
            </p>

            <h2 class="h1 hero-title">"Select, Confirm, Complete"</h2>

            <p class="hero-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
            </p>

            <button class="btn">Start Transaction</button>

          </div>

          <figure class="hero-banner">
            <img src="{{url('images/fruit1.png')}}" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="{{url('images/clotes.jpg')}}" alt="House interior">

            <img src="{{url('images/shirt.jpg')}}" alt="House interior" class="abs-img">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Shopping Made Simple - Filamart</h2>

            <p class="about-text">
              We are dedicated to delivering a seamless shopping experience for our valued customers. With a wide selection of high-quality products, competitive prices, and user-friendly interface, we aim to make your online shopping journey enjoyable and convenient.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="cube-outline"></ion-icon>
                </div>

                <p class="about-item-text">Extensive Product Selection</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <p class="about-item-text">Easy-to-Use Interface</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <p class="about-item-text">Secure Transactions</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="headset-outline"></ion-icon>
                </div>

                <p class="about-item-text">Dedicated Customer Support</p>
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
                  <img src="{{url('images/service-1.png')}}" alt="Service icon">
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
                  <img src="{{url('images/service-2.png')}}" alt="Service icon">
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
                  <img src="{{url('images/service-3.png')}}" alt="Service icon">
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

          <p class="section-subtitle">Product</p>

          <h2 class="h2 section-title">Top Picks</h2>

          <ul class="property-list has-scrollbar">

            <li>
              <div class="property-card">
                @foreach ($products as $product)

                <figure class="card-banner">

                  <a href="#">
                    <img src="{{asset('storage/' .$product->image)}}" alt="New Apartment Nice View" class="w-100">
                  </a>

                  {{-- <div class="card-badge green">For Rent</div> --}}

                  <div class="banner-actions">
                    <a class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Indonesia</address>
                    </a>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>
                  </div>

                </figure>
                <div class="card-content">
                  <div class="card-price">
                      <strong>Rp. {{ number_format($product->price, 0, ',', '.') }}</strong>
                  </div>

                  <h3 class="h3 card-title">
                    <a >{{$product->name}}</a>
                  </h3>

                  <p class="card-text">
                    {{ $product->description }}
                  </p>
                </div>
              </div>
              @endforeach
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
                  <img src="{{url('images/blog-2.jpg')}}" alt="Recent Commercial Real Estate Transactions" class="w-100">
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
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo-light.png" alt="Homeverse logo">
          </a>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.
          </p>

          <ul class="contact-list">

            <li>
              <a href="#" class="contact-link">
                <ion-icon name="location-outline"></ion-icon>

                <address>Brooklyn, New York, United States</address>
              </a>
            </li>

            <li>
              <a href="tel:+0123456789" class="contact-link">
                <ion-icon name="call-outline"></ion-icon>

                <span>+0123-456789</span>
              </a>
            </li>

            <li>
              <a href="mailto:contact@homeverse.com" class="contact-link">
                <ion-icon name="mail-outline"></ion-icon>

                <span>contact@homeverse.com</span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Company</p>
            </li>

            <li>
              <a href="#" class="footer-link">About</a>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="#" class="footer-link">All Products</a>
            </li>

            <li>
              <a href="#" class="footer-link">Locations Map</a>
            </li>

            <li>
              <a href="#" class="footer-link">FAQ</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact us</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link">Order tracking</a>
            </li>

            <li>
              <a href="#" class="footer-link">Wish List</a>
            </li>

            <li>
              <a href="#" class="footer-link">Login</a>
            </li>

            <li>
              <a href="#" class="footer-link">My account</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Promotional Offers</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Customer Care</p>
            </li>

            <li>
              <a href="#" class="footer-link">Login</a>
            </li>

            <li>
              <a href="#" class="footer-link">My account</a>
            </li>

            <li>
              <a href="#" class="footer-link">Wish List</a>
            </li>

            <li>
              <a href="#" class="footer-link">Order tracking</a>
            </li>

            <li>
              <a href="#" class="footer-link">FAQ</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact us</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="{{url('js/script.js')}}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>