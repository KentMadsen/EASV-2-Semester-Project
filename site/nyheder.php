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
            Esport Esbjerg - Nyheder
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
            
              <div class="page-cover">
                  <div class="page-cover-position">
                    <img src="https://i.imgur.com/8scynQA.png" />
                    <p class="page-cover-text">
                      Nyheder
                    </p>
                  </div>
                </div>

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

              <div>

                <h2>
                  Nyheder
                </h2>

                <p class="central-text">
                    Herinde kan du følge Esbjerg E-sports Nyheder. Det er vigtigt at følge godt med herinde da vi opdatere den løbende og det kan ske fra dag til dag.
                </p>

                <div class="page-grid-2">
                  <div class="page-space">

                  </div>

                  <div class="site-news-feed">
                      <img src="https://i.imgur.com/bQfV6c3.jpg" />
                      <div class="site-news-feed-content">
                        <p>NYE HOLDTRØJER!</p>
                        <p>Læs alt om det her </p>
                        <p>https://www.facebook.com/events/620785191734972/</p>
                      </div>
                      
                  </div>

                  <div class="site-news-feed">
                    <img src="https://i.imgur.com/bQfV6c3.jpg" />
                    <div class="site-news-feed-content">
                      <p>NYE HOLDTRØJER!</p>
                      <p>Læs alt om det her </p>
                      <p>https://www.facebook.com/events/620785191734972/</p>
                    </div>
                    
                  </div>

                  <div class="page-space">

                  </div>
                </div>
              </div>

              <div>
                  <h2>
                    Kommende Events
                  </h2>
  
                  <div class="page-grid-2">
                    <div class="page-space">
  
                    </div>
  
                    <div class="site-news-feed">
                        <img src="https://i.imgur.com/Cu653I5.jpg" />
                        <div class="site-news-feed-content">
                          <p>NYE HOLDTRØJER!</p>
                          <p>Læs alt om det her </p>
                          <p>https://www.facebook.com/events/620785191734972/</p>
                        </div>
                        
                    </div>
  
                    <div class="site-news-feed">
                      <img src="https://i.imgur.com/Cu653I5.jpg" />
                      <div class="site-news-feed-content">
                        <p>NYE HOLDTRØJER!</p>
                        <p>Læs alt om det her </p>
                        <p>https://www.facebook.com/events/620785191734972/</p>
                      </div>
                      
                    </div>
  
                    <div class="page-space">
  
                    </div>
                  </div>
                </div>
              
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
                                <a href="https://www.facebook.com/eSportEsbjerg/" hreflang="dk" title="">
                                  <div class="footer-social-media">
                                    <i class="fab fa-facebook"></i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://twitter.com/esport_esbjerg" hreflang="" title="">
                                  <div class="footer-social-media">
                                    <i class="fab fa-twitter-square"></i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://www.instagram.com/esport_esbjerg/" hreflang="dk" title="">
                                  <div class="footer-social-media">
                                    <i class="fab fa-instagram">
                                    </i>
                                  </div>
                                </a>
                              </li>

                              <li>
                                <a href="https://www.youtube.com/channel/UCm75AVCNbTaKKmIWu77eHmA/videos" hreflang="" title="">
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
                          <a href="#" hreflang="dk">
                            Spil
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#" hreflang="dk">
                            Kalendar
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#" hreflang="dk">
                            Hold
                          </a>
                        </li>

                        <li class="footer-container-link">
                          <a href="#" hreflang="dk">
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
    setActive( 'nyheder' );
  </script>
</html>
