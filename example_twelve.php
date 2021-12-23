<?php
//Strategy Pattern
// ================

interface PaymentInterface
{
    public function amount();
}

class CashPayment implements PaymentInterface
{
    public function amount()
    {
        return 100;
    }
}

class MobilePayment implements PaymentInterface
{
    public function amount()
    {
        return 200;
    }
}

class Payment
{
    private $paymentMethod;

    public function pay($context)
    {
        switch ($context) {
            case "cash":
                $this->paymentMethod = new CashPayment;
                break;
            case "mobile":
                $this->paymentMethod = new MobilePayment;
                break;
            default:
                $this->paymentMethod = new CashPayment;
        }
        return $this->paymentMethod->amount();
    }
}


$payment = new Payment;
echo $payment->pay("cash") . "USD" . "<br>";
echo $payment->pay("mobile") . "USD";
