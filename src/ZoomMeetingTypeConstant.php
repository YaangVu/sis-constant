<?php


namespace YaangVu\Constant;


class ZoomMeetingTypeConstant
{
    const SCHEDULE_MEETING  = "A schedule meeting";
    const RECURRING_MEETING = "A recurring meeting with fixed time";

    const ALL
        = [
            self::SCHEDULE_MEETING,
            self::RECURRING_MEETING
        ];
}
