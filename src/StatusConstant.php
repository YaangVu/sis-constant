<?php


namespace YaangVu\Constant;


class StatusConstant
{
    const ACTIVE        = 'Active';
    const INACTIVE      = 'Inactive';
    const PENDING       = 'Pending';
    const DONE          = 'Done';
    const ARCHIVED      = 'Archived';
    const DELETED       = 'Deleted';
    const ON_GOING      = 'On-going';
    const CONCLUDED     = 'Concluded';
    const STUDYING      = 'studying';
    const WITHDRAWAL    = 'withdrawal';
    const GRADUATED     = 'graduated';
    const COMPLETED     = 'completed';
    const GRADUATION    = 'graduation';
    const WITHDRAW      = 'withdraw';
    const DROPOUT       = 'dropout';
    const NOREVIEW      = 'No-review';
    const REVIEW        = 'Review';
    const APPROVE       = 'Approve';
    const REJECT        = 'Reject';
    const DRAFT         = 'Draft';
    const OFFICIAL      = 'Official';
    const NOT_APPROVE   = 'Not-approve';
    const ACTIVARED     = 'Activared';
    const ERROR         = 'Error';
    const ACTIVATED     = 'Activated';
    const NOT_RESPONDED = 'Not responded';
    const RESPONDED     = 'Responded';
    const CANCEL        = 'Cancel';

    const ALL
        = [
            self::ACTIVE,
            self::INACTIVE,
            self::PENDING,
            self::ARCHIVED,
            self::DELETED,
            self::ON_GOING,
            self::CONCLUDED,
            self::STUDYING,
            self::WITHDRAWAL,
            self::GRADUATED,
            self::DONE,
            self::COMPLETED,
            self::GRADUATION,
            self::WITHDRAW,
            self::DROPOUT,
            self::NOREVIEW,
            self::REVIEW,
            self::APPROVE,
            self::REJECT,
            self::DRAFT,
            self::OFFICIAL,
            self::NOT_APPROVE,
            self::ACTIVARED,
            self::ERROR,
            self::ACTIVATED,
            self::NOT_RESPONDED,
            self::RESPONDED,
            self::CANCEL
        ];
}
