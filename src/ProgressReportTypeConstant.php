<?php
/**
 * @Author This PC
 * @Date   Oct 11, 2022
 */

namespace YaangVu\Constant;

class ProgressReportTypeConstant
{
    const MONTHLY_REPORT         = 'monthly_report';
    const END_OF_SEMESTER_REPORT = 'end_of_semester_report';
    const MIDDLE_TERM            = 'mid_term';
    const SEMESTER_1             = 'semester_1';
    const SEMESTER_2             = 'semester_2';

    const ALL
        = [
            self::MONTHLY_REPORT,
            self::END_OF_SEMESTER_REPORT,
            self::MIDDLE_TERM,
            self::SEMESTER_1,
            self::SEMESTER_2
        ];
}