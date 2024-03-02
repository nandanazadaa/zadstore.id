document.getElementById('paymentForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    const amount = document.getElementById('amount').value;
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
  
    console.log(`Processing payment of ${amount} using ${paymentMethod}`);
  });