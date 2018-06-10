<?php

namespace Railken\LaraOre\Invoice\Attributes\Number\Exceptions;

use Railken\LaraOre\Invoice\Exceptions\InvoiceAttributeException;

class InvoiceNumberNotValidException extends InvoiceAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'number';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'INVOICE_NUMBER_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}