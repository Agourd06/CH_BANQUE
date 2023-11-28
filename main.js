document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faqq");

    faqItems.forEach((item) => {
        const toggleButton = item.querySelector(".toggle");
        const answer = item.querySelector(".reponse");

        toggleButton.addEventListener("click", function () {
            item.classList.toggle("activeee");
            if (item.classList.contains("activeee")) {
                toggleButton.textContent = "-";
            } else {
                toggleButton.textContent = "+";
            }
        });
    });
});
var selectElement = document.getElementById('selectOption');
var selectElement1 = document.getElementById('selectOptions');
var clientSelect = document.getElementById('clientSelect');

// Add an event listener to handle option selection
clientSelect.addEventListener('change', function() {
// Get the selected option value
var selectedOption = clientSelect.value;

// Redirect to the selected page
if (selectedOption === 'clientinfo') {
    window.location.href = 'clients.php';
    } else if (selectedOption === 'clientaccounts') {
    window.location.href = 'comptsclient.php';
    } else if (selectedOption === 'clienttransactions') {
    window.location.href = 'transactionsclient.php';
    }
});

selectElement.addEventListener('change', function() {
    // Get the selected option value
    var selectedOption = selectElement.value;
    
    // Redirect to the selected page
    if (selectedOption === 'Banks') {
        window.location.href = 'banques.php';
    }else if (selectedOption === 'agency') {
        window.location.href = 'agences.php';
     }else if (selectedOption === 'ATM') {
        window.location.href = 'ATM.php';
    }
    });



    selectElement1.addEventListener('change', function() {
        // Get the selected option value
        var selectedOption = selectElement1.value;
        
        if (selectedOption === 'client') {
            window.location.href = 'users.php';
            } else if (selectedOption === 'accounts') {
            window.location.href = 'accounts.php';
            } else if (selectedOption === 'transactions') {
            window.location.href = 'transactions.php';
            }else if (selectedOption === 'clian') {
                window.location.href = 'clients.php';
                }
        });



        // --------------------------------regex------------------------------------


   


