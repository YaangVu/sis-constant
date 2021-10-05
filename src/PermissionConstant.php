<?php
/**
 * @Author Edogawa Conan
 * @Date   Sep 04, 2021
 */

namespace YaangVu\Constant;

class PermissionConstant
{
    public static function role(string $action): string
    {
        return 'role' . ':' . $action;
    }

    public static function staff(string $action): string
    {
        return 'staff' . ':' . $action;
    }

    public static function student(string $action): string
    {
        return 'student' . ':' . $action;
    }

    public static function subject(string $action): string
    {
        return 'subject' . ':' . $action;
    }

    public static function graduationCategory(string $action): string
    {
        return 'graduation-category' . ':' . $action;
    }

    public static function program(string $action): string
    {
        return 'program' . ':' . $action;
    }

    public static function gradeScale(string $action): string
    {
        return 'grade-scale' . ':' . $action;
    }

    public static function term(string $action): string
    {
        return 'term' . ':' . $action;
    }

    public static function class(string $action): string
    {
        return 'class' . ':' . $action;
    }

    public static function calendar(string $action): string
    {
        return 'calendar' . ':' . $action;
    }

    public static function communication(string $action): string
    {
        return 'communication' . ':' . $action;
    }

    public static function attendance(string $action): string
    {
        return 'attendance' . ':' . $action;
    }

    public static function report(string $action): string
    {
        return 'report' . ':' . $action;
    }

    public static function scoreReport(string $action): string
    {
        return 'score-report' . ':' . $action;
    }

    public static function attendanceReport(string $action): string
    {
        return 'attendance-report' . ':' . $action;
    }

    public static function graduationStudents(string $action): string
    {
        return 'graduation-students' . ':' . $action;
    }

    public static function sriReport(string $action): string
    {
        return 'sri-report' . ':' . $action;
    }

    public static function sriSmi(string $action): string
    {
        return 'sri-smi' . ':' . $action;
    }
}