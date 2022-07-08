<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class AddDynamicFieldsZendeskSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('zendesk.theme_color', '');
        $this->migrator->add('zendesk.widget_text_color', '');
        $this->migrator->add('zendesk.widget_offset_left', '');
        $this->migrator->add('zendesk.contact_options',false);
        $this->migrator->add('zendesk.chat_top_bar_background_color', '');
        $this->migrator->add('zendesk.chat_top_bar_text_color', '');
        $this->migrator->add('zendesk.departments', '');
    }

    public function down()
    {
        $this->migrator->delete('zendesk.theme_color');
        $this->migrator->delete('zendesk.widget_text_color');
        $this->migrator->delete('zendesk.widget_offset_left');
        $this->migrator->delete('zendesk.chat_top_bar_background_color');
        $this->migrator->delete('zendesk.chat_top_bar_text_color');
        $this->migrator->delete('zendesk.contact_options');
        $this->migrator->delete('zendesk.department');
    }
}
