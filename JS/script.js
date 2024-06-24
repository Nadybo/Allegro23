document.querySelectorAll('.navbar-items').forEach(link => {
    if(link.href === window.location.href){
      link.setAttribute('aria-current', 'page')
    }
  })
  document.getElementById('menuButton').onclick = function(event) {
    event.stopPropagation(); 
    var sideMenu = document.getElementById('sideMenu');
    if (sideMenu.style.left === '-250px') {
      sideMenu.style.left = '0';
      document.addEventListener('click', closeMenuOutside);
    } else {
      sideMenu.style.left = '-250px';
      document.removeEventListener('click', closeMenuOutside);
    }
  };
  
  function closeMenuOutside(event) {
    var sideMenu = document.getElementById('sideMenu');
    var menuButton = document.getElementById('menuButton');
    if (!sideMenu.contains(event.target) && !menuButton.contains(event.target)) {
      sideMenu.style.left = '-250px';
      document.removeEventListener('click', closeMenuOutside);
    }
}

var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var btn1 = document.getElementById("openModalBtn1");
var btn2 = document.getElementById("openModalBtn2");
var span = document.getElementsByClassName("close")[0];

function openModal() {
    modal.style.display = "block";
}

function closeModal() {
    modal.style.display = "none";
}

span.onclick = function() {
    closeModal();
}

window.onclick = function(event) {
    if (event.target == modal) {
        closeModal();
    }
}

btn.onclick = function() {
    openModal();
}

btn1.onclick = function() {
    openModal();
}

btn2.onclick = function() {
    openModal();
}

//Для добавления поле Получатель-Отправитель ,
document.addEventListener('DOMContentLoaded', function() {
  const radioButtons = document.querySelectorAll('input[name="drone"]');
  const hiddenElement = document.getElementById('hidden-items');

  radioButtons.forEach(radio => {
    radio.addEventListener('change', function() {
      if (this.value === 'Индивидуальный') {
        hiddenElement.style.display = 'block';
      } else {
        hiddenElement.style.display = 'none';
      }
    });
  });
});


function tableSearch() {
  var phrase = document.getElementById('search-order');
  var table = document.getElementById('orders-table');
  var regPhrase = new RegExp(phrase.value, 'i');
  var flag = false;
  for (var i = 1; i < table.rows.length; i++) {
      flag = false;
      for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
          flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
          if (flag) break;
      }
      if (flag) {
          table.rows[i].style.display = "";
      } else {
          table.rows[i].style.display = "none";
      }

  }
}
function tableSearchAddressBook() {
  var phrase = document.getElementById('search-field-address-book');
  var table = document.getElementById('address-book-table');
  var regPhrase = new RegExp(phrase.value, 'i');
  var flag = false;
  for (var i = 1; i < table.rows.length; i++) {
      flag = false;
      for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
          flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
          if (flag) break;
      }
      if (flag) {
          table.rows[i].style.display = "";
      } else {
          table.rows[i].style.display = "none";
      }

  }
}

function dateRangeSearch() {
  var startDate = document.getElementById('start-date').value;
  var endDate = document.getElementById('end-date').value;
  var table = document.getElementById('orders-table');

  var start = new Date(startDate);
  var end = new Date(endDate);

  if (start > end) {
      alert("Start date must be before end date");
      return;
  }

  for (var i = 1; i < table.rows.length; i++) {
      var row = table.rows[i];
      var dateCell = row.cells[1].innerHTML;
      var rowDate = new Date(dateCell);

      if (rowDate >= start && rowDate <= end) {
          row.style.display = "";
      } else {
          row.style.display = "none";
      }
  }
}
function resetSearch() {
  document.getElementById('search-order').value = '';
  document.getElementById('start-date').value = '';
  document.getElementById('end-date').value = '';
  var table = document.getElementById('orders-table');

  for (var i = 1; i < table.rows.length; i++) {
      table.rows[i].style.display = "";
  }
}

function resetSearchAddressBook() {
  document.getElementById('search-field-address-book').value ='';
  var addressBookTable = document.getElementById('address-book-table');
  
  for (var i = 1; i < addressBookTable.rows.length; i++) {
    addressBookTable.rows[i].style.display = "";
}
}
