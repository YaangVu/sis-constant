<?php


namespace YaangVu\Constant;


class ZoomMeetingTypeConstant
{
   const SCHEDULE_MEETING = "Schedule meeting";
   const RECURRING_MEETING = "Recurring meeting with fixed time";

    const ALL
        = [
            self::SCHEDULE_MEETING, 
            self::RECURRING_MEETING
        ];
}
