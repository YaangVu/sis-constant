<?php
/**
 * @Author apple
 * @Date   Jun 27, 2022
 */

namespace YaangVu\Constant;

class StatusAttendanceLogConstant
{
    const PRESENT      = 'Present';
    const EX_ABSENCE   = 'Ex.absence';
    const EX_TARDY     = 'Ex.tardy';
    const UNEX_ABSENCE = 'Unex.absence';
    const UNEX_TARDY   = 'Unex.tardy';

    const ALL
        = [
            self::PRESENT,
            self::EX_ABSENCE,
            self::EX_TARDY,
            self::UNEX_ABSENCE,
            self::UNEX_TARDY,
        ];

    const ALL_ABSENCE
        = [
            self::EX_ABSENCE,
            self::UNEX_ABSENCE,
        ];

    const ALL_TARDY
        = [
            self::EX_TARDY,
            self::UNEX_TARDY,
        ];
}