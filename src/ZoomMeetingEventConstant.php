<?php
/**
 * @Author im.phien
 * @Date   Jul 01, 2022
 */

namespace YaangVu\Constant;

class ZoomMeetingEventConstant
{
    const LEFT_WAITING_ROOM = 'meeting.participant_left_waiting_room';
    const LEFT_MEETING_ROOM = 'meeting.participant_left';
    const JOIN_WAITING_ROOM = 'meeting.participant_join_waiting_room';
    const JOIN_MEETING_ROOM = 'meeting.participant_join';

    const ALL_EVENTS =
        [
          self::LEFT_MEETING_ROOM,
          self::JOIN_MEETING_ROOM,
          self::LEFT_WAITING_ROOM,
          self::JOIN_WAITING_ROOM
        ];
}