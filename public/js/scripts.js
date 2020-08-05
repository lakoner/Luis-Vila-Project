window.onbeforeunload = function () {window.scrollTo (0,0);}


window.addEventListener('wheel', function(event)
{

 if (event.deltaY <= 0)
 {
  window.scrollTo (0,0);

  console.log('scrolling up');

 }
if (event.deltaY > 0)
 {
  window.scrollTo (0,500);
  console.log('scrolling down');

 }
});



