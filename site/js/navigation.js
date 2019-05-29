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
                  language: 'en'
              },

              {
                url: './discord.html',
                name: 'discord',
                language: 'en'
              },

              {
                url: './nyheder.html',
                name: 'nyheder',
                language: 'en'
              },

              {
                url: './spil.html',
                name: 'spil',
                language: 'en'
              },

              {
                url: './hold.html',
                name: 'hold',
                language: 'en'
              }
          ],

          navigationHeaderSecond:
          [
            {
                url: './about.html',
                name: 'about',
                language: 'en'
            },

            {
              url: './forældre.html',
              name: 'forældre',
              language: 'en'
            },

            {
              url: './kalendar.html',
              name: 'kalendar',
              language: 'en'
            },

            {
              url: './kontakt.html',
              name: 'kontakt',
              language: 'en'
            },

            {
              url: 'https://esport-data.designermadsen.com/wp-login.php',
              name: 'login',
              language: 'en'
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
  