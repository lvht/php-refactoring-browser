<?php

namespace QafooLabs\Refactoring\Domain\Model;

use QafooLabs\Refactoring\Utils\ValueObject;

/**
 * Defined variables that are used or assigned.
 *
 * @property-read $localVariables
 * @property-read $assignments
 */
class DefinedVariables extends ValueObject
{
    /**
     * Name of variables that are "used" locally.
     *
     * @var array
     */
    protected $localVariables;

    /**
     * Name of variables that are assigned.
     *
     * @var array
     */
    protected $assignments;

    public function __construct(array $localVariables, array $assignments)
    {
        $this->localVariables = $localVariables;
        $this->assignments = $assignments;
    }

    public function getLocalVariables()
    {
        return array_keys($this->localVariables);
    }

    public function getAssignments()
    {
        return array_keys($this->assignments);
    }
}