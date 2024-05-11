document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('paymentForm');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const validHolder = validateCardHolder();
        const validDetails = validateCardDetails();
        const validAddress = validateBillingAddress();

        if (validHolder && validDetails && validAddress) {form.submit();}
    });

    function validateCardHolder() {
        const cardHolderInput = document.getElementById('cardHolder');
        const cardHolderValue = cardHolderInput.value.trim();
        const formGroup = cardHolderInput.closest('.input-group');

        if (cardHolderValue === '') {
            setErrorFor(formGroup, 'Please enter card holder\'s name\n');
            return false;
        } else if (!/^[a-zA-Z\s]+$/.test(cardHolderValue)) {
            setErrorFor(formGroup, 'Please enter a valid card holder\'s name\n');
            return false;
        } else {
            setSuccessFor(formGroup);
            return true;
        }
    }

    function validateCardDetails() {
        const numberInput = document.getElementById('cardNumber');
        const expiryInput = document.getElementById('expiry');
        const cvvInput = document.getElementById('cvv');
       
        const numberValue = numberInput.value.trim();
        const expiryValue = expiryInput.value.trim();
        const cvvValue = cvvInput.value.trim();

        const formGroup = numberInput.closest('.input-group');
    
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
            setErrorFor(formGroup, errorMessage);
            return false;
        } else {
            setSuccessFor(formGroup);
            return true;
        }
    }    

    function validateBillingAddress() {
        const streetInput = document.getElementById('street');
        const cityInput = document.getElementById('city');
        const stateInput = document.getElementById('state');
        const zipInput = document.getElementById('zip');
    
        const streetValue = streetInput.value.trim();
        const cityValue = cityInput.value.trim();
        const stateValue = stateInput.value.trim();
        const zipValue = zipInput.value.trim();
    
        const formGroup = streetInput.closest('.input-group');
    
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
            setErrorFor(formGroup, errorMessage);
            return false;
        } else {
            setSuccessFor(formGroup);
            return true;
        }
    }    

    function setErrorFor(formGroup, message) {
        const errorMessage = formGroup.querySelector('.error-message');
        formGroup.classList.remove('success');
        formGroup.classList.add('error');
        errorMessage.innerText = message;
    }

    function setSuccessFor(formGroup) {
        formGroup.classList.remove('error');
        formGroup.classList.add('success');
    }
});