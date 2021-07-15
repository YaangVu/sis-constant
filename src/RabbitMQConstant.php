<?php


namespace YaangVu\Constant;


class RabbitMQConstant
{
    const CREATE_USER                    = 'CREATE_USER';
    const UPDATE_USER                    = 'UPDATE_USER';
    const DELETE_USER                    = 'DELETE_USER';
    const CHANGE_USER_STATUS_TO_ACTIVE   = 'CHANGE_USER_STATUS_TO_ACTIVE';
    const CHANGE_USER_STATUS_TO_INACTIVE = "CHANGE_USER_STATUS_TO_INACTIVE";

    const ALL
        = [
            self::CREATE_USER,
            self::UPDATE_USER,
            self::DELETE_USER,
            self::CHANGE_USER_STATUS_TO_ACTIVE,
            self::CHANGE_USER_STATUS_TO_INACTIVE
        ];
}