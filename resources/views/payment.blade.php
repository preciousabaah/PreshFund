<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="paymentForm">
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" required />
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" required />
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" />
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" />
        </div>
        <div class="form-submit">
            <button type="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
    </form>

    <script src="https://js.paystack.co/v1/inline.js"></script>


    <script>
        const paymentForm = document.getElementById('paymentForm');
        paymentForm.addEventListener("submit", payWithPaystack, false);

        function payWithPaystack(e) {
            e.preventDefault();

            let handler = PaystackPop.setup({
                key: 'pk_test_21ca4e0c19799c43f3ac94489818c4d81388e78d', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // replace with a reference you generated
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                }
            });

            handler.openIframe();
        }
    </script>

</body>

</html>