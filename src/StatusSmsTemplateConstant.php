<?php
/**
 * @Author Admin
 * @Date   Jul 11, 2022
 */

namespace YaangVu\Constant;

class StatusSmsTemplateConstant
{
    const QUEUE     = "queued";
    const SENT      = "sent";
    const DELIVERED = "delivered";
    const FAILED    = "failed";

    const ALl
        = [
            self::QUEUE,
            self::SENT,
            self::DELIVERED,
            self::FAILED,
        ];
}