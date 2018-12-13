var priceDOM = document.getElementsByClassName("price")[0].innerHTML.split('/')[0];
var priceTotalDOM = document.getElementsByClassName("priceTotal")[0];
var nightsDOM = document.getElementsByClassName("nightsStayingInput")[0];

function addNights () {
	var nights = nightsDOM.value;
	var price = Number(priceDOM.split('$')[1]);
	priceTotalDOM.innerHTML = '$' + (price * nights);
}