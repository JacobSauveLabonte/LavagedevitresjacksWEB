<?php include("header.php"); ?>
<script 
  src="https://www.paypal.com/sdk/js?client-id=BAABTeJXYSVHZYokBtwWGJyCevZzAl8h_PebJ56FrknhmduPEu_wflOZo6eOCK5CMxuJdqWC79xswZi9y8&components=hosted-buttons&disable-funding=venmo&currency=CAD">
</script>
<!-- Page Header Start -->
<div class="container-fluid page-header py-4 mb-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-6">
        <h1 class="display-2 text-white mb-6 animated slideInDown">Pay</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">Pay</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Payment Section Start -->
<div class="container d-flex justify-content-center">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; width: 100%;">
        <h2 class="display-5 mb-4">Complete Your Payment</h2>
        <div id="paypal-container-HVK6TRC8XVRWW"></div>
        <script>
            paypal.HostedButtons({
                hostedButtonId: "HVK6TRC8XVRWW",
            }).render("#paypal-container-HVK6TRC8XVRWW");
        </script>
    </div>
</div>
<!-- Payment Section End -->

<?php include("footer.php"); ?>
