<?php
/**
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TestFramework\Data\Argument;

/**
 * Recoverable situation of a missing argument value, presence of which is optional according to the business logic.
 * Possible resolution is to use a default argument value, if there is one.
 */
class MissingOptionalValueException extends \RuntimeException
{
}
