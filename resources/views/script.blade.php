@if(Astrogoat\Zendesk\Settings\ZendeskSettings::isEnabled())


    <!-- Start of helixsleep Zendesk Widget script -->
    <script id="ze-snippet"
            src="https://static.zdassets.com/ekr/snippet.js?key={{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, 'app_id') }}"></script>

    <script type="text/javascript">
        const dep = '<?php echo json_encode(explode(',',settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, "departments"))) ?>'

        const departments = JSON.parse(dep)

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
                        enabled: departments, //will hide the Department dropdown
                        // select: 'Brooklyn Agents' //selects Brooklyn agents department in the background
                    }
                }
            }
        };
    </script>
    <!-- End of helixsleep Zendesk Widget script -->
@endif
