<?php

namespace YaangVu\Constant;

class ProgressReportHistoryConstant
{
    const CREATED = 'Created';
    const EDIT   = 'Edit';
    const UPDATED = 'Updated';
    const DELETE = 'Delete';

    const ALL
        = [
            self::CREATED,
            self::EDIT,
            self::UPDATED,
            self::DELETE
        ];
}
