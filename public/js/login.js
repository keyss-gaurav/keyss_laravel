
$(document).ready(function() {
    $(".otp-input").on("input", function() {
        var value = $(this).val();
        if (value.length === 1) {
            $(this).next().focus();
        } else if (value.length === 0) {
            $(this).prev().focus();
        }
    });

    $("#submitOtp").on("click", function() {
        $("#otpForm").submit();
    });
});




$(document).ready(function() {
    $('#exampleForm').submit(function(event) {
        // Reset previous error messages
        $('.error').text('');

        // Perform client-side validation
        
        var email = $('#email').val();
        var password = $('#password').val();
        var name = $('#name').val();


         // validate name
         if (name === '') {
            $('#nameError').text('Name is required');
            event.preventDefault();
        }


         // Validate email
         if (email === '') {
            $('#emailError').text('Email is required');
            event.preventDefault();
        } else if (!isValidEmail(email)) {
            $('#emailError').text('Invalid email format');
            event.preventDefault();
        }

        // Validate password
        if (password === '') {
            $('#passError').text('Password is required');
            event.preventDefault();
        }else if (password.length < 4) {
            $('#passError').text('Password must more then 4 characters');
            event.preventDefault();
        } else if (password.length > 8) {
            $('#passError').text('Password must be at least 8 characters');
            event.preventDefault();
        } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/[0-9]/.test(password)) {
            $('#passError').text('Password must contain at least one uppercase letter, one lowercase letter, and one number');
            event.preventDefault();
        }

       
    });

    // Function to validate email format
    function isValidEmail(email) {
        // Use a regular expression for basic email format validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
