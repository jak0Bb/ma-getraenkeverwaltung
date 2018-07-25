function formatPrice() {
    var total = 0;
    for (i = 0; i < document.getElementsByClassName('price').length; i++)
    {
        total = total + parseFloat(document.getElementsByClassName('price')[i].innerHTML);
        document.getElementsByClassName('price')[i].innerHTML = currencyFormated(document.getElementsByClassName('price')[i].innerHTML)
    }
    console.log(total);
    document.getElementsByClassName('evaluation-price')[0].innerHTML = currencyFormated(total)

}
window.onload = formatPrice;

function add(price, index, stock) {
    var totalprice = parseFloat(document.getElementsByClassName('total-price-box')[0].innerText.substr(2,5).replace(',', '.'));

    if (document.getElementsByClassName('quantity')[index - 1].value < stock) {
        document.getElementsByClassName('total-price-box')[0].innerText = currencyFormated(totalprice + price);
    }
}
function substract(price, index) {

    var totalprice = parseFloat(document.getElementsByClassName('total-price-box')[0].innerText.substr(2,5).replace(',', '.'));
    
    if (document.getElementsByClassName('quantity')[index - 1].value > 0) {
        document.getElementsByClassName('total-price-box')[0].innerText = currencyFormated(totalprice - price);
    }
}

function currencyFormated(amount) {
    var i = parseFloat(amount);
    if(isNaN(i)) { i = 0.00; }
    var minus = '';
    if(i < 0) { minus = '-'; }
    i = Math.abs(i);
    i = parseInt((i + .005) * 100);
    i = i / 100;
    s = new String(i);
    if(s.indexOf('.') < 0) { s += '.00'; }
    if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
    s = minus + s;
    return '€ ' + s.replace('.', ',');
}