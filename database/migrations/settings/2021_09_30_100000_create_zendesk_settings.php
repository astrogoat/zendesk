<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateZendeskSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('zendesk.enabled', false);
        $this->migrator->add('zendesk.app_id', '');
    }

    public function down()
    {
        $this->migrator->delete('zendesk.enabled');
        $this->migrator->delete('zendesk.app_id');
    }
}
