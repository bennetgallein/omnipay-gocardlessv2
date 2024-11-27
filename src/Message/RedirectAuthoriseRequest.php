<?php

namespace Omnipay\GoCardlessV2\Message;

/**
 * @method RedirectAuthoriseResponse send()
 */
class RedirectAuthoriseRequest extends AbstractRequest {
    public function getData() {
        $data = [
            'redirect_uri' => $this->getDescription(),
            'exit_uri'     => $this->getTransactionId(),
            'links'        => [
                "billing_request" => $this->getTransactionReference(),
            ]
        ];

        return $data;
    }

    /**
     * Send the request with specified data
     *
     * @see https://developer.gocardless.com/api-reference/#billing-requests-create-a-billing-request
     * 
     * @param  mixed $data The data to send
     *
     * @return RedirectAuthoriseResponse
     */
    public function sendData($data) {
        bdump($data);
        $response = $this->gocardless->billingRequestFlows()->create(['params' => $data]);

        return $this->response = new RedirectAuthoriseResponse($this, $response);
    }
}
