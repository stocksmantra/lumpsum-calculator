<!DOCTYPE html>
<html>
<head>
    <title>Lump Sum Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url('https://mf.nipponindiaim.com/LearnAndInvest/calculators/assets/images/calc/calc-2.png');	
}
  .text{
    margin-left:12em;
    margin-top:3em;
  }
  .form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);}
  .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);}
     .font{
        font-size:20px;
     }   
</style>
<body>
    <?php
    $initial_investment = $_POST['initial_investment'] ?? null;
    $annual_rate = $_POST['annual_rate'] ?? null;
    $years = $_POST['years'] ?? null;
    $final_amount = null;

    if (!is_null($initial_investment) && !is_null($annual_rate) && !is_null($years)) {
        $final_amount = $initial_investment * pow((1 + $annual_rate / 100), $years);
    }
    ?>
       <h1 class="text">LUMPSUM Calculator</h1>
    <form method="post" class="form-signin">
        <label for="initial_investment" class="font"><b>Initial Investment:</b></label>
        <input type="number" class="form-control"  name="initial_investment" id="initial_investment" value="<?= $initial_investment ?>" required><br>

        <label for="annual_rate"class="font"><b>Annual Interest Rate (%):</b></label>
        <input type="number" class="form-control" step="0.01" name="annual_rate" id="annual_rate" value="<?= $annual_rate ?>" required><br>

        <label for="years" class="font"><b>Number of Years:</b></label>
        <input type="number" class="form-control" name="years" id="years" value="<?= $years ?>" required><br>

        <input type="submit" class="btn btn-sm btn-primary btn-block" value="Calculate"><br>
        <?php if (!is_null($final_amount)) : ?>
            <label for="final_amount" class="font"><b>Final Amount:</b></label>
            <input type="text" id="final_amount" class="form-control"  value="<?= number_format($final_amount, 2) ?>" readonly>
        <?php endif; ?>
    </form>
</body>
</html>