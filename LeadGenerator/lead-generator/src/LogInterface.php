<?php

namespace LeadGenerator;

/**
 * Interface LogInterface
 * @package LeadGenerator
 */
interface LogInterface
{
    public function setVariablesIntoTemplate(): void;
    public function writheLog(): void;
}
