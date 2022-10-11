<?php
/**
 * @Author This PC
 * @Date   Oct 11, 2022
 */

namespace YaangVu\Constant;

class ProgressLearningBehaviorConstant
{
    const RECALL_PREVIOUS_KNOWLEDGE          = 'recall_previous_knowledge';
    const UNDERSTAND_NEW_CONCEPT             = 'understand_new_concept';
    const PRODUCE_LANGUAGE_CONTENT_OUTPUT    = 'produce_language_content_output';
    const UNDERSTAND_AND_FOLLOW_INSTRUCTIONS = 'understand_and_follow_instructions';
    const ENGAGEMENT                         = 'engagement';

    const ALL
        = [
            self::RECALL_PREVIOUS_KNOWLEDGE,
            self::UNDERSTAND_NEW_CONCEPT,
            self::PRODUCE_LANGUAGE_CONTENT_OUTPUT,
            self::UNDERSTAND_AND_FOLLOW_INSTRUCTIONS,
            self::ENGAGEMENT
        ];
}