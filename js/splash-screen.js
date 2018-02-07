
$( document ).ready(function() {
  if (sessionStorage.getItem('splashScreen') !== 'true') {
  var quote = "They misunderestimated me.";
  var author = "George W. Bush";

  var quotes = [
    {
      qoute: "Citat 1",
      author: "Author 1"
    },
    {
      qoute: "Citat 2",
      author: "Author 2"
    },
    {
      qoute: "Citat 3",
      author: "Author 3"
    },
    {
      qoute: "Citat 4",
      author: "Author 4"
    }
  ];
  var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

    $('body').prepend('<header id="splashScreen"></header>');
    $('#splashScreen').prepend('<blockquote></blockquote>');
    $('blockquote').append('<p id="quote">What can u do the man is a god</p>');
    $('blockquote').append('<footer id="author">Biby</footer>');
    $('#quote').html(randomQuote.qoute);
    $('#author').html(randomQuote.author);
    $("#splashScreen").show().delay(2500).fadeOut();
    sessionStorage.setItem('splashScreen', 'true');
  }
});
