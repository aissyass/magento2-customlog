<?php
/**
 * Created: 21/06/2019
 *
 * @category  PHPAISS
 * @package   PHPAISS_CustomLog
 * @author    Yassine AISSAOUI
 * @copyright 21/06/2019 - PHPAISS Magento
 * @license   PHPAISS Magento
 */

namespace PHPAISS\CustomLog\Logger\Handler;

class Customer extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;

    /**
     * @param \Magento\Framework\Filesystem\DriverInterface $filesystem
     * @param string $filePath
     * @param string $fileName
     * @throws \Exception
     */
    public function __construct(
        \Magento\Framework\Filesystem\DriverInterface $filesystem,
        $filePath = null,
        $fileName = null
    ) {
        $fileName = '/var/log/customer-'.date('Y-m-d').'.log';
        parent::__construct($filesystem, $filePath, $fileName);
    }
}