$('#input-tags').tagsInput();

$("a").click(function(e) {
  e.preventDefault();
  var i = $(this).data("value");
  $('#input-tags').addTag(i);
});