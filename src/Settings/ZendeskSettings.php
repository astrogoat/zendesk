<?php

namespace Astrogoat\Zendesk\Settings;

use Helix\Lego\Settings\AppSettings;

class ZendeskSettings extends AppSettings
{
    public string $app_id;
    public string $widget_background_color_hex;
    public string $widget_text_color_hex;
    public string $widget_offset_left;
    public string $contact_options;
    public string $chat_top_bar_background_color_hex;
    public string $chat_top_bar_text_color_hex;
    public string $chat_background_color_hex;
    public string $enable_departments;
//    public string $departments_enabled;

    protected array $rules = [
        'app_id' => ['required'],
        'widget_background_color_hex' => ['nullable'],
        'widget_text_color_hex' => ['nullable'],
        'widget_offset_left'=>['nullable'],
        'contact_options'=>['required'],
        'chat_top_bar_background_color_hex' => ['nullable'],
        'chat_top_bar_text_color_hex' => ['nullable'],
        'chat_background_color_hex' => ['nullable'],
        'enable_departments' => ['nullable'],
//        'departments_enabled' => ['nullable'],

    ];

    protected function help(){
        return [
            'widget_offset_left'=>'The value should be in px i.e 100px , this represents how far left you want the popup',
            'contact_options'=> 'The value is either true or false. this will enable a contact option',
            'enable_departments'=>'The value is either true or false. This will enable you choose departments or disable this feature',
//            'departments_enabled'=>'This field should contain name of departments to enable seperated by a ,'

        ];
    }

    public function description(): string
    {
        return 'Zendesk Support is a beautifully simple system for tracking, prioritizing, and solving customer support tickets.';
    }
}
