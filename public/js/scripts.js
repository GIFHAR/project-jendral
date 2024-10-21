$(document).ready(function () {
    // In-memory state management
    var courierState = {};  // Courier state
    var paymentState = {};  // Payment state

    // Function to apply active or inactive styles
    function modifyButton(buttonId, isActive) {
        const button = $('#' + buttonId);
        if (isActive) {
            button.removeClass('inactive').addClass('active');
        } else {
            button.removeClass('active').addClass('inactive');
        }
    }

    // Handle click event for courier buttons
    $('.courier').click(function () {
        var clickedButtonId = $(this).attr('id');
        var isClicked = !courierState[clickedButtonId];

        // Reset all courier buttons to inactive except clicked one
        $('.courier').removeClass('active').addClass('inactive');
        for (var buttonId in courierState) {
            courierState[buttonId] = false;
        }

        // Update clicked button state
        courierState[clickedButtonId] = isClicked;

        // Apply active class to the clicked button
        modifyButton(clickedButtonId, isClicked);
    });

    // Handle click event for payment buttons
    $('.payment').click(function () {
        var clickedButtonId = $(this).attr('id');
        var isClicked = !paymentState[clickedButtonId];

        // Reset all payment buttons to inactive except clicked one
        $('.payment').removeClass('active').addClass('inactive');
        for (var buttonId in paymentState) {
            paymentState[buttonId] = false;
        }

        // Update clicked button state
        paymentState[clickedButtonId] = isClicked;

        // Apply active class to the clicked button
        modifyButton(clickedButtonId, isClicked);
    });

    // Function to add/remove active class based on input value
    document.querySelectorAll('.floating-label-group input, .floating-label-group textarea').forEach(function (input) {
        input.addEventListener('focus', function () {
            input.parentNode.classList.add('active');
        });

        input.addEventListener('blur', function () {
            if (input.value === '') {
                input.parentNode.classList.remove('active');
            }
        });

        // If the input already has value (page reload), keep label floated
        if (input.value !== '') {
            input.parentNode.classList.add('active');
        }
    });
});
