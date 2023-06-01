import Cartclass from "../classes/Cartclass";

const btnsAddToCart = document.querySelectorAll('btn-add-to-cart');
const btnsRemoveFromCart = document.querySelectorAll("btn-remove-from-cart");
const btnClearCart = document.querySelector("btn-clear-cart");

const cart = new Cartclass;

btnsAddToCart.forEach(button=>{
  button.addEventListener('click', () => {
    const product = JSON.parse(button.getAttribute('data-product'));
    // console.log(product);
    cart.add(product);
  })
});

btnsRemoveFromCart.forEach((button) => {
  button.addEventListener("click", () => {
    const product = JSON.parse(button.getAttribute("data-product"));
    cart.remove(product);
  });
});

btnClearCart.addEventListener('click', () => {
  console.log('clear cart');
});
