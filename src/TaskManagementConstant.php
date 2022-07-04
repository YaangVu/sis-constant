<?php
/**
 * @Author kyhoang
 * @Date   Jun 23, 2022
 */

namespace YaangVu\Constant;

class TaskManagementConstant
{
    const REPORTED     = 'reported';
    const REVIEWED     = 'reviewed';
    const CREATED      = 'created';
    const PARTICIPATED = 'participated';
    const ASSIGNED     = 'assigned';
    const DONE         = 'done';
    const IN_PROGRESS  = 'in-progress';
    const CLOSES       = 'closes';
    const RE_OPEN      = 're-open';
    const INDIVIDUAL   = 'individual';
    const MAIN_TASK    = 'main-task';
    const SUB_TASK     = 'sub-task';
    const WARNING      = 'waring';
    const OVERDUE      = 'overdue';
    const ON_TIME      = 'on-time';
    const OWNED        = 'owned';

    const ALL_ACTION
        = [
            self::REPORTED, self::REVIEWED, self::CREATED, self::PARTICIPATED
        ];

    const ALL_STATUS
        = [
            self::ASSIGNED, self::DONE, self::IN_PROGRESS, self::CLOSES, self::RE_OPEN
        ];

    const ALL_TYPE
        = [
            self::INDIVIDUAL, self::MAIN_TASK, self::SUB_TASK
        ];

    const ALL_TIMELESS
        = [
            self::WARNING, self::OVERDUE, self::ON_TIME
        ];
}