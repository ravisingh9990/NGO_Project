
const poster = document.querySelector(".poster");
poster.addEventListener("click", removePoster);

function removePoster() {
  poster.classList.add("poster-active");
  document.querySelector("#myIframe").src += "?autoplay=1";
}


// major projects start




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