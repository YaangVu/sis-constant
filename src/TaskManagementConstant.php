<?php
/**
 * @Author kyhoang
 * @Date   Jun 23, 2022
 */

namespace YaangVu\Constant;

class TaskManagementConstant
{
    const REPORTED_BY_ME     = 'reported_by_me';
    const REVIEWED_BY_ME     = 'reviewed_by_me';
    const CREATED_BY_ME      = 'created_by_me';
    const PARTICIPATED_BY_ME = 'participated_by_me';

    const ALL_ACTION
        = [
            self::REPORTED_BY_ME, self::REVIEWED_BY_ME, self::CREATED_BY_ME, self::PARTICIPATED_BY_ME
        ];
}