<?php

namespace Railken\LaraOre\InvoiceTax\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\InvoiceTax\Exceptions\InvoiceTaxAttributeException;

class InvoiceTaxCreatedAtNotValidException extends InvoiceTaxAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'INVOICETAX_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
