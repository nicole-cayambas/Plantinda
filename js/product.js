function paymentType(){
    const opc = document.getElementById("payment-type").value;
    const cardnum = document.getElementById('card-number')
    const expdate = document.getElementById('exp-date')
    const cvv = document.getElementById('cvv')
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