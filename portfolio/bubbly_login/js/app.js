var button = $("button");
var form = $("form");
var heading = $("h1");

button.click(function(e) {
    e.preventDefault();
    form.fadeOut(400);
    heading.addClass("success");
});