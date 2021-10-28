@if(Astrogoat\Zendesk\Settings\ZendeskSettings::isEnabled())
    <!-- Start of helixsleep Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key={{ settings(Astrogoat\Zendesk\Settings\ZendeskSettings::class, 'app_id') }}"></script>
    <!-- End of helixsleep Zendesk Widget script -->
@endif
