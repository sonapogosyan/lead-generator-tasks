<?php

namespace LeadGenerator;

/**
 * Interface HandlingLeadInterface
 * @package LeadGenerator
 */
interface HandlingLeadInterface
{
    /**
     * @param Lead $lead
     * @return bool
     */
    public function handling(Lead $lead): bool;

    /**
     * @param Lead $lead
     */
    public function logHandleProcess(Lead $lead): void;
}