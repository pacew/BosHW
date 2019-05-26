function tail_click (ev) {
  var elt = ev.target;
  $(elt).parents(".tail-item").find(".tail-body").toggle();
  return (false);
}

$(function () {
  $(".tail-question a").click (tail_click);
});
