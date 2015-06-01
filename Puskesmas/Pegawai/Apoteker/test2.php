<head><title>JavaScript Loan Calculator</title></head>
<body bgcolor="white">
<!-- 
  This is an HTML form that allows the user to enter data, and allows
  JavaScript to display the results it computes back to the user. The
  form elements are embedded in a table to improve their appearance.
  The form itself is given the name "loandata", and the fields within
  the form are given names like "interest" and "years".  These
  fieldnames are used in the JavaScript code that follows the form.
  Note that some of the form elements define "onchange" or "onclick"
  event handlers. These specify strings of JavaScript code to be
  executed when the user enters data or clicks on a button. 
-->
<form name="loandata">
  <table>
    <tr><td colspan="3"><b>Enter Loan Information:</b></td></tr>
    <tr>
      <td>1)</td>
      <td>Amount of the loan (any currency):</td>
      <td><input type="text" name="principal" size="12" 
                 onchange="calculate();"></td>
    </tr>
    <tr>
      <td>2)</td>
      <td>Annual percentage rate of interest:</td>
      <td><input type="text" name="interest" size="12" 
                 onchange="calculate();"></td>
    </tr>
    <tr>
      <td>3)</td>
      <td>Repayment period in years:</td>
      <td><input type="text" name="years" size="12" 
                 onchange="calculate();"></td>
    </tr>
    <tr><td colspan="3">
      <input type="button" value="Compute" onclick="calculate();">
    </td></tr>
    <tr><td colspan="3">
      <b>Payment Information:</b>
    </td></tr>
    <tr>
      <td>4)</td>
      <td>Your monthly payment will be:</td>
      <td><input type="text" name="payment" size="12"></td>
    </tr>
    <tr>
      <td>5)</td>
      <td>Your total payment will be:</td>
      <td><input type="text" name="total" size="12"></td>
    </tr>
    <tr>
      <td>6)</td>
      <td>Your total interest payments will be:</td>
      <td><input type="text" name="totalinterest" size="12"></td>
    </tr>
  </table>
</form>

<!--
  This is the JavaScript program that makes the example work. Note that
  this script defines the calculate() function called by the event
  handlers in the form.  The function refers to values in the form
  fields using the names defined in the HTML code above.
-->
<script language="JavaScript">
function calculate() {
    // Get the user's input from the form. Assume it is all valid.
    // Convert interest from a percentage to a decimal, and convert from
    // an annual rate to a monthly rate. Convert payment period in years
    // to the number of monthly payments.
    var principal = document.loandata.principal.value;
    var interest = document.loandata.interest.value / 100 / 12;
    var payments = document.loandata.years.value * 12;

    // Now compute the monthly payment figure, using esoteric math.
    var x = Math.pow(1 + interest, payments);
    var monthly = (principal*x*interest)/(x-1);

    // Check that the result is a finite number. If so, display the results
    if (!isNaN(monthly) && 
        (monthly != Number.POSITIVE_INFINITY) &&
        (monthly != Number.NEGATIVE_INFINITY)) {

        document.loandata.payment.value = round(monthly);
        document.loandata.total.value = round(monthly * payments);
        document.loandata.totalinterest.value = 
            round((monthly * payments) - principal);
    }
    // Otherwise, the user's input was probably invalid, so don't
    // display anything.
    else {
        document.loandata.payment.value = "";
        document.loandata.total.value = "";
        document.loandata.totalinterest.value = "";
    }
}

// This simple method rounds a number to two decimal places.
function round(x) {
  return Math.round(x*100)/100;
}
</script>
</body>
</html>
