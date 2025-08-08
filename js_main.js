document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('nav');

    if (mobileMenuToggle && nav) {
        mobileMenuToggle.addEventListener('click', function() {
            nav.classList.toggle('active');
        });
    }

    // Quantity input validation
    const quantityInput = document.querySelector('#quantity');
    if (quantityInput) {
        quantityInput.addEventListener('change', function() {
            if (this.value < 1) {
                this.value = 1;
            } else if (this.value > 10) {
                this.value = 10;
            }
        });
    }
    
    // Add to cart animation
    const addToCartForm = document.querySelector('form[action="add_to_cart.php"]');
    if (addToCartForm) {
        addToCartForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate adding to cart
            const addToCartBtn = this.querySelector('button[type="submit"]');
            addToCartBtn.textContent = 'Added to Cart!';
            addToCartBtn.classList.add('added');
            
            setTimeout(() => {
                addToCartBtn.textContent = 'Add to Cart';
                addToCartBtn.classList.remove('added');
                this.submit();
            }, 2000);
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const navLinks = document.querySelector(".nav-links");

    //hamburgerMenu.addEventListener("click", () => {
    //    navLinks.classList.toggle("active");
    //});
});

//login page
document.getElementById('loginForm').addEventListener('submit', function(event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    if (!email || !password) {
      alert('Please fill in all fields.');
      event.preventDefault();
    }
  });
  
  

//logout page
function redirectHome() {
   window.location.href = "home.php";
 }
// ------- ------------------------------------------------
//Example: Confirm user wants to log out
// document.addEventListener('DOMContentLoaded', () => {
//     console.log('Logout page loaded.');
// });
// ------------------------------------------------------------
// document.querySelector(".logout-btn").addEventListener("click", function () {
//     const confirmLogout = confirm("Are you sure you want to logout?");
//     if (!confirmLogout) {
//         event.preventDefault();
//     }
// });


