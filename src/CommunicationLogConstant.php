<?php
/**
 * @Author Dung
 * @Date   Mar 24, 2022
 */

namespace YaangVu\Constant;

class CommunicationLogConstant
{
    const       ZALO                 = 'Zalo';
    const       PHONECALL            = 'Phone-call';
    const       EMAIL                = 'Email';
    const       ZOOM                 = 'Zoom-meeting';
    const       ACADEMIC             = 'Academic';
    const       BEHAVIOR             = 'Behavior';
    const       OTHER                = 'Others';
    const       FACE_TO_FACE         = 'Face-to-face';
    const       MESSENGER            = 'Messenger';
    const       WHATSAPP             = 'Whatsapp';
    const       ATTENDANCE           = 'Attendance';
    const       HOMEWORK             = 'Homework';
    const       ACADEMIC_PERFORMANCE = 'Academic-performance';
    const       EXTRACURRICULAR      = 'Extracurricular';
    const       PARENTS_FEEDBACK     = 'Parents Feedback';
    const       STUDENT_ACCOUNT      = 'Students_account';
    const       METHODS
                                     = [
            self::ZALO,
            self::PHONECALL,
            self::EMAIL,
            self::ZOOM,
            self::FACE_TO_FACE,
            self::MESSENGER,
            self::WHATSAPP,
            self::OTHER,

        ];

    const      CONCERNS
        = [
            self::ACADEMIC,
            self::BEHAVIOR,
            self::ATTENDANCE,
            self::HOMEWORK,
            self::ACADEMIC_PERFORMANCE,
            self::EXTRACURRICULAR,
            self::PARENTS_FEEDBACK,
            self::STUDENT_ACCOUNT,
            self::OTHER
        ];

}