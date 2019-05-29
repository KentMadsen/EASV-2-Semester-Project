var menu = new Vue(
    {
      el:'#menu-navigation',
  
      data:
      {
          navigationHeaderFirst: 
          [
              {
                  url: './index.html',
                  name: 'home',
                  language: 'en',
                  active:false
              },

              {
                url: './discord.html',
                name: 'discord',
                language: 'en',
                active:false
              },

              {
                url: './nyheder.html',
                name: 'nyheder',
                language: 'en',
                active:false
              },

              {
                url: './spil.html',
                name: 'spil',
                language: 'en',
                active:false
              },

              {
                url: './hold.html',
                name: 'hold',
                language: 'en',
                active:false
              }
          ],

          navigationHeaderSecond:
          [
            {
                url: './about.html',
                name: 'about',
                language: 'en',
                active:false
            },

            {
              url: './forældre.html',
              name: 'forældre',
              language: 'en',
              active:false
            },

            {
              url: './kalendar.html',
              name: 'kalendar',
              language: 'en',
              active:false
            },

            {
              url: './kontakt.html',
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
        resetTitle: function()
        {

        }
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
