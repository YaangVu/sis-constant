<?php


namespace YaangVu\Constant;


class NotificationConstant
{
    const USERNAME     = '${username}';
    const EMAIL        = '${email}';
    const FULLNAME     = '${full_name}';
    const STAFFID      = '${staffID}';
    const STUDENTID    = '${studentID}';
    const STUDENTGRADE = '${grade}';

    const ALL
        = [
            self::USERNAME,
            self::EMAIL,
            self::FULLNAME,
            self::STAFFID,
            self::STUDENTID,
            self::STUDENTGRADE,
        ];
}