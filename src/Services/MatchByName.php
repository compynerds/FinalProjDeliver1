<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 7/22/2016
 * Time: 12:50 PM
 */

namespace Project1\Services;
use Project1\Domain\StringLiteral;
use Project1\Domain\ValueObject;
use Project1\Services\Matcher;


class MatchByName extends Matcher
{
    public function match(ValueObject $value)
    {
       return $this->repo->findByName(new StringLiteral($value));
    }

}