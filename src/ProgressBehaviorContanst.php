<?php
/**
 * @Author Edogawa Conan
 * @Date   May 13, 2022
 */

namespace YaangVu\Constant;

class ProgressBehaviorContanst
{
    const EXCEEDING   = 'Exceeding';
    const MEETING     = 'Meeting';
    const APPROACHING = 'Approaching';
    const BEGINNING   = 'Beginning';
    const NOT_MEETING = 'Not Meeting';

    const ALL
        = [
            self::EXCEEDING,
            self::MEETING,
            self::APPROACHING,
            self::BEGINNING,
            self::NOT_MEETING
        ];
}

