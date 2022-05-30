<?php
/**
 * @Author Edogawa Conan
 * @Date   May 29, 2022
 */

namespace YaangVu\Constant;

class SurveyConstant
{
    const  STUDENT          = 'student';
    const  TEACHER          = 'teacher';
    const  FAMILY           = 'family';
    const  OTHER_STAFFS     = 'other_staffs';
    const  ALL              = 'all';
    const  PROGRAM          = 'program';
    const  GRADE            = 'grade';
    const  CLASSES          = 'class';
    const  TERM             = 'term';
    const  STUDENT_INFO     = 'student_info';
    const  PARENT_INFO      = 'parent_info';
    const  STAFF_INFO       = 'staff_info';
    const  ROLE             = 'role';
    const  DROP_DOWN_LIST   = 'drop_down_list';
    const  RADIO_BUTTON     = 'radio_button';
    const  CHECKBOX         = 'checkbox';
    const  SINGLE_LINE_TEXT = 'single_line_text';
    const  MULTI_LINE_TEXT  = 'multi_line_text';
    const  NONE             = 'none';
    const  LETTER_ONLY      = 'letter_only';
    const  NUMERIC          = 'numeric';
    const  CHARACTER_ONLY   = 'character_only';
    const  IS_DEFAULT       = 'is_default';
    const  CHOICE           = 'choice';
    const  FILTER           = 'filter';
    const  FILTER_ID        = 'filter_id';
    const  FORMAT           = 'format';

    const OBJECT
        = [
            self::TEACHER,
            self::STUDENT,
            self::FAMILY,
            self::OTHER_STAFFS
        ];

    const QUESTION_TYPE
        = [
            self::SINGLE_LINE_TEXT,
            self::CHECKBOX,
            self::RADIO_BUTTON,
            self::MULTI_LINE_TEXT,
            self::DROP_DOWN_LIST
        ];

    const FILTER_BY
        = [
            self::CLASSES,
            self::PROGRAM,
            self::TERM,
            self::GRADE,
            self::STUDENT_INFO,
            self::PARENT_INFO,
            self::STAFF_INFO,
            self::ALL
        ];

    const FORMAT_ANSWER
        = [
            self::CHARACTER_ONLY,
            self::NUMERIC,
            self::LETTER_ONLY
        ];
}
