<?php
/**
 * @Author Dung
 * @Date   Mar 24, 2022
 */

namespace YaangVu\Constant;

class CommunicationLogConstant
{
    const       ZALO      = 'Zalo';
    const       PHONECALL = 'Phone-call';
    const       EMAIL     = 'Email';
    const       ZOOM      = 'Zoom-meeting';
    const       ACADEMIC  = 'Academic';
    const       BEHAVIOR  = 'Behavior';
    const       OTHER     = 'Other';
    const       METHODS
                          = [
            self::ZALO,
            self::PHONECALL,
            self::EMAIL,
            self::ZOOM

        ];

    const      CONCERNS
        = [
            self::ACADEMIC,
            self::BEHAVIOR,
            self::OTHER
        ];

}