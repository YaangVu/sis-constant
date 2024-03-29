<?php
/**
 * @Author yaangvu
 * @Date   Aug 16, 2021
 */

namespace YaangVu\Constant;

class SubjectTypeConstant
{
    const   NORMAL             = 'normal';
    const   HONORS             = 'honors';
    const   ADVANCED_PLACEMENT = 'advanced placement';
    const   STD_ELE            = 'STD-ELE';
    const   STD_MID            = 'STD-MID';
    const   HS                 = 'HS';
    const   ELD                = 'ELD';
    const   HONS_ELE           = 'HONS-ELE';
    const   HONS_MID           = 'HONS-MID';
    const   PREP_STD           = 'PREP-STD';
    const   CP                 = 'CP';
    const   AP                 = 'AP';
    const   CR                 = 'CR';
    const   HON                = 'HON';
    const   TR                 = 'TR';
    const   R                  = 'R';
    const   ST                 = 'ST';

    const ALL
        = [
            self::NORMAL,
            self::HONORS,
            self::ADVANCED_PLACEMENT
        ];
}