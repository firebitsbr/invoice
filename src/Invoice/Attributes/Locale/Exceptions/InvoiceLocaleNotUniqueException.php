<?php

namespace Railken\LaraOre\Invoice\Attributes\Locale\Exceptions;

use Railken\LaraOre\Invoice\Exceptions\InvoiceAttributeException;

class InvoiceLocaleNotUniqueException extends InvoiceAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'locale';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'INVOICE_LOCALE_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}