var sumPriceEl = document.getElementById('sumPrice');
var prices = document.getElementsByClassName('totalPrice');
var sum = 0;
for(let i = 0; i < prices.length; i++){
    sum += parseInt(prices[i].innerHTML);
}
sumPriceEl.textContent = 'Total: Php ' + sum;