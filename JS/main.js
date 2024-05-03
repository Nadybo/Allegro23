document.querySelectorAll('.navbar-items').forEach(link => {
    if(link.href === window.location.href){
      link.setAttribute('aria-current', 'page')
    }
  })
  document.getElementById('menuButton').onclick = function(event) {
    event.stopPropagation(); // Предотвращает всплытие события, чтобы клик на кнопке не закрывал меню сразу после его открытия
    var sideMenu = document.getElementById('sideMenu');
    if (sideMenu.style.left === '-250px') {
      sideMenu.style.left = '0';
      // Добавляем обработчик события на весь документ
      document.addEventListener('click', closeMenuOutside);
    } else {
      sideMenu.style.left = '-250px';
      // Удаляем обработчик события после закрытия меню
      document.removeEventListener('click', closeMenuOutside);
    }
  };
  
  function closeMenuOutside(event) {
    var sideMenu = document.getElementById('sideMenu');
    var menuButton = document.getElementById('menuButton');
    // Проверяем, был ли клик вне меню и кнопки, если да - закрываем меню
    if (!sideMenu.contains(event.target) && !menuButton.contains(event.target)) {
      sideMenu.style.left = '-250px';
      document.removeEventListener('click', closeMenuOutside);
    }
  }
  