// Daftar objek untuk setiap card
var cardsData = [
    { requestNumber: 435591, totalItems: 10, totalQuantity: 10 },
    { requestNumber: 435593, totalItems: 15, totalQuantity: 12 },
    { requestNumber: 435593, totalItems: 15, totalQuantity: 12 },
    { requestNumber: 435593, totalItems: 15, totalQuantity: 12 },
    { requestNumber: 435593, totalItems: 15, totalQuantity: 12 },
    { requestNumber: 435592, totalItems: 20, totalQuantity: 15 },
];

function createCard(requestNumber, totalItems, totalQuantity) {
    var card = document.createElement('div');
    card.classList.add('card', 'bg-bluesky');
    card.style.width = "300px";

    card.innerHTML = `
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Request# : ${requestNumber}</span>
                <button class="btn bg-blue btn-sm text-light rounded-pill" id="detail">View Detail</button>
            </div>
        </div>
        <div class="card-body">
            <div class="bg-light py-1 d-flex align-items-center">
                <div class="my-1 rounded-2" style="width: 120px; height:25px; background-color: #DCFAF8;">
                    <span class="text-blue abril-fatface-regular ps-1">Total Items</span>
                </div>
                <span class="aclonica-regular ps-2" id="totalItem">${totalItems}</span>
            </div>
            <div class="bg-light py-1 mt-1 d-flex align-items-center">
                <div class="my-1 rounded-2" style="width: 120px; height:25px; background-color: #DCFAF8;">
                    <span class="text-blue abril-fatface-regular ps-1">Total Quantity</span>
                </div>
                <span class="aclonica-regular ps-2" id="totalQuantity">${totalQuantity}</span>
            </div>  
        </div>
    `;

    return card;
}

var cardContainer = document.getElementById('cardContainer');

cardsData.forEach(function(data) {
    var card = createCard(data.requestNumber, data.totalItems, data.totalQuantity);
    cardContainer.appendChild(card);
});
