var price=document.querySelectorAll('.info__price')
    for (var i = 0; i < price.length; i++) {
        price[i].innerText = Number(price[i].innerText).toLocaleString('de-DE', { style: 'currency', currency: 'VND' })
}

var btnAddCart= document.querySelectorAll('.add-to-cart');
var text="bạn muốn thêm sản phẩm vào giỏ hàng";
console.log(btnAddCart)
for(var i=0 ;i<btnAddCart.length; i++){
    btnAddCart[i].addEventListener("click",function(e){
        id=e.target.parentElement.querySelector('#id').innerText;
        var href='/storage/?id='+id
        if(confirm(text)){
            e.target.setAttribute('href',href);
        }
    });
}