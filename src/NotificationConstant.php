<?php


namespace YaangVu\Constant;


class NotificationConstant
{
    const USERNAME                  = '${username}';
    const EMAIL                     = '${email}';
    const FULL_NAME                 = '${full_name}';
    const STAFF_ID                  = '${staff_id}';
    const STUDENT_ID                = '${student_id}';
    const STUDENT_GRADE             = '${student_grade}';
    const NOTIFICATION_EMAIL        = 'email';
    const NOTIFICATION_ANNOUNCEMENT = 'announcement';

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