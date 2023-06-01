class Cartclass{

  constructor(){
    this.cart = [];
  }

  add(product){

    if(!this.cart.length){
      this.cart.push({id: product.id, qty: 1, price: product.price});
      return;
    }

    const productFound = this.getProductIndex(product);

    if(productFound >= 0){
      this.cart[productFound].qty += 1;
    }else {
      this.cart.push({id: product.id, qty: 1, price: product.price});
    }

  }

  remove(product){
    console.log('remove');
  }

  clear(){

  }

  getProductIndex(product) {
    return this.cart.findIndex(productInCart => {
      return productInCart.id === product.id;
    })
  }

}

export default Cartclass;