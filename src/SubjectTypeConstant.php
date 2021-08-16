<?php
/**
 * @Author yaangvu
 * @Date   Aug 16, 2021
 */

namespace YaangVu\Constant;

class SubjectTypeConstant
{
    const NORMAL             = 'normal';
    const HONORS             = 'honors';
    const ADVANCED_PLACEMENT = 'advanced placement';

    const ALL
        = [
            self::NORMAL,
            self::HONORS,
            self::ADVANCED_PLACEMENT
        ];
}