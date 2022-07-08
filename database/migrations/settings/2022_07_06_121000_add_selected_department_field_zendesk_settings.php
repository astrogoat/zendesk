<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class AddSelectedDepartmentFieldZendeskSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('zendesk.selected_department', '');
    }

    public function down()
    {
        $this->migrator->delete('zendesk.selected_department');

    }
}
