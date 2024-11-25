// Function to add item to cart
function addToCart(productName, price, imageUrl) {
  // Get the cart from localStorage or initialize it if it doesn't exist
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  // Add the new product to the cart with name, price, and image URL
  cart.push({ name: productName, price: price, image: imageUrl });

  // Save the updated cart back to localStorage
  localStorage.setItem('cart', JSON.stringify(cart));

  // Update the cart count displayed on the page
  updateCartCount();
}

// Function to update cart count
function updateCartCount() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  document.getElementById('cart-count').innerText = cart.length;
}

// Update the cart count when the page loads
window.onload = updateCartCount;
