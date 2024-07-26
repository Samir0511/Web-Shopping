<?php

namespace Phppot;

use Phppot\DataSource;

class StripePayment
{
    private $ds;

    function __construct()
    {
        require_once __DIR__ . "/../lib/DataSource.php";
        $this->ds = new DataSource();
    }

    public function insertOrder($unitAmount, $currency, $orderReferenceId, $orderStatus)
    {
        $orderAt = date("Y-m-d H:i:s");
        $insertQuery = "INSERT INTO tbl_order(order_reference_id, amount, currency, order_at, order_status) VALUES (?, ?, ?, ?, ?) ";
        $paramValue = array(
            $orderReferenceId,
            $unitAmount,
            $currency,
            $orderAt,
            $orderStatus
        );
        $paramType = "sisss";
        $insertId = $this->ds->insert($insertQuery, $paramType, $paramValue);
        return $insertId;
    }

    public function updateOrder($param)
    {
        $paymentDetails = $this->getPaymentByIntent($param["payment_intent_id"]);
        if (! empty($paymentDetails)) {
            if($paymentDetails[0]["payment_status"] == "succeeded")
            {
                $paymentStatus = "Paid";
            }
            else if($paymentDetails[0]["payment_status"] == "requires_source")
            {
                $paymentStatus = "Payment in-progress";
            }
            $query = "UPDATE tbl_order SET stripe_customer_id = ?, stripe_payment_intent_id = ?, stripe_checkout_response = ?, order_status = ? WHERE id = ?";

            $paramValue = array(
                $param["customer_id"],
                $param["payment_intent_id"],
                $param["stripe_checkout_response"],
                $paymentStatus,
                $param["order_id"]
            );
            $paramType = "ssssi";
            $this->ds->execute($query, $paramType, $paramValue);
        }
    }

    public function insertCustomer($customer)
    {
        $insertQuery = "INSERT INTO tbl_customer(stripe_customer_id, email, customer_created_datetime, stripe_response) VALUES (?, ?, ?, ?) ";
        $paramValue = array(
            $customer["stripe_customer_id"],
            $customer["email"],
            $customer["customer_created_datetime"],
            $customer["stripe_response"]
        );
        $paramType = "ssss";
        $this->ds->insert($insertQuery, $paramType, $paramValue);
    }

    public function insertPayment($param)
    {
        $insertQuery = "INSERT INTO tbl_payment(stripe_payment_intent_id, payment_create_at, payment_status, stripe_payment_response) VALUES (?, ?, ?, ?) ";
        $paramValue = array(
            $param["payment_intent_id"],
            $param["payment_create_at"],
            $param["payment_status"],
            $param["stripe_payment_response"]
        );
        $paramType = "ssss";
        $this->ds->insert($insertQuery, $paramType, $paramValue);
    }

    public function updatePayment($param)
    {
        $query = "UPDATE tbl_payment SET billing_name = ?, billing_email = ?, payment_last_updated = ?, payment_status = ?, stripe_payment_response = ? WHERE stripe_payment_intent_id = ?";
        $paramValue = array(
            $param["billing_name"],
            $param["billing_email"],
            $param["payment_last_updated"],
            $param["payment_status"],
            $param["stripe_payment_response"],
            $param["payment_intent_id"]
        );

        $paramType = "ssssss";
        $this->ds->execute($query, $paramType, $paramValue);
    }

    public function getPaymentByIntent($paymentIntent)
    {
        $query = "SELECT * FROM tbl_payment WHERE stripe_payment_intent_id = ?";
        $paramValue = array(
            $paymentIntent
        );
        $paramType = "s";
        $result = $this->ds->select($query, $paramType, $paramValue);
        return $result;
    }
}
?>
Showing success page after payment
As sent with the create-checkout-session request, Stripe invokes the success page URL after payment.

The below code has the payment success message to acknowledge customers.

success.php

<?php
namespace Phppot;

require_once __DIR__ . '/Common/Config.php';
?>
<html>
<head>
<title>Payment Response</title>
<link href="./css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="phppot-container">
        <h1>Thank you for shopping with us.</h1>
        <p>You have purchased "<?php echo Config::PRODUCT_NAME; ?>" successfully.</p>
        <p>You have been notified about the payment status of your
            purchase shortly.</p>
    </div>
</body>
</html>