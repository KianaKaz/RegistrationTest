<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="/css/success.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
    <span class="swal2-success-line-tip"></span>
    <span class="swal2-success-line-long"></span>
    <div class="swal2-success-ring"></div>
    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div>
<h3><center>saved successfully</center></h3>
<p>Acount Owner: <?php echo e(payment()['Acount_owner']); ?></p>
<p>IBAN: <?php echo e(payment()['IBAN']); ?></p>
<p>UserId: <?php echo e(payment()['id']); ?></p>


<a href="/register/Api/demo/<?php echo e((payment()['id'])); ?>"  class="btn btn-success btn-lg pull-center">API Demo</a>

