<?php
	session_start();
    if ($_SESSION["loggedin"] == false) {
        print("Sorry. Unable to access this page with your current credentials");
    }else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Onlocked</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../../assets/css/main.css" />
	</head>
	<body bgcolor="#333333">
    <section id="main" class="wrapper style1">
        <div class="title">Purchase Onlocked</div>
            <div class="container">
            <section id="features">
                <header class="style1">

    <h2>Select your payment method</h2>
    <form action="procesar_pago.php" method="post" id="paymentForm">
    <!-- Campos ocultos para enviar los datos del pago a procesar_pago.php -->
    <input type="hidden" id="orderID" name="orderID">
    <input type="hidden" id="payerID" name="payerID">
    <input type="hidden" id="paymentStatus" name="paymentStatus">
    <input type="hidden" id="paymentTime" name="paymentTime">
    <input type="hidden" id="paymentAmount" name="paymentAmount">
    <input type="hidden" id="paymentDescription" name="paymentDescription">

    <!-- script para el botón de pago de paypal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AcLMk_f4SBwB9Iv8rdtCiRonK6H6TihgatHoMQo7aBAvUVc5d9G_8auLD_75eZ1kicj3xIvM4nHegFh1&currency=EUR"></script>
    <script>
      paypal.Buttons({
         createOrder: function(data, actions) {
            return actions.order.create({
               purchase_units: [{
                  amount: {
                     value: '36.00' 
                  }
               }]
            });
         },
         onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
               document.querySelector('#orderID').value = data.orderID;
               document.querySelector('#payerID').value = details.payer.payer_id;
               document.querySelector('#paymentStatus').value = details.status;
               document.querySelector('#paymentTime').value = details.create_time;
               document.querySelector('#paymentAmount').value = details.purchase_units[0].amount.value;
               document.querySelector('#paymentDescription').value = details.purchase_units[0].description;
               document.querySelector('#paymentForm').submit();
            });
         }
      }).render('#paypal-button-container');
   </script>
   <!-- Contenedor para mostrar el botón de pago de PayPal -->
   <div id="paypal-button-container" align="center"></div>
</form>

                </header>
            </section>
        </div>
    </section>
    <section>
        <nav id="nav">
            <ul>
                <li class="current"><a href="../index_logged.php">Go back</a></li>
        </nav>
    </section>
    <div class="container">
    <header class="style1">
    </header>
    </div>
            <section id="footer" class="wrapper">
            <div class="container">
                <header class="style1">
                    <h2>Have you got any doubt?</h2>
                    <p>
                        We would like you to send us your comments and feedback to 
                        continue improving your security day by day.
                    </p>
                </header>
                <div class="row">
    <div class="col-6 col-12-medium">
        <section>
            <form method="post" action="contacto.php">
                <div class="row gtr-50">
                    <div class="col-6 col-12-small">
                        <input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Name" />
                    </div>
                    <div class="col-6 col-12-small">
                        <input type="text" name="email_contacto" id="email_contacto" placeholder="Email" value=" <?php $_SESSION["email"] ?>" />
                    </div>
                    <div class="col-12">
                        <textarea name="mensaje_contacto" id="mensaje_contacto" placeholder="Message" rows="4"></textarea>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" class="style1" value="Send" /></li>
                            <li><input type="reset" class="style2" value="Reset" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <div class="col-6 col-12-medium">
            <section class="feature-list small">
                <div class="row">
                    <div class="col-6 col-12-small">
                        <section>
                            <h3 class="icon solid fa-home">Mailing Address</h3>
                            <p>
                                Onlocked Corporation<br />
                                1433 Toledo Road<br />
                                Madrid, TN 28901
                            </p>
                        </section>
                    </div>
                    <div class="col-6 col-12-small">
                        <section>
                            <h3 class="icon solid fa-comment">Social</h3>
                            <p>
                                <a href="#">@Onlocked</a><br />
                                <a href="#">linkedin.com/Onlocked</a><br />
                                <a href="#">facebook.com/Onlocked</a>
                            </p>
                        </section>
                    </div>
                    <div class="col-6 col-12-small">
                        <section>
                            <h3 class="icon solid fa-envelope">Email</h3>
                            <p>
                                <a href="#">comments@onlocked.tld</a>
                            </p>
                        </section>
                    </div>
                    <div class="col-6 col-12-small">
                        <section>
                            <h3 class="icon solid fa-phone">Phone</h3>
                            <p>
                                91 667 889
                            </p>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
        <div id="copyright">
            <ul>
                <li>&copy; Onlocked.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>
    </section>

    <script src = "../../../assets/js/jquery.min.js">              </script>
    <script src = "../../../assets/js/jquery.dropotron.min.js">    </script>
    <script src = "../../../assets/js/browser.min.js">             </script>
    <script src = "../../../assets/js/breakpoints.min.js">         </script>
    <script src = "../../../assets/js/util.js">                    </script>
    <script src = "../../../assets/js/main.js">                    </script>

	</body>
</html>
<?php
    }
?>