<?php

namespace Omnipay\GoCardlessV2;

class RedirectGateway extends AbstractGateway {

    /**
     * create a new billing request
     * 
     * @see https://developer.gocardless.com/api-reference/#billing-requests-create-a-billing-request
     * 
     * @param mixed $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function createBillingRequest($parameters) {
        return $this->createRequest(Message\CreateBillingRequestRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return Message\RedirectAuthoriseRequest|Message\AbstractRequest|RedirectGateway
     */
    public function authoriseRequest(array $parameters = []) {
        return $this->createRequest(Message\RedirectAuthoriseRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return Message\RedirectCompleteAuthoriseRequest|Message\AbstractRequest|RedirectGateway
     */
    public function completeAuthoriseRequest(array $parameters = []) {
        return $this->createRequest(Message\RedirectCompleteAuthoriseRequest::class, $parameters);
    }
}
