<?php


namespace YaangVu\Constant;


class SubjectRuleConstant
{
    const   BEFORE            = 'before';
    const   AFTER             = 'after';
    const   PRECEDE           = 'precede';
    const   FOLLOW            = 'follow';
    const   CONSECUTIVE       = 'consecutive';
    const   SAME_TEACHER      = 'same_teacher';
    const   DIFFERENT_TEACHER = 'different_teacher';
    const   SAME_PERIOD       = 'same_period';
    const   DIFFERENT_PERIOD  = 'different_period';
    const   SAME_TERM         = 'same_term';
    const   DIFFERENT_TERM    = 'different_term';

    const ALL
        = [
            self::BEFORE,
            self::AFTER,
            self::PRECEDE,
            self::FOLLOW,
            self::CONSECUTIVE,
            self::SAME_TEACHER,
            self::DIFFERENT_TEACHER,
            self::SAME_PERIOD,
            self::DIFFERENT_PERIOD,
            self::SAME_TERM,
            self::DIFFERENT_TERM
        ];
}