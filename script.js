document.addEventListener("DOMContentLoaded", function () {
    const quotes = document.querySelectorAll(".quote-container");
    let currentQuoteIndex = 0;

    function showQuote(index) {
        quotes.forEach((quote, i) => {
            if (i === index) {
                quote.style.display = "block";
            } else {
                quote.style.display = "none";
            }
        });
    }

    function nextQuote() {
        currentQuoteIndex++;
        if (currentQuoteIndex >= quotes.length) {
            currentQuoteIndex = 0;
        }
        showQuote(currentQuoteIndex);
    }

    // Auto-advance to the next quote every 5 seconds (adjust as needed)
    setInterval(nextQuote, 3000);

    // Show the first quote initially
    showQuote(currentQuoteIndex);
});
