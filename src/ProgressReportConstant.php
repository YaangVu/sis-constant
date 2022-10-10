<?php
/**
 * @Author This PC
 * @Date   Oct 10, 2022
 */

namespace YaangVu\Constant;

class ProgressReportConstant
{
    const PR_REPORT_DEFAULT     = 'default';
    const PR_REPORT_STANDARD    = 'standard';
    const PR_REPORT_HONORS      = 'honors';
    const PR_REPORT_HIGH_SCHOOL = 'high_school';
    const PR_REPORT_ELD         = 'ELD';

    const ALL
        = [
            self::PR_REPORT_DEFAULT,
            self::PR_REPORT_STANDARD,
            self::PR_REPORT_HONORS,
            self::PR_REPORT_HIGH_SCHOOL,
            self::PR_REPORT_ELD
        ];
}