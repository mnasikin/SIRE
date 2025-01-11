function openMenu(evt, menuName) {
  var i, content, menus;

  // Hide all tab contents
  content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }

  // Remove the background color of all tab links
  menus = document.getElementsByClassName("menus");
  for (i = 0; i < menus.length; i++) {
    menus[i].className = menus[i].className.replace(" active", "");
  }

  // Show the current tab
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.className += " active";

  // Check if the tab has deferred images and load them
  var deferredImages = document.querySelectorAll("#" + menuName + " .deferred-image");
  deferredImages.forEach(function(image) {
    if (!image.src) {
      image.src = image.getAttribute('data-src');
    }
  });
}

// Lightbox
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('gl-lightbox')) {
    window.location.href = '#';
  }
});
