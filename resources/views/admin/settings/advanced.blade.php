@extends('layouts.admin')
@include('partials/admin.settings.nav', ['activeTab' => 'advanced'])

@section('title')
    Advanced Settings
@endsection

@section('content-header')
    <h1>Avancerede indstillinger<small>Konfigurer avancerede indstillinger for Pterodactyl.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Settings</li>
    </ol>
@endsection

@section('content')
    @yield('settings::nav')
    <div class="row">
        <div class="col-xs-12">
            <form action="" method="POST">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">reCAPTCHA</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">Status</label>
                                <div>
                                    <select class="form-control" name="recaptcha:enabled">
                                        <option value="true">Aktiveret</option>
                                        <option value="false" @if(old('recaptcha:enabled', config('recaptcha.enabled')) == '0') selected @endif>Deaktiveret</option>
                                    </select>
                                    <p class="text-muted small">Hvis aktiveret, vil loginformularer og formularer til nulstilling af adgangskode udføre en tavs captcha-kontrol og vise en synlig captcha, hvis det er nødvendigt.</p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Side nøgle</label>
                                <div>
                                    <input type="text" required class="form-control" name="recaptcha:website_key" value="{{ old('recaptcha:website_key', config('recaptcha.website_key')) }}">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Hemmelig nøgle</label>
                                <div>
                                    <input type="text" required class="form-control" name="recaptcha:secret_key" value="{{ old('recaptcha:secret_key', config('recaptcha.secret_key')) }}">
                                    <p class="text-muted small">Bruges til kommunikation mellem dit websted og Google. Sørg for at holde det hemmeligt.</p>
                                </div>
                            </div>
                        </div>
                        @if($showRecaptchaWarning)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="alert alert-warning no-margin">
                                    Du bruger i øjeblikket reCAPTCHA-nøgler, der blev leveret med dette panel. For at forbedre sikkerheden anbefales det at <a href="https://www.google.com/recaptcha/admin">generere nye usynlige reCAPTCHA-nøgler</a>, der er knyttet specifikt til dit websted.
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">HTTP-forbindelser</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Forbindelsestimeout</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:guzzle:connect_timeout" value="{{ old('pterodactyl:guzzle:connect_timeout', config('pterodactyl.guzzle.connect_timeout')) }}">
                                    <p class="text-muted small">Mængden af ​​tid i sekunder, der skal vente på, at en forbindelse åbnes, før der opstår en fejl.</p>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Pause</label>
                                <div>
                                    <input type="number" required class="form-control" name="pterodactyl:guzzle:timeout" value="{{ old('pterodactyl:guzzle:timeout', config('pterodactyl.guzzle.timeout')) }}">
                                    <p class="text-muted small">Mængden af ​​tid i sekunder, der skal vente på, at en anmodning er fuldført, før der opstår en fejl.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Automatisk oprettelse af porte</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="control-label">Status</label>
                                <div>
                                    <select class="form-control" name="pterodactyl:client_features:allocations:enabled">
                                        <option value="false">Deaktiveret</option>
                                        <option value="true" @if(old('pterodactyl:client_features:allocations:enabled', config('pterodactyl.client_features.allocations.enabled'))) selected @endif>Aktiveret</option>
                                    </select>
                                    <p class="text-muted small">Hvis aktiveret, vil brugere have mulighed for automatisk at oprette nye porte til deres server.</p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Startport</label>
                                <div>
                                    <input type="number" class="form-control" name="pterodactyl:client_features:allocations:range_start" value="{{ old('pterodactyl:client_features:allocations:range_start', config('pterodactyl.client_features.allocations.range_start')) }}">
                                    <p class="text-muted small">Startporten i området, der kan tildeles automatisk.</p>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="control-label">Slutport</label>
                                <div>
                                    <input type="number" class="form-control" name="pterodactyl:client_features:allocations:range_end" value="{{ old('pterodactyl:client_features:allocations:range_end', config('pterodactyl.client_features.allocations.range_end')) }}">
                                    <p class="text-muted small">Slutporten i området, der kan tildeles automatisk.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-footer">
                        {{ csrf_field() }}
                        <button type="submit" name="_method" value="PATCH" class="btn btn-sm btn-primary pull-right">Gem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
