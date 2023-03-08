<?php
/**
 * @Author Admin
 * @Date   May 06, 2022
 */

namespace YaangVu\Constant;

class ProgramConstant
{
    const HIGHSCHOOL                 = 'High School';
    const TEMPLATE_DEFAULT           = 'default';
    const TEMPLATE_MIDDLE_SCHOOL     = 'middle school';
    const TEMPLATE_ELEMENTARY_SCHOOL = 'elementary school';
    const TEMPLATE_HIGH_SCHOOL       = 'high school';

    const ALL
        = [
            self::HIGHSCHOOL,
        ];

    const ALL_TEMPLATE
        = [
          self::TEMPLATE_DEFAULT,
          self::TEMPLATE_MIDDLE_SCHOOL,
          self::TEMPLATE_ELEMENTARY_SCHOOL,
          self::TEMPLATE_HIGH_SCHOOL
        ];
}