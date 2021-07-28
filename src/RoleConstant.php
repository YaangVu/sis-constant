<?php


namespace YaangVu\Constant;


class RoleConstant
{
    const GOD                  = 'God';
    const ADMIN                = 'Admin';
    const TEACHING_ASSISTANT   = 'Teaching assistant';
    const TEACHER              = 'Teacher';
    const HEADTEACHER          = 'Headteacher';
    const PRINCIPAL            = 'Principal';
    const ACADEMIC_COORDINATOR = 'Academic coordinator';
    const SYSTEM               = 'System';
    const STUDENT              = 'Student';
    const FAMILY               = 'Family';
    const STAFF                = 'Staff';
    const COACH                = 'Coach';
    const STUDENT_AND_FAMILY   = 'Student And Family';
    const DEFAULT_ROLE         = 'default';

    const ALL
        = [
            self::GOD,
            self::ADMIN,
            self::TEACHING_ASSISTANT,
            self::TEACHER,
            self::HEADTEACHER,
            self::PRINCIPAL,
            self::ACADEMIC_COORDINATOR,
            self::SYSTEM,
            self::STUDENT,
            self::FAMILY,
            self::STAFF,
            self::COACH,
            self::STUDENT_AND_FAMILY,
            self::DEFAULT_ROLE
        ];
}
