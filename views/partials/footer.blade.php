{{-- Stats bar --}}
<div class="nova-stats">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-3 mb-md-0 nova-stat-item">
                <h2>{{ \Azuriom\Models\User::count() }}</h2>
                <p>Registered Players</p>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 nova-stat-item">
                <h2>{{ now()->year }}</h2>
                <p>Since {{ \Azuriom\Models\Setting::get('maintenance_message') ? 'maintenance' : now()->year }}</p>
            </div>
            <div class="col-md-4 nova-stat-item">
                <h2>
                    @php
                        try {
                            $status = \Azuriom\Models\Server::first();
                            echo $status ? $status->players : '0';
                        } catch (\Exception $e) {
                            echo '0';
                        }
                    @endphp
                </h2>
                <p>Connected Players</p>
            </div>
        </div>
    </div>
</div>

<footer class="nova-footer">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span>&copy; {{ date('Y') }} {{ theme_config('server_name', site_name()) }} &mdash; All Rights Reserved.</span>
            <span>Powered by <a href="https://azuriom.com" target="_blank" rel="noopener noreferrer">Azuriom</a></span>
        </div>
    </div>
</footer>
