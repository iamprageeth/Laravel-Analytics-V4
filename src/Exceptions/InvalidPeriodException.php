<?php

namespace Myoutdeskllc\LaravelAnalyticsV4\Exceptions;

use Exception;
use DateTimeInterface;

class InvalidPeriodException extends Exception
{
    public static function startDateCannotBeAfterEndDate(DateTimeInterface $startDate, DateTimeInterface $endDate): static
    {
        return new static("Start date `{$startDate->format('Y-m-d')}` cannot be after end date `{$endDate->format('Y-m-d')}`.");
    }
}
