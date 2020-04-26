<?php

// strategy interface
interface PaymentGateway
{
    public function pay($amount);
}

// concrete strategy
class PayByCCDC implements PaymentGateway
{
    public function pay($amount)
    {
        echo "Paid  $amount via debit/credit card. \n";
    }
}

// concrete strategy
class PayByPaypal implements PaymentGateway
{
    public function pay($amount)
    {
        echo "Paid  $amount via Paypal. \n";
    }
}

// context
class Order
{
    private $paymentGateway;

    public function setPaymentGateway(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount)
    {
        $this->paymentGateway->pay($amount);
    }
}

$order = new Order();
$order->setPaymentGateway(new PayByCCDC());
$order->pay(125.25);
