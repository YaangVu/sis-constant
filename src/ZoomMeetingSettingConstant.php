<?php
/**
 * @Author im.phien
 * @Date   Jun 21, 2022
 */

namespace YaangVu\Constant;

class ZoomMeetingSettingConstant
{
    const INSTANT_MEETING                      = 1;
    const SCHEDULE_MEETING                     = 2;
    const RECURRING_MEETING_WITH_NO_FIXED_TIME = 3;
    const RECURRING_MEETING_WITH_FIXED_TIME    = 8;

    const RECURRING_TYPE_DAILY   = 1;
    const RECURRING_TYPE_WEEKLY  = 2;
    const RECURRING_TYPE_MONTHLY = 3;

    const DAY_OF_WEEK_SUNDAY    = 1;
    const DAY_OF_WEEK_MONDAY    = 2;
    const DAY_OF_WEEK_TUESDAY   = 3;
    const DAY_OF_WEEK_WEDNESDAY = 4;
    const DAY_OF_WEEK_THURSDAY  = 5;
    const DAY_OF_WEEK_FRIDAY    = 6;
    const DAY_OF_WEEK_SATURDAY  = 7;

    const ALL_ZOOM_MEETING_TYPE
        = [
            self::INSTANT_MEETING,
            self::SCHEDULE_MEETING,
            self::RECURRING_MEETING_WITH_NO_FIXED_TIME,
            self::RECURRING_MEETING_WITH_FIXED_TIME
        ];

    const ALL_RECURRING_TYPE
        = [
            self::RECURRING_TYPE_DAILY,
            self::RECURRING_TYPE_WEEKLY,
            self::RECURRING_TYPE_MONTHLY
        ];

    const ALL_DAY_OF_WEEK
        = [
            self::DAY_OF_WEEK_SUNDAY,
            self::DAY_OF_WEEK_MONDAY,
            self::DAY_OF_WEEK_TUESDAY,
            self::DAY_OF_WEEK_WEDNESDAY,
            self::DAY_OF_WEEK_THURSDAY,
            self::DAY_OF_WEEK_FRIDAY,
            self::DAY_OF_WEEK_SATURDAY,
        ];
}