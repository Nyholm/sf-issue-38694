<?php


namespace App\Validator;

use Symfony\Component\Validator\Constraints\Compound;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @Annotation
 */
class CustomConstraint extends Compound
{
    protected function getConstraints(array $options): array
    {
        return [
            new Assert\Callback(function ($value, ExecutionContextInterface $execContext): void {
            })
        ];
    }
}