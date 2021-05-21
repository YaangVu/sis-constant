<?php


namespace YaangVu\Constant;


class RegexConstant
{
    const EMAIL = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; // email validate
    const PASSWORD = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,50}$/";
    const PHONE_NUMBER = "/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/";
    const ONLY_NUMERIC = "/(01)[0-9]{9}/";
}