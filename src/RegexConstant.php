<?php


namespace YaangVu\Constant;


class RegexConstant
{
    const EMAIL = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    const PASSWORD = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,50}$/";
    const PHONE_NUMBER = "/^(0|\+84|84|\+1|1)((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\d{3})(\d{3})$/";
    const USERNAME = "/^[a-zA-Z0-9._- ]{1,50}$/";
}
