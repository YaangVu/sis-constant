<?php


namespace YaangVu\Constant;


class NotificationConstant
{
    const USERNAME      = '${username}';
    const EMAIL         = '${email}';
    const FULL_NAME     = '${full_name}';
    const STAFF_ID      = '${staffID}';
    const STUDENT_ID    = '${studentID}';
    const STUDENT_GRADE = '${grade}';

    const ALL
        = [
            self::USERNAME,
            self::EMAIL,
            self::FULL_NAME,
            self::STAFF_ID,
            self::STUDENT_ID,
            self::STUDENT_GRADE,
        ];
}