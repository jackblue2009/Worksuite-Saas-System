@php
    $viewPermission = user()->permission('view_zoom_meetings')
@endphp
@if (in_array(\Modules\Zoom\Entities\ZoomSetting::MODULE_NAME, user_modules()) && in_array($viewPermission, ['all', 'added', 'owned', 'both']))
    <x-menu-item icon="camera-video" :link="route('zoom-meetings.index')" :text="__('zoom::app.menu.zoomMeeting')" :addon="App::environment('demo')">
        <x-slot name="iconPath">
            <path fill-rule="evenodd"
                  d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
        </x-slot>
    </x-menu-item>
@endif



