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
            Esport Esbjerg - Discord
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
                    <img src="https://i.imgur.com/Xm7dXLN.png" />
                    <p class="page-cover-text" hidden>
                      Discord
                    </p>
                  </div>
                </div>

                <h2>
                  Discord
                </h2>
                <p class="central-text">
                    Vi samler fællesskabet, overblikket og strukturen
                </p>

                <div class="page-boundary-grid">
                    <section class="site-parents-section">
                      <h2 class="left-side-text">
                          Boost fællesskabet! 
                      </h2>
                      <div  class="page-grid-1">
                        <p>
                            Gamer du og har du lyst til at være en del af vores super fede discord fællesskab?  Herinde kan du stifte bekendtskab med alle vores medlemmer, som både hygger sig, træner  e-sport og dygtiggøre sig til at konkurrere indenfor E-sport! 

                            Vil du være en del af fællesskabet, <a>så klik her!</a> 
                            
                            Vi i Esbjerg E-sport samler fællesskabet på vores Discord servere, hvor man med bare ét klik kan blive en del af vores fællesskab. Herinde kan man snakke, spille og tilføje hinanden som venner. Det vil altså sige man kan følge med i hvornår hinanden er online og stifte nye bekendtskaber lige såvel, som at venligeholde sine bekendtskaber man har fået hos os. 
                            
                            Det er også muligt herinde at melde til eller fra til træninger. Så det skaber også et stort overblik og selvstændighed for medlemmet.                             
                        </p>
                        
                        <img src="https://i.imgur.com/cEDjodI.png"/>
                      </div>
    
                    </section>
                  </div>

                  <div class="page-boundary-grid">
                      <section class="site-parents-section">
                        <h2 class="left-side-text">
                            Overblik over dine træninger! 
                        </h2>
                        <div  class="page-grid-1">
                          <p>
                              Her gives et eksempel på hvordan medlemmets kommunikation i discorden kunne være. Man ser altså på billedet til højre, at “CSGO TRÆNING” som er den gruppe du er en del af hvis du træner CSGO for eksempel. Her ser vi altså en måde at skabe et sublimt overblik og struktur på, ved at man så simpelt med bare ét klik kan se hvad træneren har linket i gruppen, som man skal træne til næste gang. Her i dette eksempel er det en Youtube video, som man skal se og øve, så  man kan møde op til næste træning og være mere forberedt og vigtigst af alt; blive en bedre E-sportsudøver.                            
                          </p>
                          
                          <img src="https://i.imgur.com/b7YDvSn.png"/>
                        </div>
      
                      </section>
                    </div>

                    <div class="page-boundary-grid">
                        <section class="site-parents-section">
                          <h2 class="left-side-text">
                              Giv medlemmer overblik og struktur!
                          </h2>
                          <div  class="page-grid-1">
                            <p>
                                Med kommende LAN events, konkurrencer, turneringer og andre former for events, som kræver overblik og planlægning kan det være svært at have det hele samlet ét sted, hvor det er overskueliggjort. 

                                Det er her Discord er så fantastisk, da vi ved vores medlemmer trives på platformen hjemme i hjemmet og bruger den på daglig basis til at kommunikere med hinanden. Så er det altså en kæmpe fordel også at kunne planlægge på platformen Discord.
                                
                                Man ser på billedet til højre her hvordan det eksempelvis kunne se ud. 
                                Det er altså så simpelt at man bare trykker på en af overskrifterne i menuen, og dernæst vil man blive videreført til den rette information, det kan både medlem og forældre nemt administrere. 
                                
                                Ved at bruge Discord, som klart er en af de førende online kommunikationsplatforme for gamere til også at indføre Forum, planlægning, træning og hvor end ens fantasi kunne bringe en hen, så er det bare super oplagt når de unge medlemmer bruger platformen nærmest hver gang de er aktive på deres PC/mobil eller andre devices.                     
                            </p>
                            
                            <img src="https://i.imgur.com/s4kvqlj.png"/>
                          </div>
        
                        </section>
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
    setActive( 'discord' );
  </script>
</html>
