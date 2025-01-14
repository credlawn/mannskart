<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Traits\EnumTo;
use App\Enums\Traits\StringBackedEnumTrait;

enum Introduction: string implements Contracts\WithStringBackedEnum
{
    use EnumTo;
    use StringBackedEnumTrait;

    case INITIALIZE = 'initialize';

    case LAST = 'last';
    case AFFILIATE_SEND = 'affiliate_send';
    case SELECT_PLAN = 'select_plan';
    case AI_WRITER = 'ai_writer';
    case AI_EDITOR = 'ai_editor';
    case AI_DOCUMENT = 'ai_document';
    case AI_EXT_CHATBOT = 'ai_ext_chatbot';
    case AI_VIDEO = 'ai_video';
    case AI_ARTICLE_WIZARD = 'ai_article_wizard';
    case AI_VISION = 'ai_vision';
    case AI_REWRITER = 'ai_rewriter';
    case AI_CHAT_IMAGE = 'ai_chat_image';
    case AI_CHAT = 'ai_chat';
    case AI_YOUTUBE = 'ai_youtube';
    case AI_RSS = 'ai_rss';
    case AI_SPEECH_TO_TEXT = 'ai_speech_to_text';
    case AI_VOICEOVER = 'ai_voiceover';
    case AI_VOICEOVER_CLONE = 'ai_voiceover_clone';
    case TEAM_MENU = 'team_menu';
    case BRAND_VOICE = 'brand_voice';
    case ADVANCED_IMAGE = 'advanced_image';
    case AI_VOICE_ISOLATOR = 'ai_voice_isolator';
    case AI_AVATAR = 'ai_avatar';
    case AI_AVATAR_PRO = 'ai_avatar_pro';
    case AI_FALL_VIDEO = 'ai_fall_video';
    case AI_REPLICA = 'ai_replica';
    case AI_MUSIC = 'ai_music';
    case AI_PRODUCT_SHOT = 'ai_product_shot';
    case USER_API_KEYS = 'user_api_keys';
    case AFFILIATES = 'affiliates';
    case SUPPORT = 'support';
    case INTEGRATION = 'integration';
    case AI_IMAGE = 'ai_image';
    case AI_PDF = 'ai_pdf';
    case AI_CODE = 'ai_code';

    public function label(): string
    {
        return match ($this) {
            self::INITIALIZE          => __('Onboarding'),
            self::LAST         		     => __('Onboarding End'),
            self::AFFILIATE_SEND      => __('Affiliate'),
            self::SELECT_PLAN         => __('Select Plan'),
            self::AI_WRITER           => __('AI Writer'),
            self::AI_IMAGE            => __('AI Image'),
            self::AI_PDF              => __('AI File Chat'),
            self::AI_CODE             => __('AI Code'),
            self::AI_EDITOR           => __('AI Editor'),
            self::AI_DOCUMENT         => __('Documents'),
            self::AI_EXT_CHATBOT      => __('AI Bots'),
            self::AI_VIDEO     		     => __('AI Video'),
            self::AI_ARTICLE_WIZARD   => __('AI Article Wizard'),
            self::AI_VISION           => __('AI Vision'),
            self::AI_REWRITER         => __('AI ReWriter'),
            self::AI_CHAT_IMAGE       => __('AI Chat Image'),
            self::AI_CHAT             => __('AI Chat'),
            self::AI_YOUTUBE          => __('AI YouTube'),
            self::AI_RSS              => __('AI RSS'),
            self::AI_SPEECH_TO_TEXT   => __('AI Speech to Text'),
            self::AI_VOICEOVER        => __('AI Voiceover'),
            self::AI_VOICEOVER_CLONE  => __('AI Voice Isolator'),
            self::AI_AVATAR  		       => __('AI Avatar'),
            self::AI_AVATAR_PRO  	    => __('AI Persona'),
            self::ADVANCED_IMAGE  	   => __('Advanced Image Editor'),
            self::BRAND_VOICE  	      => __('Brand Voice'),
            self::TEAM_MENU  	        => __('Team'),
            self::AI_FALL_VIDEO       => __('Fall Video'),
            self::AI_REPLICA  		      => __('AI Replica'),
            self::AI_MUSIC  	  	      => __('AI Music'),
            self::AI_PRODUCT_SHOT  	  => __('AI Product Photography'),
            self::USER_API_KEYS  	    => __('API Keys'),
            self::AFFILIATES  	  	    => __('Affiliates'),
            self::SUPPORT  	  	       => __('Support'),
            self::INTEGRATION  	  	   => __('Integration'),
        };
    }
}
