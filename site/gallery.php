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
            Esport Esbjerg - Forældre
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

          <main id="galleri">
              <div class="site-page-gallery">
                <ul> 
                    <template v-for="image in listedGalleryItems"> 


                    </template>
                </ul>
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

  <script src="./js/galleri.js">
  
  </script>
  
  <script>
   setActive( 'galleri' );
   </script>
</html>
