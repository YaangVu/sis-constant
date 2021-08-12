<?php

namespace YaangVu\Constant;

class AttendanceConstant
{
    const PRESENT      = 'Present';
    const EX_ABSENCE   = 'Ex.absence';
    const EX_TARDY     = 'Ex.tardy';
    const UNEX_ABSENCE = 'Unex.absence';
    const UNEX_TARDY   = 'Unex.tardy';

    const ALL
        = [
            self::EX_ABSENCE,
            self::UNEX_ABSENCE,
            self::PRESENT,
            self::EX_TARDY,
            self::UNEX_TARDY
        ];

    ##################### GROUP #####################
    const ATTEND  = 'attend';
    const ABSENCE = 'absence';

    const GROUP
        = [
            'attend'  => [
                self::PRESENT,
                self::EX_TARDY,
                self::UNEX_TARDY
            ],
            'absence' => [
                self::EX_ABSENCE,
                self::UNEX_ABSENCE,
            ]
        ];

    const GROUP_REVERSE
        = [
            self::EX_ABSENCE   => self::ABSENCE,
            self::UNEX_ABSENCE => self::ABSENCE,

            self::PRESENT    => self::ATTEND,
            self::EX_TARDY   => self::ATTEND,
            self::UNEX_TARDY => self::ATTEND
        ];
}