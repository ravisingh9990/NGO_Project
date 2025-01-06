// const videos = document.querySelectorAll(".containertwo img"); // Select all images
const videos = document.querySelectorAll(".containertwo video"); // Select all videos
const dots = document.querySelectorAll(".dots .dot"); // Adjusted to match .dot in CSS
const leftArrow = document.querySelector(".arrow-left"); // Select left arrow
const rightArrow = document.querySelector(".arrow-right"); // Select right arrow

let currentIndex = 0;
let time = 5000; 
// Default time for auto slideshow

// Function to update the active class for images and dots
const defClass = (startPos, index) => {
  for (let i = startPos; i < videos.length; i++) {
    videos[i].style.display = "none"; 
    // Hide all images
    dots[i].classList.remove("active-dot"); 
    // Remove custom active class
  }
  videos[index].style.display = "block"; 
  // Show current image
  dots[index].classList.add("active-dot"); 
  // Add custom active class to the current dot
};

// Initialize the first image and dot
defClass(1, 0);

// Event listener for left arrow
leftArrow.addEventListener("click", function () {
  currentIndex = currentIndex <= 0 ? videos.length - 1 : currentIndex - 1; 
  // Update index
  defClass(0, currentIndex); 
  // Update display
});

// Event listener for right arrow
rightArrow.addEventListener("click", function () {
  currentIndex = currentIndex >= videos.length - 1 ? 0 : currentIndex + 1; 
  // Update index
  defClass(0, currentIndex); 
  // Update display
});

// Function to start the automatic slideshow
const startAutoSlide = () => {
  setInterval(() => {
    currentIndex = currentIndex >= videos.length - 1 ? 0 : currentIndex + 1; 
    // Update index
    defClass(0, currentIndex); 
    // Update display
  }, time);
};

startAutoSlide(); 
// Start the slideshow



