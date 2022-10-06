<?php
/**
 * Copyright (c) 2017. All rights reserved Duitku Varitel.
 *
 * This program is free software. You are allowed to use the software but NOT allowed to modify the software.
 * It is also not legal to do any changes to the software and distribute it in your own name / brand.
 *
 * All use of the payment modules happens at your own risk. We offer a free test account that you can use to test the module.
 *
 * @author    Duitku Varitel
 * @copyright Duitku Varitel (http://duitku.com)
 * @license   Duitku Varitel
 *
 */
namespace Duitku\Varitel\Logger;

use Monolog\Logger;

class DuitkuHandler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::DEBUG;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/duitku.log';
}
