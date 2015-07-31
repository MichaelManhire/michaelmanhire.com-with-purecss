// Modal
$(".project a").click(function(e) {
    e.preventDefault();
    var id = $(this).attr("id");
    var inst = $('[data-remodal-id=' + id + ']').remodal();
    inst.open();
})

// Contact Form Submission
var form = $("#contact-form");
$(form).submit(function(e) {
    e.preventDefault();
    var url = $(this).attr("action");
    var formData = $(this).serialize();
    $.post(url, formData, function(response) {
       form.html('<p class="success animated fadeIn">Message received! Thanks!</p>'); 
    });
});