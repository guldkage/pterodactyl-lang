@section('settings::notice')
    @if(config('pterodactyl.load_environment_only', false))
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-danger">
                Dit panel er i øjeblikket konfigureret til kun at læse indstillinger fra miljøet. Du skal indstille <code>APP_ENVIRONMENT_ONLY=falsk</code> i din miljøfil for at indlæse indstillinger dynamisk.
                </div>
            </div>
        </div>
    @endif
@endsection
