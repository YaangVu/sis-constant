<?php


namespace YaangVu\Constant;


class ClassAssignmentConstant
{
    const GUEST             = 'Guest';
    const STUDENT           = 'Student';
    const PRIMARY_TEACHER   = 'Primary Teacher';
    const SECONDARY_TEACHER = 'Secondary Teacher';

    const ALL
        = [
            self::GUEST,
            self::STUDENT,
            self::PRIMARY_TEACHER,
            self::SECONDARY_TEACHER
        ];
}
