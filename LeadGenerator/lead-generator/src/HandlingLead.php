<?php

namespace LeadGenerator;

/**
 * Class HandlingLead
 * @package LeadGenerator
 */
class HandlingLead implements HandlingLeadInterface
{

    /**
     * @param Lead $lead
     * @return bool
     */
    public function handling(Lead $lead): bool
    {
        sleep(2);

        if (false === in_array($lead->getCategoryName(), Lead::$CATEGORIES)) {
            return false;
        }

        $this->logHandleProcess($lead);

        return true;
        // TODO: Implement handling() method.
    }

    /**
     * @param Lead $lead
     */
    public function logHandleProcess(Lead $lead): void
    {
        $log = new LogLead();
        $log->setLeadId($lead->getId());
        $log->setLeadCategoryName($lead->getCategoryName());

        $log->setVariablesIntoTemplate();
        $log->writheLog();
    }
}