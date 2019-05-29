<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">

        <link rel="stylesheet" 
              href="./css/style.css">

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
          Esport Esbjerg - Om os
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
                  <img src="https://i.imgur.com/1lYrj1H.jpg" />
                  <p class="page-cover-text">
                    Om os
                  </p>
                </div>
              </div>


              <div class="page-boundary-grid">
                  <section class="site-parents-section">
                      <h2 class="left-side-text">
                          Hvem er vi?
                        </h2>
                        <div  class="page-grid-1">
      
                        <p>
                            Esbjerg E-sport er en E-sports forening stiftet i ** med det mål for øje at skabe en forening, 
                            hvor børn og unge kan samles omkring deres fælles interesse i trygge faste rammer. 
                            Esbjerg E-sport ønsker blandt andet at sætte fokus på et sundt læringsmiljø for individer, der elsker computerspil, sammenhold og e-sport. </br>

                            Vores fysiske forening vokser hastigt, og vi er begejstret for den store opbakning, 
                            vi allerede får. Det er på grund af netop den opbakning, at vi nu er oppe på en del sideløbende hold i foreningen, 
                            hvor glade og kompetente instruktører møder op for at undervise i henholdsvis Counter-Strike: Global Offensive, Overwatch, Fortnite og FIFA. Vores bestyrelse, instruktører og administration består af ildsjæle og personer med erfaring fra e-sportens verden, 
                            som ønsker at bidrage til en stærk e-sport kultur i Esbjerg kommune. </br>
                            
                            Vi udvælger vores personale af trænere meget omhyggeligt, 
                            så vi kun finder de beste. Det er selvfølgelig til formål for at skabe de bedste og trygge rammer for vores kommende medlemmer. 
                            Esbjerg E-sport er herudover også medlem af DGI. 
                        </p>
      
                        <img src="https://i.imgur.com/La8Ddhl.jpg"/>
                        </div>
                    
                  </section>
                </div>

                <div class="page-boundary-grid">
                    <section class="site-parents-section">
                        <h2 class="left-side-text">
                            Mission og vision?
                          </h2>
                          <div  class="page-grid-1">
        
                          <p>
                              Vi vil sammen med spillere og undervisere skabe et fedt miljø for individer, der elsker computerspil. 
                              E-sport er mere end blot computerspil og usunde madvaner, 
                              det ønsker vi at give den almene borger bedre kendskab til. </br>

                              Vores vision er at imødekomme standarden for talentudvikling i Danmark og udvikle talenter samt hjælpe spillere med at opnå deres personlige mål.
                          </p>
        
                          <img src="https://i.imgur.com/rzcig9E.jpg"/>
                          </div>
                      
                    </section>
                  </div>

                  <div class="page-boundary-grid">
                      <section class="site-parents-section">
                          <h2 class="left-side-text">
                              Lokaler og udstyr?
                            </h2>
                            <div  class="page-grid-1">
          
                            <p>
                                Vi går ikke på kompromis med udstyr eller lokaler. 
                                Vi har i samarbejde med Cosmos skolen fået tildelt formidable lokaler, hvorpå vores medlemmer trives og har plads til at udfolde sig både inden for e-sportens rammer såvel som fysiske. 

                                Vores udstyr som er af højeste kvalitet sikrer at børnenes får den bedst mulige oplevelse.
                                Og så er det altså også en vigtighed at udstyret er i topklasse, når man skal udfolde og forbedre sig og sine evner indenfor E-sport. 
                            </p>
          
                            <img src="https://i.imgur.com/36DJphB.jpg"/>
                            </div>
                        
                      </section>
                    </div>

                    <div class="page-boundary-grid">
                        <section class="site-parents-section">
                            <h2 class="left-side-text">
                                Fokus på teamwork?
                              </h2>
                              <div  class="page-grid-1">
            
                              <p>
                                  Ligesom i en enhver anden sportsgren hvor man er flere på et hold, er teamwork en afgørende faktor. Der er  E-sport ikke anderledes. Det er utrolig vigtigt at teamwork og flow er i topklasse når man øver eller konkurrere på sit hold. 

                                  Hvad kan vi så gøre i Esbjerg E-sport for at sikre at vi uddanner vores medlemmer så de besidder de bedste kvaliteter indenfor teamwork? </br>
                                  
                                  Vi sikrer at vi giver dem følgende kvaliteter: </br>
                                  
                                  Sammenhold </br>
                                  Koordinering </br>
                                  Kommunikation </br>
                                  Selvdisciplin </br>
                                  Beslutsomhed </br>
                                  Overblik </br>
                                  Loyalitet </br>
                                  Tillid                                  
                              </p>
            
                              <img src="https://i.imgur.com/xxQ9OHx.png"/>
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
   setActive( 'about' );
   </script>
</html>
