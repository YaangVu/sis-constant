<?php


namespace YaangVu\Constant;


class StudentTypeConstant
{
    const   HOME_SCHOOL      = 'home_school';
    const   SEMI_HOME_SCHOOL = 'semi_home_school';
    const   FULL_TIME        = 'full_time';
    const   PART_TIME        = 'part_time';

    const ALL
        = [
            self::HOME_SCHOOL,
            self::SEMI_HOME_SCHOOL,
            self::FULL_TIME,
            self::PART_TIME,
        ];
}