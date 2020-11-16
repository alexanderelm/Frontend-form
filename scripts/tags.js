$('#input-tags').tagsInput();

$("a").click(function(e) {
  
  var i = $(this).data("value");
  $('#input-tags').addTag(i);

  e.preventDefault();

  
});