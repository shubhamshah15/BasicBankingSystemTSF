<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <header>
      <div class="inner-width">
      <a href="index.php" class="logo"><b>SHAH BANK</b></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a class="nav-link" href="index.php"><i class="fas fa-home home"></i> Home</a>
          <a class="nav-link" href="createuser.php"><i class="fas fa-users createuser"></i> Create User</a>
          <a class="nav-link" href="transfermoney.php"><i class="fab fa-buffer tranmon"></i> Transfer Money</a>
          <a class="nav-link" href="transactionhistory.php"><i class="fas fa-align-left tranhis"></i> Transaction History</a>
        </nav>
      </div>
    </header>


    <script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
    </script>
  </body>
</html>
