document.addEventListener("DOMContentLoaded", function () {
    var addItemBtn = document.getElementById("addItemBtn");
    var listItemsContainer = document.getElementById("listItemsContainer");

    addItemBtn.addEventListener("click", function () {
        var selectedItem = document.getElementById('item').value;
        var quantity = document.getElementById('quantity').value;

        var listItem = document.createElement('li');
        listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'lh-sm');

        var itemNameDiv = document.createElement('div');
        var itemName = document.createElement('h6');
        itemName.classList.add('my-0');
        itemName.textContent = selectedItem;
        itemNameDiv.appendChild(itemName);

        var quantitySpan = document.createElement('span');
        quantitySpan.classList.add('text-body-secondary');
        quantitySpan.textContent = quantity;

        var closeBtn = document.createElement('button');
        closeBtn.classList.add('btn-close');
        closeBtn.setAttribute('aria-label', 'Close');

        listItem.appendChild(itemNameDiv);
        listItem.appendChild(quantitySpan);
        listItem.appendChild(closeBtn);

        listItemsContainer.querySelector('ul').appendChild(listItem);
        
        countItemList();
    });

    listItemsContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("btn-close")) {
            event.target.closest('li').remove();
            countItemList().itemCount - 1;
        }
    });
});

function countItemList() {
    var itemList = document.querySelectorAll('.list-group-item');
    
    var itemCount = itemList.length - 1;
    
    var countElement = document.getElementById('count');
    countElement.textContent = itemCount;
}


document.addEventListener('DOMContentLoaded', function () {
    var submitBtn = document.getElementById('submitListItem');
    var nameInput = document.getElementById('name');
    var phoneInput = document.getElementById('phone');
    var modalBody = document.getElementById('modalBody');

    submitBtn.addEventListener('click', function (event) {
        event.preventDefault();

        if (!nameInput.value || !phoneInput.value) {
            nameInput.classList.add('is-invalid');
            phoneInput.classList.add('is-invalid');
        } else {
            nameInput.classList.remove('is-invalid');
            phoneInput.classList.remove('is-invalid');

            var itemsData = collectItemListData();

            if (itemsData.length > 1) {
                var requestData = `Dear ${nameInput.value}, you have requested the following items:<br><ul>`;
                for (var i = 1; i < itemsData.length; i++) {
                    requestData += `<li>${itemsData[i].name} - Quantity: ${itemsData[i].quantity}</li>`;
                }
                requestData += '</ul>';

                modalBody.innerHTML = requestData;

                var guestModal = new bootstrap.Modal(document.getElementById('submitModal'));
                guestModal.show();

                var selectedItem = document.getElementById('item');
                var quantity = document.getElementById('quantity');

                selectedItem.classList.remove('is-invalid');
                quantity.classList.remove('is-invalid');

                console.log(itemsData);
            } else {
                var selectedItem = document.getElementById('item');
                var quantity = document.getElementById('quantity');

                selectedItem.classList.add('is-invalid');
                quantity.classList.add('is-invalid');

                var popover = new bootstrap.Popover(document.getElementById('addItemBtn'), {
                    toggle: 'popover',
                    placement: 'right',
                    container: 'body',
                    trigger: 'focus',
                    content: function () {
                        return "Add request item to list item!";
                    }        
                });

                popover.show();
            
                setTimeout(function() {
                    popover.hide();
                }, 1500);
            }
        }
    });

    function collectItemListData() {
        var itemList = document.querySelectorAll('.list-group-item');
        var itemsData = [];

        for (var i = 0; i < itemList.length; i++) {
            var item = itemList[i];
            var itemName = item.querySelector('h6').textContent;
            var quantity = item.querySelector('.text-body-secondary').textContent;
    
            itemsData.push({ name: itemName, quantity: quantity });
        }

        return itemsData;
    }


    countItemList();
});

