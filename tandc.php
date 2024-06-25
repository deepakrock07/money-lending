<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Terms and conditions</title>
    <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* display: none; */
            z-index: 999;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 15px;

        }

        /* Close button */
        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            cursor: pointer;
        }

        /* Terms and conditions */
        .terms {
            max-height: 400px;
            overflow-y: scroll;
        }

        li {
            padding: 0.6rem;
        }
    </style>
</head>

<body>
    <!-- <button onclick="openModal()">Open Terms and Conditions</button> -->

    <div class="overlay" id="overlay">
        <div class="modal" id="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1>Terms and Conditions</h1>
            <div class="terms">
                <p>Welcome to P2P Money Lending website. By using our website, you agree to the following terms and
                    conditions:</p>
                <ul>
                    <li>Eligibility: To use our website, you must be at least 18 years old and meet any other
                        eligibility requirements set forth by P2P Money Lending.</li>
                    <li>Application process: You must complete the application process accurately and truthfully, and
                        provide all required information and documentation.</li>
                    <li>Credit check: We may conduct a credit check or obtain credit reports on you to assess your
                        creditworthiness.</li>
                    <li>Loan terms: We will provide you with a loan agreement detailing the terms of the loan, including
                        the interest rate, fees, and repayment schedule. You must review and agree to the loan terms
                        before accepting the loan.</li>
                    <li>Repayment: You must repay the loan according to the repayment schedule outlined in the loan
                        agreement. Failure to do so may result in additional fees, charges, or legal action.</li>
                    <li>Late payments: If you are unable to make a payment on time, you must notify us as soon as
                        possible to discuss alternative arrangements. Late payments may result in additional fees and
                        charges.</li>
                    <li>Fees and charges: You will be responsible for paying any fees and charges associated with the
                        loan, including origination fees, late fees, and prepayment fees.</li>
                    <li>Default: If you fail to repay the loan or violate any of the terms and conditions of the loan
                        agreement, we may take legal action to recover the debt.</li>
                    <li>Privacy: We will protect your personal and financial information in accordance with applicable
                        laws and regulations.</li>
                    <li>Amendments: We may amend the terms and conditions of the loan agreement at any time by providing
                        notice to you. You will have the opportunity to review and accept the amended terms before they
                        take effect.</li>
                </ul>
                <p>By using our website, you acknowledge that you have read, understood, and agreed to these terms and
                    conditions.</p>
            </div>
            <button onclick="closeModal()" style="border-radius: 3px;">
                Agree
            </button>
        </div>
    </div>
    <script>

            function openModal() {
                document.getElementById("overlay").style.display = "block";
                document.body.style.overflow = "hidden";
            }

        function closeModal() {
            document.getElementById("overlay").style.display = "none";
            document.body.style.overflow = "auto";
        }

        window.onclick = function (event) {
            if (event.target == document.getElementById("overlay")) {
                closeModal();
            }
        };

    </script>
</body>

</html>