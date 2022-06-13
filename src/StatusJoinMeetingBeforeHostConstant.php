<?php


namespace YaangVu\Constant;


class StatusJoinMeetingBeforeHostConstant
{
    const ANYTIME = "anytime"; 
    const FIVE_MINUTES = "5"; 
    const TEN_MINUTES = "10"; 

    const ALL
        = [
            self::ANYTIME, 
            self::FIVE_MINUTES, 
            self::TEN_MINUTES
        ];
}
