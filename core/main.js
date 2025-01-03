function openMenu(evt, menuName) {
  var i, content, menus;
  content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  menus = document.getElementsByClassName("menus");
  for (i = 0; i < menus.length; i++) {
    menus[i].className = menus[i].className.replace(" active", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Lightbox
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('gl-lightbox')) {
        window.location.href = '#';
    }
});