
$( document ).ready(function() {
  if (sessionStorage.getItem('splashScreen') !== 'true') {
  var quote = "They misunderestimated me.";
  var author = "George W. Bush";

  var quotes = [
    {
      quote: "Oh my God Inhuman Reactions!",
      author: "Anders B"
    },
    {
      quote: "What can you do the man is a god!",
      author: "Emil H"
    },
    {
      quote: "But can u do this!",
      author: "Felix K"
    },
    {
      quote: "Kqly vac ban!",
      author: "Adil B"
    }
  ];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').append('<p id="quote"></p>');
    $('blockquote').append('<footer id="author"></footer>');
    $('#quote').html(randomQuote.quote);
    $('#author').html(randomQuote.author);
    $("#splashScreen").show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');
  }
});
