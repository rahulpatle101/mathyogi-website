$(document).ready(function(){
// Initialize collapse button
  	$(".button-collapse").sideNav({
		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
	  	//$('.collapsible').collapsible();
	    menuWidth: 300, // Default is 240
	    edge: 'right', // Choose the horizontal origin
	    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
  	});

  	$('.scrollspy').scrollSpy();

});


// jQuery.validator.addMethod('answercheck', function (value, element) {
        // return this.optional(element) || /^\bcat\b$/.test(value);
    // }, "type the correct answer -_-");

// validate contact form
$(function() {
    $('#contactForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "required",
                minlength: "your name must consist of at least 2 characters"
            },
            email: {
                required: "no email, no message"
            },
            message: {
                required: "Write something to send this form.",
                minlength: "thats all? really?"
            }
        },

        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"contact.php",
                success: function() {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});