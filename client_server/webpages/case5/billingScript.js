"use strict";

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('paymentForm');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Validate Card Holder, Card Details, and Billing Address
        const validHolder = validateCardHolder();
        const validDetails = validateCardDetails();
        const validAddress = validateBillingAddress();
        const cardNumber = document.getElementById('cardNumber').value.trim();

        // Ajax Request for Card Type Detection
        $.ajax({
            type: 'POST',
            url: 'billingCardType.php',
            data: { cardNumber: cardNumber },
            success: function(response) {
                document.getElementById('cardType').value = response;
            },
            error: function() {
                console.error('Error occurred while detecting card type.');
                alert('Error occurred while detecting card type.');
            }
        });

        if (validHolder && validDetails && validAddress) {form.submit();}
    });

    // Function to Validate Card Holder
    function validateCardHolder() {
        const cardHolderInput = document.getElementById('cardHolder');
        const cardHolderValue = cardHolderInput.value.trim();
        const formGroup = cardHolderInput.closest('.input-group');

        if (cardHolderValue === '') {
            setErrorFor(formGroup, 'Please enter card holder\'s name', 'ch-title');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(cardHolderValue)) {
            setErrorFor(formGroup, 'Please enter a valid card holder\'s name', 'ch-title');
            return false;
        } else {
            setSuccessFor(formGroup, 'ch-title');
            return true;
        }
    }

    // Function to Validate Card Details (Number, Expiry, CVV)
    function validateCardDetails() {
        const numberInput = document.getElementById('cardNumber');
        const expiryInput = document.getElementById('expiry');
        const cvvInput = document.getElementById('cvv');
        const formGroup = numberInput.closest('.input-group');

        const numberValue = numberInput.value.trim();
        const expiryValue = expiryInput.value.trim();
        const cvvValue = cvvInput.value.trim();

        let errorMessage = '';

        if (numberValue === '') {
            errorMessage = 'Please enter card number\n';
        } else if (!/^\d{16}$/.test(numberValue)) {
            errorMessage = 'Please enter a valid 16-digit card number\n';
        }
    
        if (expiryValue === '') {
            errorMessage += 'Please enter expiry date\n';
        } else if (!/^\d{2}\/\d{2}$/.test(expiryValue)) {
            errorMessage += 'Please enter a valid expiry date (MM/YY)\n';
        }
    
        if (cvvValue === '') {
            errorMessage += 'Please enter CVV\n';
        } else if (!/^\d{3}$/.test(cvvValue)) {
            errorMessage += 'Please enter a valid 3-digit CVV\n';
        }

        if (errorMessage !== '') {
            setErrorFor(formGroup, errorMessage, 'cd-title');
            return false;
        } else {
            setSuccessFor(formGroup, 'cd-title');
            return true;
        }
    }

    // Function to Validate Billing Address
    function validateBillingAddress() {
        const streetInput = document.getElementById('street');
        const cityInput = document.getElementById('city');
        const stateInput = document.getElementById('state');
        const zipInput = document.getElementById('zip');
        const formGroup = streetInput.closest('.input-group');

        const streetValue = streetInput.value.trim();
        const cityValue = cityInput.value.trim();
        const stateValue = stateInput.value.trim();
        const zipValue = zipInput.value.trim();

        let errorMessage = '';

        if (streetValue === '') {
            errorMessage = 'Please enter street\n';
        } else if (!/^\d+\s[A-z\s.]+$/.test(streetValue)) {
            errorMessage = 'Please enter a valid street\n';
        }
    
        if (cityValue === '') {
            errorMessage += 'Please enter city\n';
        } else if (!/^[a-zA-Z]+$/.test(cityValue)) {
            errorMessage += 'Please enter a valid city\n';
        }
    
        if (stateValue === '') {
            errorMessage += 'Please enter state\n';
        } else if (!/^[a-zA-Z]+$/.test(stateValue)) {
            errorMessage += 'Please enter a valid state\n';
        }
    
        if (zipValue === '') {
            errorMessage += 'Please enter ZIP code\n';
        } else if (!/^\d{5}$/.test(zipValue)) {
            errorMessage += 'Please enter a valid 5-digit ZIP code\n';
        }

        if (errorMessage !== '') {
            setErrorFor(formGroup, errorMessage, 'ba-title');
            return false;
        } else {
            setSuccessFor(formGroup, 'ba-title');
            return true;
        }
    }

    // Function to Set Error State for Form Group
    function setErrorFor(formGroup, message, sectionId) {
        const errorMessage = formGroup.querySelector('.error-message');
        const sectionTitle = document.getElementById(sectionId);

        formGroup.classList.remove('success');
        formGroup.classList.add('error');
        errorMessage.innerText = message;

        // Apply CSS Error Style to Respective Section Title
        if (sectionTitle) {
            sectionTitle.style.textDecoration = 'underline rgba(255, 0, 0, 0.5)';
        }
    }

    // Function to Set Success State for Form Group
    function setSuccessFor(formGroup, sectionId) {
        const sectionTitle = document.getElementById(sectionId);

        formGroup.classList.remove('error');
        formGroup.classList.add('success');

        // Remove CSS Error Style to Respective Section Title
        if (sectionTitle) {
            sectionTitle.style.textDecoration = 'none black';
        }
    }
});