<?php
// Retrieve Card Number and Return Card Type
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $cardType = getCardType($cardNumber);
    echo $cardType;
}

// Determine Card Type
function getCardType($cardNumber) {
    if (preg_match('/^[0-2]\d{15}$/', $cardNumber)) {
        return 'Visa';
    } elseif (preg_match('/^[3-5]\d{15}$/', $cardNumber)) {
        return 'Mastercard';
    } elseif (preg_match('/^[6-7]\d{15}$/', $cardNumber)) {
        return 'American Express';
    } elseif (preg_match('/^[8-9]\d{15}$/', $cardNumber)) {
        return 'Discover';
    } else {
        return 'Invalid';
    }
}
?>
