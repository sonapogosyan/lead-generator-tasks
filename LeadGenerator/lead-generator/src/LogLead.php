<?php

namespace LeadGenerator;

use LeadGenerator\LogInterface;

/**
 * Class Log
 * @package LeadGenerator
 */
class LogLead implements LogInterface
{
    public const LEAD_ID = 'lead_id';
    public const LEAD_CATEGORY = 'lead_category';
    public const CURRENT_DATETIME = 'current_datetime';
    public const LOG_FILE = 'log.txt';

    private string $logTemplate = self::LEAD_ID. ' | ' . self::LEAD_CATEGORY . ' | ' . self::CURRENT_DATETIME;

    /**
     * @var int
     */
    private int $leadId;

    /**
     * @var string
     */
    private string $leadCategoryName;

    public function setVariablesIntoTemplate(): void
    {
        $this->logTemplate = str_replace(self::LEAD_ID, $this->getLeadId(), $this->logTemplate);
        $this->logTemplate = str_replace(self::LEAD_CATEGORY, $this->getLeadCategoryName(), $this->logTemplate);
        $this->logTemplate = str_replace(self::CURRENT_DATETIME, date('Y-m-d h:i:s'), $this->logTemplate);
    }

    public function writheLog(): void
    {
        file_put_contents(  self::LOG_FILE,$this->logTemplate . PHP_EOL, FILE_APPEND );
    }

    /**
     * @return int
     */
    public function getLeadId(): int
    {
        return $this->leadId;
    }

    /**
     * @param int $leadId
     */
    public function setLeadId(int $leadId): void
    {
        $this->leadId = $leadId;
    }

    /**
     * @return string
     */
    public function getLeadCategoryName(): string
    {
        return $this->leadCategoryName;
    }

    /**
     * @param string $leadCategoryName
     */
    public function setLeadCategoryName(string $leadCategoryName): void
    {
        $this->leadCategoryName = $leadCategoryName;
    }
}
