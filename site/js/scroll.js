window.onscroll = function (event)
{
  if( event.pageY == 0 )
  {
    // Normal wait
    var element = document.getElementById("header-logo-desktop-area");
    element.classList = '';
    element.classList += 'header-logo';
  }
  else
  {
    // moved
    var element = document.getElementById("header-logo-desktop-area");

    element.classList = '';
    element.classList += ' header-logo-desktop-scrolled';
    element.classList += ' header-logo';
  }
}
