<?php


namespace YaangVu\Constant;


class CodeConstant
{
    const UUID  = 'uuid'; // uuid code
    const SC_ID = "sc_id"; // school code
    const UID   = "uid"; // user code
    const SID   = "sid"; // student code
    const CID   = "cid"; // class code
    const TID   = 'tid'; // term code
    const CO_ID = "co_id"; // course code
    const PID   = "pr_id"; // program code
    const EX_ID = 'external_id'; //external system ID
    const LID   = 'lid'; // LMS system ID

    const ALL
        = [
            self::UUID,
            self::SC_ID,
            self::UID,
            self::SID,
            self::CID,
            self::TID,
            self::CO_ID,
            self::PID,
            self::EX_ID,
            self::LID
        ];
}
