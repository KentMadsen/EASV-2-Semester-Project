<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">

        <link rel="stylesheet" href="./css/style.css">

        <meta name="description"
              content="Skole opgaver for Esport Esbjerg"/>

        <meta name="keywords"
              content=""/>

        <meta name="author"
              content="Kent Madsen, Christian Krogsgaard, Niclas Neumann"/>

        <meta name="robots"
              content="index, follow"/>

        <meta charset="utf-8" />

        <title>
            Esport Esbjerg - Home
        </title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap"
              rel="stylesheet">

        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
              crossorigin="anonymous">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136109379-2">
        </script>

        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-136109379-2');
        </script>

    </head>

    <body>
        <div id="application"
             class="background">

          <header class="header-placeholder">
          </header>

            <header class="header-desktop" 
                    id="menu-navigation">
                <nav>
                    <ul>
                      <template v-for="item in navigationHeaderFirst">
                        <li class="header-menu-button highlight" 
                            v-if="item.active">

                          <a v-bind:href="item.url"
                             v-bind:hreflang="item.language">
                            {{ item.name }}
                          </a>
                        </li>

                        <li class="header-menu-button" v-else>
                            <a v-bind:href="item.url"
                               v-bind:hreflang="item.language">
                              {{ item.name }}
                            </a>
                          </li>
                      </template>

                    </ul>

                    <div>
                      <div class="header-logo-container">
                        <a href="#"
                           hreflang="en">

                          <!-- Icon -->
                          <div id="header-logo-desktop-area"
                               class="header-logo">

                          </div>
                        </a>
                      </div>
                    </div>

                    <ul>
                        <template v-for="item in navigationHeaderSecond">
                          <li class="header-menu-button highlight" 
                              v-if="item.active">
                              
                            <a v-bind:href="item.url"
                              v-bind:hreflang="item.language">
                                {{ item.name }}
                            </a>
                          </li>

                          <li class="header-menu-button" v-else>
                            <a v-bind:href="item.url"
                              v-bind:hreflang="item.language">
                              {{ item.name }}
                            </a>
                          </li>
                        </template>
                    </ul>
                </nav>
            </header>

            <main>
              
                <section>
                  <div id="front">
                    <div id="front-canvas">
                      <div id="front-canvas-space">

                        <div class="front-canvas-container top">
                          <img src="https://i.imgur.com/DAmiLDk.png"/>

                          <div class="front-canvas-container-info" hidden>
                            <div class="front-canvas-container-info-position">
                              <p>
                                text
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="front-canvas-container bottom">
                          <img src="https://i.imgur.com/4E92KGx.png"/>

                          <div class="front-canvas-container-info" hidden>
                            <div class="front-canvas-container-info-position">
                              <p>
                                text
                              </p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </section>

                <div class="page-decoration">
                  <div class="page-grid-1">
                    <div class="page-space">

                    </div>
                    
                    <div class="page-decoration-section-shift">
                      <div class="decoration-shift">

                      </div>
                    </div>
                    
                    <div class="page-space">

                    </div>
                  </div> 
                  
                </div>

                <section>
                  <!-- Træning -->
                  <div id="train"
                       class="boundary page-element">
                    <h2>
                      Hvad kan du træne hos os?
                    </h2>

                    <div class="cards">
                      <div class="game-card">
                        <!-- Image -->
                        <div class="game-card-image">
                          <img src="https://i.imgur.com/xFJXn0u.png" />
                        </div>

                        <!-- Content -->
                        <div class="game-card-content">
                          <div class="game-card-content-position">
                            <p>
                              Counter-Strike Global Offensive
                            </p>

                            <p>
                              <a href="#" hreflang="dk" title="">
                                  Læs mere
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="game-card">
                        <!-- Image -->
                        <div class="game-card-image">
                            <img src="https://i.imgur.com/UE89fl8.png" />
                        </div>

                        <!-- Content -->
                        <div class="game-card-content">
                          <div class="game-card-content-position">
                            <p>
                              Overwatch
                            </p>

                            <p>
                              <a href="#"
                                 hreflang="dk"
                                 title="">
                                  Læs mere
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>

                      <!-- pls. ignore -->
                      <div class="game-card">
                        <!-- Image -->
                        <div class="game-card-image">
                            <img src="https://i.imgur.com/UwagxmF.png" />
                        </div>

                        <!-- Content -->
                        <div class="game-card-content">
                          <div class="game-card-content-position">
                            <p>
                              Fortnite
                            </p>
                            <p>
                              <a href="#"
                                 hreflang="dk"
                                 title="">
                                Læs mere
                              </a>
                            </p>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>

                  <!-- About us -->
                  <div class="boundary page-element page-split index-about-us">
                      <h2>
                        Esport Esbjerg
                      </h2>

                      <p>
                        eSport Esbjerg er en folkeoplysende forening, som har til formål at skabe et samvær for unge, såvel som gamle der har en interesse indenfor gaming. Her kan man finde folk med samme interesse inden for de forskellige spil og få sat ansigt på de personer man spiller med. Dette skaber en mulighed for at være sammen omkring spil, men samtidig komme ud og lære nye folk at kende.
                      </p>

                  </div>

                  <!-- Nyheder -->
                  <div class="boundary page-element">
                      <h2>
                        Nyheder
                      </h2>

                      <div class="container-news">
                        <div class="container">
                          <div class="article">
                            <img src="https://i.imgur.com/SlsOzCI.png"  alt=""/>
                            <div class="article-header">
                              <div class="article-header-position">
                                <p class="article-title">
                                    ELP LAN - Hovedbiblioteket
                                </p>

                                <p class="article-more">
                                    Læs alt om det her
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="container">
                          <div class="article">
                            <img src="https://i.imgur.com/bvewTFN.png" alt=""/>
                              <div class="article-header">
                                <div class="article-header-position">
                                  <p class="article-title">
                                      ELP LAN - Kvaglundhallen
                                  </p>
                                  <p class="article-more">
                                      Læs alt om det her
                                  </p>
                                </div>
                              </div>
                          </div>
                        </div>

                      </div>

                  </div>
                </section>


            </main>

            <footer>
              <div class="footer-social">
                <ul class="footer-follow-page">
                    <li>
                      <a href="https://www.facebook.com/eSportEsbjerg/"
                         hreflang="dk"
                         title="">
                        <div class="footer-social-media">
                          <i class="fab fa-facebook">
                          </i>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="https://twitter.com/esport_esbjerg"
                         hreflang="dk"
                         title="">
                        <div class="footer-social-media">
                          <i class="fab fa-twitter-square"></i>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.instagram.com/esport_esbjerg/"
                         hreflang="dk"
                         title="">
                        <div class="footer-social-media">
                          <i class="fab fa-instagram"></i>
                        </div>
                      </a>
                    </li>
                  </ul>
              </div>

              <div class="sponsor">
                <div class="container">
                  <img src="https://i.imgur.com/hbLI2xT.png"
                       alt="Stofa"/>
                </div>

                <div class="container">
                  <img src="https://i.imgur.com/IwwpFfF.jpg"
                       alt="Cosmosskolen"/>
                </div>

                <div class="container">
                  <img src="https://i.imgur.com/wFwKCpC.png"
                       alt="Kvaglund Hallen"/>
                </div>

                <div class="container">
                  <img src="https://i.imgur.com/8YyiS1F.jpg"
                       alt="DGI"/>
                </div>

                <div class="container">
                  <img src="https://i.imgur.com/Tkj4Ado.jpg"
                       alt="Macron"/>
                </div>
              </div>

              <div class="footer-overlay">
                <div class="containers-3-elements">

                  <div class="container footer-container-links">
                    <ul>
                      <li>
                        <p>
                          Kontakt
                        </p>

                        <!-- Contact -->
                        <div class="split-container">

                          <div class="container">
                            <div class="footer-contact-logo">
                            </div>
                          </div>

                          <div class="container">
                            <ul>
                              <li>
                                <p>
                                  Addresse
                                </p>
                              </li>

                              <li>
                                <p> Post nummer </p>
                              </li>

                              <li>
                                <p> Email </p>
                              </li>

                              <li>

                              </li>
                            </ul>
                          </div>

                        </div>

                        <!-- Social Networks -->
                        <div class="">
                          <p>
                            Følg os
                          </p>

                          <ul class="footer-follow">
                              <li>
                                <a href="https://www.facebook.com/eSportEsbjerg/"
                                   hreflang="dk"
                                   title="">

                                  <div class="footer-social-media">
                                    <i class="fab fa-facebook">
                                    </i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://twitter.com/esport_esbjerg"
                                   hreflang=""
                                   title="">

                                  <div class="footer-social-media">
                                    <i class="fab fa-twitter-square">
                                    </i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://www.instagram.com/esport_esbjerg/"
                                   hreflang="dk"
                                   title="">

                                  <div class="footer-social-media">
                                    <i class="fab fa-instagram">
                                    </i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://www.youtube.com/channel/UCm75AVCNbTaKKmIWu77eHmA/videos"
                                   hreflang=""
                                   title="">
                                  <i class="fab fa-youtube">
                                  </i>
                                </a>
                              </li>

                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>

                  <div class="container footer-container-links">
                    <ul>
                      <ul>
                        <li>
                          <p>
                            Menu
                          </p>
                        </li>

                        <li class="footer-container-link">
                          <a href="#"
                             hreflang="dk">
                            Spil
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#"
                             hreflang="dk">
                            Kalendar
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#"
                             hreflang="dk">
                            Hold
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#"
                             hreflang="dk">
                            Forældre
                          </a>
                        </li>

                    </ul>
                  </div>

                  <div class="container footer-container-links">
                    <ul>
                      <li>
                        <p>
                          Menu
                        </p>
                      </li>

                      <li class="footer-container-link">
                        <a href="#" hreflang="dk">
                          Hjem
                        </a>
                      </li>

                      <li class="footer-container-link">
                        <a href="#" hreflang="dk">
                          Om os
                        </a>
                      </li>

                      <li class="footer-container-link">
                        <a href="#" hreflang="dk">
                          Kontakt
                        </a>
                      </li>

                      <li class="footer-container-link">
                        <a href="#" hreflang="dk">
                          Login
                        </a>
                      </li>

                    </ul>
                  </div>

                </div>

                <div class="misc">
                    <ul>
                      <li>
                        <p>
                          Copyright 2019 E-sport Esbjerg
                        </p>
                      </li>

                      <li>
                        <a href="#"
                           hreflang=""
                           title="">
                          Legal
                        </a>
                      </li>

                      <li>
                        <a href="#"
                           hreflang=""
                           title="">
                          Privacy
                        </a>
                      </li>

                      <li>
                        <a href="#"
                           hreflang=""
                           title="">
                          Sitemap
                        </a>
                      </li>

                    </ul>

                  </div>
              </div>

            </div>
            </footer>
          </div>
    </body>

  <script src="./framework/vue.js">
  </script>

  <script src="./js/scroll.js">
  </script>

  <script src="./js/navigation.js">
  </script>

  <script>
      setActive( 'home' );
  </script>
</html>
