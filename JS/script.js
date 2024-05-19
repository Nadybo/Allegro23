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
