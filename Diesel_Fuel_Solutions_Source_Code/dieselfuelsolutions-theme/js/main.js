//Open Side Navigation Bar
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

//Close Side Navigation Bar
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// Scroll To Top Button

 // When the user scrolls down 20px from the top of the document, show the button
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = () => {
    scrollFunction();
  }

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       document.getElementById("myBtn").classList.remove('hidebtn');
    } else {
       document.getElementById("myBtn").classList.add('hidebtn');
    }
  }


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//Testimonials
document.addEventListener('DOMContentLoaded', function() {
    const testimonialsWrapper = document.querySelector('.testimonials-wrapper');
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const prevButton = document.querySelector('.prev-testimonial');
    const nextButton = document.querySelector('.next-testimonial');
    const dotsContainer = document.querySelector('.testimonial-dots');
    
    if (!testimonialsWrapper || testimonialItems.length === 0) return;
    
    let currentIndex = 0;
    const totalItems = testimonialItems.length;
    
    // Create dots for navigation
    function createDots() {
        for (let i = 0; i < totalItems; i++) {
            const dot = document.createElement('button');
            dot.classList.add('testimonial-dot');
            dot.setAttribute('aria-label', `Testimonial ${i + 1}`);
            if (i === 0) {
                dot.classList.add('active');
            }
            dot.addEventListener('click', () => {
                goToSlide(i);
            });
            dotsContainer.appendChild(dot);
        }
    }
    
    // Update the active dot
    function updateDots() {
        const dots = document.querySelectorAll('.testimonial-dot');
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    // Go to a specific slide
    function goToSlide(index) {
        if (index < 0) {
            currentIndex = totalItems - 1;
        } else if (index >= totalItems) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }
        
        const translateValue = -currentIndex * 100 + '%';
        testimonialsWrapper.style.transform = `translateX(${translateValue})`;
        updateDots();
    }
    
    // Event listeners for navigation buttons
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });
    }
    
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });
    }
    
    // Initialize the slider
    function initSlider() {
        // Set initial styles
        testimonialsWrapper.style.display = 'flex';
        testimonialsWrapper.style.transition = 'transform 0.5s ease';
        
        testimonialItems.forEach(item => {
            item.style.flex = '0 0 100%';
        });
        
        createDots();
        
    }
    
    initSlider();
    
    // Handle keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            goToSlide(currentIndex - 1);
        } else if (e.key === 'ArrowRight') {
            goToSlide(currentIndex + 1);
        }
    });
    
    // Handle swipe gestures
    let touchStartX = 0;
    let touchEndX = 0;
    
    testimonialsWrapper.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    testimonialsWrapper.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left
            goToSlide(currentIndex + 1);
        } else if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right
            goToSlide(currentIndex - 1);
        }
    }
});


//Sets the top part of the hero padding 
function setHeroPadding() { 
	const navbarHeight = document.querySelector('.navcontainer').offsetHeight; 
	document.querySelector('.hero-img').style.paddingTop = navbarHeight + 'px'; }
// Call the function on load and resize events
 window.onload = setHeroPadding;
 window.onresize = setHeroPadding;
