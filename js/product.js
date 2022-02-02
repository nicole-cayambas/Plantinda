const cardnum = document.getElementById('card-number')
const expdate = document.getElementById('exp-date')
const cvv = document.getElementById('cvv')
cardnum.style.display = "none";
expdate.style.display = "none";
cvv.style.display = "none";
function paymentType(){
    const opc = document.getElementById("payment-type").value;
    switch(opc)
    {
        case 'gcash':
        case 'paypal':
        case 'cod':
            cardnum.style.display = "none";
            expdate.style.display = "none";
            cvv.style.display = "none";
            break;
        case 'card':
            cardnum.style.display = "block";
            expdate.style.display = "block";
            cvv.style.display = "block";
            break;
    }
}
const inputUnitPrice = document.getElementById("inputUnitPrice")
const inputTotalValue = document.getElementById("inputTotalValue")
const inputShippingPrice = document.getElementById("inputShippingPrice")
// testing shipping fee = 50
var shipping = 50
inputShippingPrice.value = shipping
const shippingShow = document.getElementById("shippingShow")
shippingShow.textContent = "Php " + inputShippingPrice.value;
var amount
var defaultPrice = document.getElementById("price-range-1")
var unitPrice = defaultPrice.value
const priceShow = document.getElementById("price-order")
const totalShow = document.getElementById("price-total")
const amountInput = document.getElementById("quantity")
var label = defaultPrice.nextElementSibling.childNodes
var separator = label[3].textContent.split(" - ")
var min_amount = +(separator[0])
var max_amount = +(separator[1].slice(0, separator[1].indexOf(" pcs")))

function selectPrice(src){
    unitPrice = src.value
    label = src.nextElementSibling.childNodes
    separator = label[3].textContent.split(" - ")
    min_amount = +(separator[0])
    max_amount = +(separator[1].slice(0, separator[1].indexOf(" pcs")))
    amountInput.value = ""
    priceShow.textContent = "Php " + unitPrice
    totalShow.textContent = "Php " + unitPrice
    inputUnitPrice.value = unitPrice;
}

amountInput.addEventListener('change', function() {
    if(amountInput.value != ""){
        if (amountInput.value < min_amount || amountInput.value > max_amount) {
            amountInput.value = "";
            alert("Amount out of range. Select another price or check minimum-order.")
        }
        amount = amountInput.value
        const price = amount * unitPrice
        let total = 0
        priceShow.textContent = "Php " + price
        total = (price + shipping)
        totalShow.textContent = "Php " + total
        inputTotalValue.value = total;
    }
})