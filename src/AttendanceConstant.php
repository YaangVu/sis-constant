<?php

namespace YaangVu\Constant;

class AttendanceConstant
{
    const PRESENT      = 'Present';
    const EX_ABSENCE   = 'Ex. absence';
    const EX_TARDY     = 'Ex. tardy';
    const UNEX_ABSENCE = 'Unex. absence';
    const UNEX_TARDY   = 'Unex.tardy';

    const ALL
        = [
            self::EX_ABSENCE,
            self::PRESENT,
            self::EX_TARDY,
            self::UNEX_ABSENCE,
            self::UNEX_TARDY
        ];
}