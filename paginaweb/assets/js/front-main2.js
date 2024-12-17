'use strict';

window.isRtl = window.Helpers.isRtl();

(function () {
  const menu = document.getElementById('navbarSupportedContent'),
        navItemLink = document.querySelectorAll('.navbar-nav .nav-link');

  // If layout is RTL, add .dropdown-menu-end class to .dropdown-menu
  if (isRtl) {
    Helpers._addClass('dropdown-menu-end', document.querySelectorAll('.dropdown-menu'));
  }

  // Function to close the mobile menu
  function closeMenu() {
    menu.classList.remove('show');
  }

  document.addEventListener('click', function (event) {
    // Check if the clicked element is inside mobile menu
    if (!menu.contains(event.target)) {
      closeMenu();
    }
  });

  navItemLink.forEach(link => {
    link.addEventListener('click', event => {
      if (!link.classList.contains('dropdown-toggle')) {
        closeMenu();
      } else {
        event.preventDefault();
      }
    });
  });

  // Mega dropdown
  const megaDropdown = document.querySelectorAll('.nav-link.mega-dropdown');
  if (megaDropdown) {
    megaDropdown.forEach(e => {
      new MegaDropdown(e);
    });
  }
})();