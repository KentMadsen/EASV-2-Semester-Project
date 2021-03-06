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
            Esport Esbjerg - Spil
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
            <div class="page-cover">
              <div class="page-cover-position">
                <img src="https://i.imgur.com/AUzqofK.png" />
                <p class="page-cover-text">
                  Spil
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
            
              <div class="page-boundary-grid">
                  <div class="page-grid-1">
                    <div class="page-grid-container-full">
                      <h2>
                        Hvad kan du træne hos os?
                      </h2>
  
                      <p class="center-paragraph">
                        Vi træner lige pt. 4 forskellige spil. Herunder Counter-strike Global Offensive, Overwatch, Fortnite og Fifa 19. 
                        Men vi arbejder på at udvide vores horisont
                      </p>
                    </div>
                  </div>
  
                </div>
  
                <div class="page-boundary-grid">
                    <div class="page-grid-1">
                      <div class="page-grid-container-half">
                        <div class="site-game-card">
                          <div class="site-game-card-position">
                              <img src="https://i.imgur.com/dEQUIJI.jpg" />
                              <div class="site-game-content">
                                  <p class="site-game-content-title">
                                      Counter-strike Global Offensive
                                  </p>
                                  <p class="site-game-content-description">
                                      Klik her for at tilmelde dig vores CSGO træning
                                  </p>
                              </div>
                          </div>
                        </div>
                      </div>
  
                      <div class="page-grid-container-half">
                          <div class="site-game-card">
                              <div class="site-game-card-position">
                                  <img src="https://i.imgur.com/brYX2iq.jpg" />
                                  <div class="site-game-content">
                                    <p class="site-game-content-title">
                                        FIFA 19
                                    </p>
                                    
                                    <p class="site-game-content-description">
                                        Klik her for at tilmelde dig vores FIFA 19 træning
                                    </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
  
                <div class="page-boundary-grid site-game-split">
                    <div class="page-grid-1">
                      <div class="page-grid-container-half">
                        <div class="site-game-card">
                            <div class="site-game-card-position">
                                <img src="https://i.imgur.com/FykwfU0.jpg" />
                                <div class="site-game-content">
                                    <p class="site-game-content-title">
                                        Overwatch
                                    </p>
                                    <p class="site-game-content-description">
                                        Klik her for at tilmelde dig vores Overwatch træning
                                    </p>
                                </div>
                            </div>
                        </div>
                      </div>
  
                      <div class="page-grid-container-half">
                          <div class="site-game-card">
                              <div class="site-game-card-position">
                                  <img src="https://i.imgur.com/Lnfhhu5.jpg" />
                                  <div class="site-game-content">
                                      <p class="site-game-content-title">
                                          Fortnite
                                      </p>
                                      <p class="site-game-content-description">
                                          Klik her for at tilmelde dig vores Fortnite træning
                                      </p>
                                  </div>
                              </div>      
                          </div>
                      </div>
                    </div>
                </div>
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
    setActive( 'spil' );
  </script>
    
</html>
