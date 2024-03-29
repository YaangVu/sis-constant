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

    public static function individualAssessment(string $action): string
    {
        return 'individual-assessment' . ':' . $action;
    }

    public static function overallAssessment(string $action): string
    {
        return 'overall-assessment' . ':' . $action;
    }

    public static function extendedExportation(string $action): string
    {
        return 'extended-exportation' . ':' . $action;
    }

    public static function studentInformation(string $action): string
    {
        return 'student-information' . ':' . $action;
    }

    public static function behavior(string $action): string
    {
        return 'behavior' . ':' . $action;
    }

    public static function enrollment(string $action): string
    {
        return 'enrollment' . ':' . $action;
    }

    public static function rosterReport(string $action): string
    {
        return 'roster-report' . ':' . $action;
    }

    public static function progressReport(string $action): string
    {
       return 'progress-report' . ':' . $action;
    }

    public static function zoomMeeting(string $action): string
    {
        return 'zoom-meeting' . ':' . $action;
    }

    public static function survey(string $action): string
    {
        return 'survey' . ':' . $action;
    }

    public static function taskManagement(string $action): string
    {
        return 'task-management' . ':' . $action;
    }

    public static function chat(string $action): string
    {
        return 'chat' . ':' . $action;
    }

    public static function setting(string $action): string
    {
        return 'setting' . ':' . $action;
    }

    public static function smsTemplate(string $action): string
    {
        return 'sms-template' . ':' . $action;
    }

    public static function communicationLogReport(string $action): string
    {
        return 'communication-log-report' . ':' . $action;
    }

    public static function smsSetting(string $action): string
    {
        return 'sms-setting' . ':' . $action;
    }
}