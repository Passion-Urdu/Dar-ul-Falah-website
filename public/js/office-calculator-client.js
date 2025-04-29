function calculatePackage() {
    // Conversion rate from SAR to PKR
    const conversionRate = parseFloat(document.getElementById('conversion-rate').value) || 1;

    // Get the values from the inputs
    const meccaRate = parseFloat(document.getElementById('mecca-rate').value) * conversionRate; // Convert to PKR
    const madinahRate = parseFloat(document.getElementById('madinah-rate').value) * conversionRate; // Convert to PKR
    const meccaNights = parseInt(document.getElementById('mecca-nights').value);
    const madinahNights = parseInt(document.getElementById('madinah-nights').value);
    const numberOfAdults = parseInt(document.getElementById('number-adults').value);
    const numberOfChildren = parseInt(document.getElementById('number-children').value);

    // Manually provided profit per person
    const profitPerPerson = parseFloat(document.getElementById('profit-per-person').value) || 0;

    // Get ticket prices
    const adultTicket = parseFloat(document.getElementById('adult-ticket').value) || 0; // Adult ticket cost
    const childTicket = parseFloat(document.getElementById('child-ticket').value) || 0; // Child ticket cost

    // Validate required fields
    if (isNaN(meccaRate) || isNaN(madinahRate) || isNaN(meccaNights) || isNaN(madinahNights) ||
        meccaRate <= 0 || madinahRate <= 0 || meccaNights <= 0 || madinahNights <= 0 ||
        isNaN(numberOfAdults) || numberOfAdults <= 0 || isNaN(numberOfChildren) || numberOfChildren < 0) {
        alert('Please fill in all required fields with valid numbers.');
        return;
    }

    // Get selected package type
    const packageType = document.querySelector('input[name="package-type"]:checked').value;

    // Determine number of adults sharing one room based on package type
    let numberOfAdultsPerRoom;
    switch (packageType) {
        case 'double':
            numberOfAdultsPerRoom = 2; 
            break;
        case 'triple':
            numberOfAdultsPerRoom = 3; 
            break;
        case 'quad':
            numberOfAdultsPerRoom = 4; 
            break;
        case 'quint':
            numberOfAdultsPerRoom = 5; 
            break;
        default:
            numberOfAdultsPerRoom = 2; 
    }

    const visaCharges = 40000; // Fixed visa charges

    // Calculate total accommodation costs based on nights and rates
    const totalMeccaCost = (meccaRate * meccaNights) / numberOfAdultsPerRoom; 
    const totalMadinahCost = (madinahRate * madinahNights) / numberOfAdultsPerRoom; 
    const accommodationCost = totalMeccaCost + totalMadinahCost;

    // Calculate the total cost for adults (including hotels, tickets)
    function calculateAdultTotalCost() {
        const totalCost = (accommodationCost + visaCharges + adultTicket) * numberOfAdults; 
        return totalCost;
    }

    // Calculate the total cost for children (visa and ticket only)
    function calculateChildTotalCost() {
        const totalCost = (childTicket + visaCharges) * numberOfChildren; 
        return totalCost;
    }

    // Calculate the base costs
    const adultBaseCost = calculateAdultTotalCost();
    const childBaseCost = calculateChildTotalCost();

    // Calculate total profit (profit per person * total number of people)
    const totalPeople = numberOfAdults + numberOfChildren;
    const totalProfit = profitPerPerson * totalPeople;

    // Calculate the total cost for all persons (adults + children + profit)
    const totalCost = adultBaseCost + childBaseCost + totalProfit;

    // Calculate the single adult and child rates
    const singleAdultRate = numberOfAdults > 0 ? accommodationCost + visaCharges + adultTicket + profitPerPerson: 0;
    const singleChildRate = numberOfChildren > 0 ? childBaseCost / numberOfChildren + profitPerPerson : 0;

    // Display the rates in PKR
    document.getElementById('single-child-rate-pkr').textContent = `(PKR): ${singleChildRate.toFixed(2)}`;
    document.getElementById('single-adult-rate-pkr').textContent = `(PKR): ${singleAdultRate.toFixed(2)}`;
    document.getElementById('total-cost-pkr').textContent = `(PKR): ${totalCost.toFixed(2)}`;
}

