function calculateLumpSum() {
    const initialAmount = parseFloat(document.getElementById("initial_amount").value);
    const interestRate = parseFloat(document.getElementById("interest_rate").value);
    const years = parseInt(document.getElementById("years").value);
  
    const lumpSum = initialAmount * Math.pow(1 + interestRate / 100, years);
  
    document.getElementById("result").value = lumpSum.toFixed(2);
  }