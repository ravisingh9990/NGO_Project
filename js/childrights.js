/* inspiration from
https://dribbble.com/shots/22764492-Travel-website-Tours-and-glamping
*/
const poster = document.querySelector(".poster");
poster.addEventListener("click", removePoster);

function removePoster() {
  poster.classList.add("poster-active");
  document.querySelector("#myIframe").src += "?autoplay=1";
}


// major projects start



$(document).ready(function() {
  // Cards info
  var cards = [
    {
      author: "Shelton Cooper",
      quote: "DON'T YOU THINK THAT IF I WERE WRONG, I'D KNOW IT?",
      imgUrl: "https://i.imgur.com/mfkTSXu.png",
      color: "#18a0ff",
      likes: 423,
    },
    {
      author: "Albert Einstein",
      quote: "The true sign of intelligence is not knowledge, but imagination.",
      imgUrl: "https://i.imgur.com/3yAyk9o.jpg",
      color: "#4C5099",
      likes: 324,
    },
    {
      author: "Steve Jobs",
      quote: "The only way to do great work is to love what you do!",
      imgUrl: "https://i.imgur.com/GIijkyE.jpg",
      color: "#FFA358",
      likes: 234,
    },
  ];

  var currIndex = 0;
  var fontMax = 49;
  var counter = 0;

  function changeQuote(i) {
    $(".card-navigation").css("background-image", "url(" + cards[i].imgUrl + ")");
    $(".quote-card").css("background-color", cards[i].color);
    $(".quote-text").hide().text(cards[i].quote).fadeIn(500);
    $(".quote-text").css(
      "font-size",
      Math.round((fontMax * fontMax) / $(".quote-text").text().length)
    );
    $(".quote-author").text("- " + cards[i].author);
    $(".num-likes").text(cards[i].likes);
  }

  $(".arrow-right").click(function() {
    currIndex = (currIndex + 1) % cards.length;
    changeQuote(currIndex);
  });

  $(".arrow-left").click(function() {
    currIndex = (currIndex - 1 + cards.length) % cards.length;
    changeQuote(currIndex);
  });

  $(".heart-num").on("click", function() {
    var currLikes = parseInt($(".num-likes").text());
    if (counter % 2 === 0) {
      $(".like").css("color", "#F2495A");
      currLikes++;
    } else {
      $(".like").css("color", "#ffffff");
      currLikes--;
    }
    counter++;
    $(".num-likes").text(currLikes);
  });

  // Initialize with the first card
  changeQuote(currIndex);
});

// major projects end