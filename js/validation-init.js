var Script = function () {

   // $.validator.setDefaults({
    //    submitHandler: function() { alert("submitted!"); }
    //});

    $().ready(function() {
        
        // enquirey form validation
        $("#enq_form").validate({
            rules: {
                fullname: "required",
                email: {
                    required: true,
                    email: true
                },
                msg: {
                    required: true,
                    minlength: 10,
                },
            },
                
            messages: {  
                fullname: "Please enter your full name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                msg: {
                    required: "Please enter your message",
                    minlength: "Your message must consist of at least 10 characters"
                },
            },
        });
        
        // subscribe form validation
        $("#reg_form").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
            },
                
            messages: {  
                firstname: "Please enter your full name",
                lastname: "Please enter your full name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
            },
        });
        
        // validate signup form on keyup and submit
        $("#msg_form").validate({
            rules: {
                fullname: "required",
                email: {
                    required: true,
                    email: true
                },
                tel: {
                    required: true,
                    digits: true,
                    rangelength: [10,10]
                },
                apart: {
                    required: true,
                    digits: true
                },
                msg: {
                    required: true,
                    minlength: 10,
                },
                
            },
            messages: {
                fullname: "Please enter your full name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                tel: {
                    required: "Please enter your telephone number",
                    digits: "Please enter numbers only",
                    rangelength: "Telephone number must consist of 10 digits"
                },
                apart: {
                    required: "Please enter your apartment number",
                    digits: "Please enter numbers only"
                },
                msg: {
                    required: "Please enter your message",
                    minlength: "Your message must consist of at least 10 characters"
                },
            },
        });
        
        // user password change form validation
        $("#pass_form").validate({
            rules: {
                cur_pass: "required", 
                new_pass: {
                    required: true,
                    minlength: 6
                },
                new_pass_confirm: {
                    required: true,
                    equalTo: "#new_pass"
                },
            },
            
            messages: {
                cur_pass: "For security, please enter your current password",
                new_pass: {
                    required: "Please provide a password",
                    minlength: "Your password must contain a minimum of 6 characters"
                },
                new_pass_confirm: {
                    required: "Please confirm your password",
                    equalTo: "Please enter the same password as above"
                },
            },
        });
    });


}();