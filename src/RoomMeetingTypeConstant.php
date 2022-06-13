<?php


namespace YaangVu\Constant;


class RoomMeetingTypeConstant
{
   const SCHEDULE_MEETING = "Schedule metting";
   const RECURRING_MEETING = "Recurring metting with fixed time";

    const ALL
        = [
            self::SCHEDULE_MEETING, 
            self::RECURRING_MEETING
        ];
}
