<?php

namespace Astrogoat\Zendesk\Settings;

use Helix\Lego\Settings\AppSettings;

class ZendeskSettings extends AppSettings
{
    public string $app_id;
    public string $theme_color;
    public string $widget_text_color;
    public string $widget_offset_left;
    public bool $contact_options;
    public string $chat_top_bar_background_color;
    public string $chat_top_bar_text_color;
    public string $departments;
    public string $selected_department;

    protected array $rules = [
        'app_id' => ['required'],
        'theme_color' => ['nullable', 'regex:/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/i'],
        'widget_text_color' => ['nullable', 'regex:/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/i'],
        'widget_offset_left' => ['nullable'],
        'contact_options' => ['required'],
        'chat_top_bar_background_color' => ['nullable', 'regex:/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/i'],
        'chat_top_bar_text_color' => ['nullable', 'regex:/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/i'],
        'departments' => ['nullable'],
        'selected_department' => ['nullable'],
    ];

    public function description(): string
    {
        return 'Zendesk Support is a beautifully simple system for tracking, prioritizing, and solving customer support tickets.';
    }

    public function sections()
    {
        return [
            [
                'title' => 'Key',
                'properties' => 'app_id',
            ],
            [
                'title' => 'Widget Customization',
                'properties' => ['theme_color', 'widget_text_color', 'widget_offset_left'],
            ],
            [
                'title' => 'Chat Customization',
                'properties' => ['chat_top_bar_background_color', 'chat_top_bar_text_color'],
            ],
            [
                'title' => 'Extra Settings',
                'properties' => ['contact_options', 'departments','selected_department']
            ]
        ];
    }

    protected function help()
    {
        return [
            'theme_color' => 'The value should be a hex (#ffffff), this is used as base, determining the overall color scheme of the widget.',
            'widget_text_color' => 'The value should be a hex (#ffffff), sets the color of the widget text.',
            'widget_offset_left' => 'The value should be in px i.e 100px , this represents how far left you want the popup.',
            'chat_top_bar_background_color' => 'The value should be a hex (#ffffff), changes the background of the header when chat is opened.',
            'chat_top_bar_text_color' => 'The value should be a hex (#ffffff), changes the text color of the launcher.',
            'contact_options' => 'This will enable a contact option.',
            'departments' => 'This field should contain name of departments to enable separated by a comma (hr,finance) and lowercase only.',
            'selected_department' => 'This field should contain name of department to set by default.'

        ];
    }
}
