var menu = new Vue(
    {
      el:'#menu-navigation',
  
      data:
      {
          navigationHeaderFirst: 
          [
              {
                  url: './index.php',
                  name: 'hjem',
                  language: 'en',
                  active:false
              },

              {
                url: './spil.php',
                name: 'spil',
                language: 'en',
                active:false
              },

              {
                url: './hold.php',
                name: 'hold',
                language: 'en',
                active:false
              },

              {
                url: './discord.php',
                name: 'discord',
                language: 'en',
                active:false
              },

              {
                url: './nyheder.php',
                name: 'nyheder',
                language: 'en',
                active:false
              },

              {
                url: './kalendar.php',
                name: 'kalendar',
                language: 'en',
                active:false
              }

          ],

          navigationHeaderSecond:
          [
            {
              url: './forældre.php',
              name: 'forældre',
              language: 'en',
              active:false
            },

            {
                url: './about.php',
                name: 'om os',
                language: 'en',
                active:false
            },

            {
              url: './kontakt.php',
              name: 'kontakt',
              language: 'en',
              active:false
            },

            {
              url: 'https://esport-data.designermadsen.com/wp-login.php',
              name: 'login',
              language: 'en',
              active:false
            }
              
          ]
        
  
      },
  
      watch:
      {
  
      },
  
      methods:
      {
        
      }
    }
  );
  

//
function setActive( activePageName )
{
  var i = 0; 
  var element = null;

  

  for( i = 0; 
       i < menu.navigationHeaderFirst.length; 
       i ++ )
{
 element = menu.navigationHeaderFirst[i];

 if(element.name === activePageName)
 {
   element.active = true;
   return;
 }
 
}

for( i = 0; 
     i < menu.navigationHeaderSecond.length; 
     i ++ )
{
 element = menu.navigationHeaderSecond[i];
 
 if(element.name === activePageName)
 {
   element.active = true;
   return;
 }
 
}
  
}
