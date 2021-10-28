<?php

namespace Astrogoat\Zendesk\Settings;

use Helix\Lego\Settings\AppSettings;

class ZendeskSettings extends AppSettings
{
    public string $app_id;

    protected array $rules = [
        'app_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Zendesk Support is a beautifully simple system for tracking, prioritizing, and solving customer support tickets.';
    }
}
