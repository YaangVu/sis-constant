<?php


namespace YaangVu\Constant;


class StatusConstant
{
    const ACTIVE    = 'Active';
    const INACTIVE  = 'Inactive';
    const PENDING   = 'Pending';
    const ARCHIVED  = 'Archived';
    const DELETED   = 'Deleted';
    const ON_GOING  = 'On-going';
    const CONCLUDED = 'Concluded';

    const ALL
        = [
            self::ACTIVE,
            self::INACTIVE,
            self::PENDING,
            self::ARCHIVED,
            self::DELETED,
            self::ON_GOING,
            self::CONCLUDED
        ];
}
