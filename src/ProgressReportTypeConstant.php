<?php
/**
 * @Author This PC
 * @Date   Oct 11, 2022
 */

namespace YaangVu\Constant;

class ProgressReportTypeConstant
{
    const MONTHLY_REPORT          = 'monthly_report';
    const END_OF_SEMESTER_REPORT  = 'end_of_semester_report';

    const ALL
        = [
            self::MONTHLY_REPORT,
            self::END_OF_SEMESTER_REPORT
        ];
}