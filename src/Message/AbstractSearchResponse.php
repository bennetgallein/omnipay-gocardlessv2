<?php


namespace Omnipay\GoCardlessV2\Message;
use GoCardlessPro\Core\Paginator;
use Omnipay\Common\Message\AbstractResponse as BaseAbstractResponse;


abstract class AbstractSearchResponse extends BaseAbstractResponse implements \Iterator {
       /**
        * @var Paginator
        */
       protected $data;

       public function isSuccessful() {   // failures are errors and never get here!
              return true;
       }

       public function current(): mixed {
              return $this->data->current();
       }
       public function key(): mixed {
              return $this->data->key();
       }
       public function next(): void {
              $this->data->next();
       }
       public function rewind(): void {
              $this->data->rewind();
       }
       public function valid(): bool {
              return $this->data->valid();
       }
}
