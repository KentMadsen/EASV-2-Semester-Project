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
            Esport Esbjerg - Kalendar
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
                  <img src="https://i.imgur.com/N8LPzSV.png" />
                  <p class="page-cover-text">
                    Kalendar
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

              <div class="site-calendar-section">
                  <h2>
                      Kalendar og planlægning
                    </h2>
      
                    <p>
                        Herinde kan du følge Esbjerg E-sports kalender og dermed planlægning. Det er vigtigt at følge godt med herinde da vi opdatere den løbende og det kan ske fra dag til dag
                    </p>

      
                    <p>
                        Har du yderlige spørgsmål angående kalenderen eller vores planlægning er du velkommen til at skrive en mail til os 
                        
                        <a href="" hreflang=""> 
                          her 
                        </a> 
                        
                        eller kontakte os på tlf nr
                    </p>
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
   setActive( 'kalendar' );
   </script>
</html>
