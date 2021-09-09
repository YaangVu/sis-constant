<?php
/**
 * @Author yaangvu
 * @Date   Sep 09, 2021
 */

namespace YaangVu\Constant;

class StudyStatusConstant
{
    const NOT_STARTED = 'not_started';
    const STUDYING    = 'studying';
    const WITHDRAWAL  = 'withdrawal';
    const GRADUATED   = 'graduated';

    const ALL
        = [
            self::NOT_STARTED,
            self::STUDYING,
            self::WITHDRAWAL,
            self::GRADUATED
        ];
}