<?php

use App\Payment\PaymentFactory;

$paymentFactory = new PaymentFactory();

$stripe = $paymentFactory->create('stripe');
$paypal = $paymentFactory->create('paypal');

?>


<p>Payment Fee And Options</p>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Stripe</h3>
            </div>
            <div class="card-body">
                <p>
                    <strong>Fee:</strong> <?= $stripe->getFee() ?>
                </p>
                <p><strong>Options:</strong>  </p>
                <?= implode('<br>', $stripe->getOptions()) ?>

            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Paypal</h3>
            </div>
            <div class="card-body">
                <p>
                    <strong>Fee:</strong> <?= $paypal->getFee() ?>
                </p>
                <p><strong>Options:</strong>  </p>
                <?= implode('<br>', $paypal->getOptions()) ?>
            </div>
        </div>
    </div>
</div>
