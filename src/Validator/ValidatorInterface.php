<?php

namespace Intface\Component\Validator;

interface ValidatorInterface
{
    public function validate($value, array $context = []): void;
}