<?php
namespace Omnipay\GoCardlessV2\Message;

class CreateBillingRequestRequest extends AbstractRequest {
    public function getData() {
        return [
            "payment_request" => [
                "description" => $this->getDescription(),
                "amount"      => $this->getAmount(),
                "currency"    => $this->getCurrency()
            ]
        ];
    }

    /**
     * 
     * @see https://developer.gocardless.com/api-reference/#billing-requests-create-a-billing-request
     * 
     * @param mixed $data
     * @return BillingRequestResponse
     */
    public function sendData($data) {
        $response = $this->gocardless->billingRequests()->create(["params" => $data]);

        return $this->response = new BillingRequestResponse($this, $response);
    }
}