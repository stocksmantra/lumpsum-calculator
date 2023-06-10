
function calculateLumpsum() {
  // Get input values
  const investedAmount = parseFloat(document.getElementById("investedAmount").value);
  const expectedReturns = parseFloat(document.getElementById("expectedReturns").value) / 100;
  const investmentPeriod = parseFloat(document.getElementById("investmentPeriod").value);

  // Calculate total value using compound interest formula
  const totalValue = investedAmount * Math.pow((1 + expectedReturns), investmentPeriod);

  // Calculate estimated returns
  const estimatedReturns = totalValue - investedAmount;

  // Format the results as Indian Rupees
  const formatOptions = { style: 'currency', currency: 'INR', minimumFractionDigits: 2, maximumFractionDigits: 2 };
  const formattedInvestedAmount = investedAmount.toLocaleString('en-IN', formatOptions);
  const formattedEstimatedReturns = estimatedReturns.toLocaleString('en-IN', formatOptions);
  const formattedTotalValue = totalValue.toLocaleString('en-IN', formatOptions);

  // Display results
  document.getElementById("resultInvestedAmount").textContent = formattedInvestedAmount;
  document.getElementById("resultEstimatedReturns").textContent = formattedEstimatedReturns;
  document.getElementById("resultTotalValue").textContent = formattedTotalValue;
}
