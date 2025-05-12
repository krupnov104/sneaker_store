function showAlert(message, type = 'info', timeout = 3000) {
  const alert = document.getElementById('alert');
  alert.textContent = message;
  alert.className = 'alert alert-' + type;
  alert.style.display = 'block';
  
  // Скрыть через указанное время
  setTimeout(() => {
    alert.style.display = 'none';
  }, timeout);
}


function addToCart(id){
    console.log('add' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart1.php",
        dataType: "text",
        data: 'action=add&id=' + id,
        error: function (response) {
            alert("Не смог");
        },
        success: function (response) {
            showAlert('Товар добавлен в корзину!', 'success', 5000);
        }
    });
}

function showMyCart(){
    console.log('show ');
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart1.php",
        data: 'action=show',
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при добавлении товара");
        },
        success: function (response) {
            $('#in-check').html(response);
        }
    });
}

function delFromCart(id){
    console.log('del' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/ajax/cart1.php",
        data: 'action=del&id=' + id,
        dataType: "text",
        error: function () {
            alert("Произошла ошибка при добавлении товара");
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}

