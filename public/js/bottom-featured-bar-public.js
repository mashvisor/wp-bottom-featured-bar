function close_bottom_featured_bar(){
  document.getElementById('bottom-featured-bar').style.visibility = "hidden";
  setTimeout(function () {
    document.getElementById('bottom-featured-bar').style.visibility = "visible";
  }, 20000);
}
