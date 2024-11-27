<?php

namespace Omnipay\GoCardlessV2\Message;

use DateTime;
use GoCardlessPro\Resources\Subscription;

class BillingRequestResponse extends AbstractResponse {

    public function getData() {
        return $this->data;
    }
}