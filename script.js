var backgroundImages = [
  "url('images/hero-image-dark01.jpg')",
  "url('images/hero-image-dark02.jpg')",
  "url('images/hero-image-dark03.jpg')"
];

var galleryImages = [
  "images/cookies/two-roses.jpg",
  "images/cookies/fiesta.jpg",
  "images/cookies/paris.jpg",
  "images/cookies/roses-and-violets.jpg",
  "images/cookies/roses.jpg",
  "images/cookies/sophia.jpg",
  "images/cookies/baby.jpg",
  "images/cookies/winter01.jpg",
  "images/cookies/winter02.jpg"
];

var preload = function(arr) {
  for(var i=0; i<arr.length; i++) {
    img = new Image();
    img.src = arr[i];
  };
};

var main = function() {
  $('button').on('click', function() {
    $(this).next().toggleClass('hide');
  });

  preload(galleryImages);

  var i = 0;

  function carousel() {
    if(i >= backgroundImages.length) {i=0};
    $('#landing-page').css('background-image', backgroundImages[i]);
    i++;
    setTimeout(carousel, 3000); // Change image every 2 seconds
  };
  carousel();
};

$(document).ready(main());
