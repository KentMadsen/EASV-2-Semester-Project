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

        <?php 
          include_once './content/content.html';
        ?>

    </head>

    <body>
        <div id="application"
             class="background">

             <?php 
          include_once './content/header.html';
          ?>

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

            <?php 
              include_once './content/footer.html';
            ?>
          </div>
    </body>

    
<?php 
include_once './content/scripts.html';
?>

  <script>
      setActive( 'home' );
  </script>
</html>
