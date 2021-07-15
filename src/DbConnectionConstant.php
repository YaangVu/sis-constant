<?php


namespace YaangVu\Constant;


class DbConnectionConstant
{
    const SQL   = 'pgsql';
    const NOSQL = 'mongodb';
    const CACHE = 'redis';

    const ALL
        = [
            self::SQL,
            self::NOSQL,
            self::CACHE
        ];
}
