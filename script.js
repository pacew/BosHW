function dyn_click (ev) {
  var elt = ev.target;
  $(elt).parents(".dyn-item").find(".dyn-body").toggle();
  return (false);
}

$(function () {
  $(".dyn-question a").click (dyn_click);
});
