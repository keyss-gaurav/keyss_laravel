
$(document).ready(function() {
    $('#exampleForm').submit(function(event) {
        // Reset previous error messages
        $('.error').text('');

        // Perform client-side validation
        
        var email = $('#email').val();
        var password = $('#password').val();

        if (name === '') {
            $('#passError').text('pass is required');
            event.preventDefault();
        }

        if (email === '') {
            $('#emailError').text('Email is required');
            event.preventDefault();
        }
    });
});

// document.addEventListener("DOMContentLoaded", function() {
//     const otpInputs = document.querySelectorAll('.otp-input');

//     otpInputs.forEach((input, index) => {
//         input.addEventListener('input', function(event) {
//             const nextInput = otpInputs[index + 1];
//             const prevInput = otpInputs[index - 1];

//             if (event.inputType === 'deleteContentBackward' && prevInput) {
//                 prevInput.focus();
//             } else if (nextInput) {
//                 nextInput.focus();
//             }

//             checkAndSubmit();
//         });

//         input.addEventListener('keydown', function(event) {
//             if (event.key === 'Backspace' && index > 0) {
//                 otpInputs[index - 1].focus();
//             }
//         });
//     });

//     function checkAndSubmit() {
//         const otpValue = Array.from(otpInputs).map(input => input.value).join('');
//         if (otpValue.length === 4) {
//             document.getElementById('pass_login').submit();
//         }
//     }
// });

   