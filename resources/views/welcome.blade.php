<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filamart</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
            <!DOCTYPE html>
            <html lang="pt-BR">
              <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <meta
                  name="description"
                  content="landing page sobre produto que eu amo e desde a infancia e não largo até hoje."
                />
                <!--=============== REMIX DE ICONS ===============-->
                <link
                  href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
                  rel="stylesheet"
                />
                <!--=============== FAVICONS ===============-->
                <link
                  rel="choco2-touch-icon"
                  sizes="180x180"
                  href="./assets/img/choco2-touch-icon.png"
                />
                <link
                  rel="icon"
                  type="image/png"
                  sizes="32x32"
                  href="./assets/img/favicon-32x32.png"
                />
                <link
                  rel="icon"
                  type="image/png"
                  sizes="16x16"
                  href="./assets/img/favicon-16x16.png"
                />
                <link rel="manifest" href="./assets/img/site.webmanifest" />
                <link
                  rel="mask-icon"
                  href="./assets/img/safari-pinned-tab.svg"
                  color="#5bbad5"
                />
                <meta name="msapplication-TileColor" content="#da532c" />
                <meta name="theme-color" content="#ffffff" />
                <!--=============== CSS ===============-->
                <link rel="stylesheet" href="{{url('css/styles.css')}}" />
            
                <title>Toddynho</title>
              </head>
              <body>
                <!--==================== HEADER ====================-->
                <header class="header" id="header">
                  <nav class="nav container">
                    <a href="https://github.com/souzx17" class="nav__logo"> Fila<span>mart</span> </a>
                  </nav>
                </header>
            
                <main class="main">
                  <!--==================== HOME ====================-->
                  <section class="home">
                    <div class="home__shape-small"></div>
                    <div class="home__shape-big"></div>
            
                    <div class="home__container container" style="height: 100vh">
                      <div class="home__data">
                        <h1 class="home__title">
                          Fila
                          <span>Mart</span>
                        </h1>
                        <p class="home__description">
                            Platform belanja online terpercaya<br>
                            yang menyediakan berbagai macam<br>
                            produk berkualitas dari berbagai<br>
                            kategori<br/>
                          <br />
                        </p>
                        <a href="{{ route('login') }}" class="home__button"> Ayo Mulai </a>

                      </div>
            
                      <div class="home__images">
                        <img
                          src="{{url('img/chocosplash.png') }}"
                          alt="choco splash"
                          class="home__csplash"
                        />
            
                        <div class="home__toddynho-animate">
                          <img
                            src="{{url('img/toddynho.png')}}"
                            alt="toddynho image"
                            class="home__toddynho"
                          />
                        </div>
            
                        <img
                          src="{{url('img/euamo.png')}}"
                          alt="euamo image"
                          class="home__euamo"
                        />
                        <img
                          src="{{url('img/choco2.png')}}"
                          alt="choco2 image"
                          class="home__choco2"
                        />
            
                        <div>
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                          <img
                            src="{{url('img/emoji.png')}}"
                            alt="emoji image"
                            class="home__emoji"
                          />
                        </div>
                      </div>
                    </div>
                    <!--=============== FOOTER ===============-->
                  </section>
                </main>
            
                <!--=============== GSAP ===============-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
                <!--=============== MAIN JS ===============-->
                <script src="{{ url('js/main.js') }}"></script>
              </body>
            </html>
        </div>
    </body>
</html>
