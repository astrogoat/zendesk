@if(Astrogoat\Zendesk\Settings\ZendeskSettings::isEnabled())
    <!-- [Zendesk] Start -->
    <script id="ze-snippet"
            src="https://static.zdassets.com/ekr/snippet.js?key={{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, 'app_id') }}"></script>

    <script type="text/javascript">
        const dep = '<?php echo json_encode(explode(',',settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "departments"))) ?>'
        let selectedDep = '<?php echo settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "selected_department") ?>'

        const departments = JSON.parse(dep)
        let selected = null;

        if(selectedDep.length>0){
                 selected = `select: "${selectedDep}"`
        }else{
            selected = '';
        }

        window.zESettings = {
            webWidget: {
                color: {
                    theme: '{{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "theme_color") }}',
                    header: '{{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class,"chat_top_bar_background_color")}}',
                    launcherText: '{{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class,"chat_top_bar_text_color")}}',
                },
                offset: {
                    horizontal: '{{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "widget_offset_left") }}'
                },
                contactOptions: {
                    enabled: {{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "contact_options")==1? "true" : "false" }}
                },
                chat: {
                    departments: {
                        enabled: departments,
                        selected
                    }
                }
            }
        };
    </script>
    <!-- [Zendesk] Start -->
@endif
