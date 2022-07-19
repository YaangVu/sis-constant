<?php
/**
 * @Author Edogawa Conan
 * @Date   Jul 11, 2022
 */

namespace YaangVu\Constant;

class ChatConstant
{
    const SUPPORTER       = "supporter";
    const MEMBER_PASSWORD = "oFz15bjBemLvoI4Bd0Tc";
    const Count           = 1000;
    const Offset          = 0;
    const TYPE_DIRECT     = "direct";
    const TYPE_GROUP      = "group";

    const FILTER_BY_CLASS       = "class";
    const FILTER_BY_TERM        = "term";
    const FILTER_BY_PROGRAM     = "program";
    const FILTER_BY_GRADE       = "grade";
    const FILTER_BY_LIST_SELECT = "list_selected";

    const FILTER_STUDENT = 'student';
    const FILTER_FAMILY  = 'family';
    const FILTER_TEACHER = 'teacher';
    const FILTER_ROLE    = 'role';

    const ALL_FILTER_BY
        = [
            self::FILTER_BY_CLASS,
            self::FILTER_BY_TERM,
            self::FILTER_BY_PROGRAM,
            self::FILTER_BY_GRADE,
            self::FILTER_BY_LIST_SELECT
        ];

    const ALL_FILTER
        = [
            self::FILTER_FAMILY,
            self::FILTER_ROLE,
            self::FILTER_TEACHER,
            self::FILTER_STUDENT
        ];
}