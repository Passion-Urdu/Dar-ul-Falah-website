
// <!-- Calculator Functionality -->

document.addEventListener('DOMContentLoaded', () => {
    // Function to handle dropdown selection
    function handleDropdown(dropdownSelectedId, dropdownItemsId, inputId) {
        const dropdownSelected = document.getElementById(dropdownSelectedId);
        const dropdownItems = document.getElementById(dropdownItemsId);
        const inputField = document.getElementById(inputId);

        dropdownSelected.addEventListener('click', () => {
            dropdownItems.classList.toggle('show');
        });

        dropdownItems.addEventListener('click', (event) => {
            const item = event.target.closest('.dropdown-item');
            if (item) {
                const text = item.getAttribute('data-text');
                const value = item.getAttribute('data-value');
                const rating = item.getAttribute('data-rating'); // Get the rating
                const distance = item.getAttribute('data-distance'); // Get the distance

                dropdownSelected.querySelector('.dropdown-selected-text').textContent = text;
                inputField.value = value; // Set the numeric value in the input field

                // Display the rating in the dropdown-selected element
                dropdownSelected.querySelector('.dropdown-selected-rating').textContent = rating || '';

                // Store the rating in a hidden input for later use in calculation
                dropdownSelected.setAttribute('data-rating', rating);

                dropdownItems.classList.remove('show');
            }
        });

        // Close the dropdown if clicking outside of it
        document.addEventListener('click', (event) => {
            if (!dropdownSelected.contains(event.target) && !dropdownItems.contains(event.target)) {
                dropdownItems.classList.remove('show');
            }
        });
    }

    handleDropdown('dropdown-selected1', 'dropdown-items1', 'mecca-rate');
    handleDropdown('dropdown-selected2', 'dropdown-items2', 'madinah-rate');
});

function calculatePackage() {
    // Get the values from the inputs
    const meccaRate = parseFloat(document.getElementById('mecca-rate').value);
    const madinahRate = parseFloat(document.getElementById('madinah-rate').value);
    const meccaNights = parseInt(document.getElementById('mecca-nights').value);
    const madinahNights = parseInt(document.getElementById('madinah-nights').value);

    // Validate required fields
    if (isNaN(meccaRate) || isNaN(madinahRate) || isNaN(meccaNights) || isNaN(madinahNights) ||
        meccaRate <= 0 || madinahRate <= 0 || meccaNights <= 0 || madinahNights <= 0) {
        alert('Please fill in all required fields with valid numbers.');
        return;
    }
    

    // Optional fields (default to 0 if not provided)
    const visaCharges = wadge_data.visa_charges;
    
    const ticketValue = parseFloat(document.getElementById('ticket-value').value) || 0;

    const conversionRate = wadge_data.conversion_rate; // Default conversion rate
    

    // Get the rating from the dropdown
    const meccaRating = document.getElementById('dropdown-selected1').getAttribute('data-rating');
    const madinahRating = document.getElementById('dropdown-selected2').getAttribute('data-rating');

    // Function to calculate the total cost for each package type
    function calculateTotalCost(numberOfPersons) {
        const totalMeccaCost = conversionRate * (meccaRate * meccaNights) / numberOfPersons;
        const totalMadinahCost = conversionRate * (madinahRate * madinahNights) / numberOfPersons;

        // Total accommodation cost (Mecca + Madinah)
        const accommodationCost = totalMeccaCost + totalMadinahCost;

        // Final total cost (accommodation + visa + ticket)
        const totalCost = accommodationCost + visaCharges + ticketValue;
        return totalCost;
    }

    // Calculate costs for different package sizes
    const totalCostDouble = calculateTotalCost(2) + wadge_data.package_profit1;
    const totalCostTriple = calculateTotalCost(3) + wadge_data.package_profit2;
    const totalCostQuad = calculateTotalCost(4) + wadge_data.package_profit3;
    
    console.log(totalCostDouble + totalCostTriple + totalCostQuad);

    let totalCostQuint;

    // Check if either hotel has a 5-star rating
    if (meccaRating === '5 STAR' || madinahRating === '5 STAR') {
        totalCostQuint = null;
    } else {
        totalCostQuint = calculateTotalCost(5) + wadge_data.package_profit4;
    }

    // Display the rates in PKR
    document.getElementById('double-rate-pkr').textContent = `PKR ${totalCostDouble.toFixed(2)}`;
    document.getElementById('triple-rate-pkr').textContent = `PKR ${totalCostTriple.toFixed(2)}`;
    document.getElementById('quad-rate-pkr').textContent = `PKR ${totalCostQuad.toFixed(2)}`;

    if (totalCostQuint === null) {
        document.getElementById('quint-rate-pkr').textContent = `null`; // Show null when it's a 5-star hotel
    } else {
        document.getElementById('quint-rate-pkr').textContent = `PKR ${totalCostQuint.toFixed(2)}`;
    }
}


// <!-- Note Functionality -->

document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('ticket-button');
    const note = document.getElementById('note');
    const closeNote = document.getElementById('close-note');

    button.addEventListener('click', () => {
        note.classList.toggle('show');
    });

    closeNote.addEventListener('click', () => {
        note.classList.remove('show');
    });

    // Close the note if clicking outside of it
    document.addEventListener('click', (event) => {
        if (!note.contains(event.target) && event.target !== button) {
            note.classList.remove('show');
        }
    });
});


 