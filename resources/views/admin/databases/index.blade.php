@extends('layouts.admin')

@section('title')
    Database Hosts
@endsection

@section('content-header')
    <h1>Database Host<small>Databasehost, som servere kan have databaser oprettet på.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">Database Hosts</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste</h3>
                <div class="box-tools">
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#newHostModal">Opret ny</button>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Navn</th>
                            <th>IP adresse</th>
                            <th>Port</th>
                            <th>Brugernavn</th>
                            <th class="text-center">Antal Databaser</th>
                            <th class="text-center">Låst til maskinen</th>
                        </tr>
                        @foreach ($hosts as $host)
                            <tr>
                                <td><code>{{ $host->id }}</code></td>
                                <td><a href="{{ route('admin.databases.view', $host->id) }}">{{ $host->name }}</a></td>
                                <td><code>{{ $host->host }}</code></td>
                                <td><code>{{ $host->port }}</code></td>
                                <td>{{ $host->username }}</td>
                                <td class="text-center">{{ $host->databases_count }}</td>
                                <td class="text-center">
                                    @if(! is_null($host->node))
                                        <a href="{{ route('admin.nodes.view', $host->node->id) }}">{{ $host->node->name }}</a>
                                    @else
                                        <span class="label label-default">None</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="newHostModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.databases') }}" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Opret ny Database Host</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pName" class="form-label">Navn</label>
                        <input type="text" name="name" id="pName" class="form-control" />
                        <p class="text-muted small">En kort identifikator, der bruges til at skelne denne placering fra andre. Skal være mellem 1 og 60 tegn, f.eks. <code>us.nyc.lvl3</code>.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pHost" class="form-label">IP adresse</label>
                            <input type="text" name="host" id="pHost" class="form-control" />
                            <p class="text-muted small">IP-adressen eller FQDN, der skal bruges, når du forsøger at oprette forbindelse til denne MySQL-host <em>fra panelet</em> for at tilføje nye databaser.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="pPort" class="form-label">Port</label>
                            <input type="text" name="port" id="pPort" class="form-control" value="3306"/>
                            <p class="text-muted small">Porten som MySQL kører på for denne host.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pUsername" class="form-label">Brugernavn</label>
                            <input type="text" name="username" id="pUsername" class="form-control" />
                            <p class="text-muted small">Brugernavnet på en konto, der har nok tilladelser til at oprette nye brugere og databaser på systemet.</p>
                        </div>
                        <div class="col-md-6">
                            <label for="pPassword" class="form-label">Password</label>
                            <input type="password" name="password" id="pPassword" class="form-control" />
                            <p class="text-muted small">Adgangskoden til den definerede konto.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pNodeId" class="form-label">Låst til en maskine</label>
                        <select name="node_id" id="pNodeId" class="form-control">
                            <option value="">Nej</option>
                            @foreach($locations as $location)
                                <optgroup label="{{ $location->short }}">
                                    @foreach($location->nodes as $node)
                                        <option value="{{ $node->id }}">{{ $node->name }}</option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                        <p class="text-muted small">Denne indstilling gør intet andet end standard til denne database host, når du tilføjer en database til en server på den valgte maskine.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-danger small text-left">Den konto, der er defineret for denne database host, <strong>skal</strong> have tilladelsen <code>WITH GRANT OPTION</code>. Hvis den definerede konto ikke har denne tilladelse, <em>vil</em> anmodninger om at oprette databaser mislykkes. <strong>Brug ikke de samme kontooplysninger til MySQL, som du har defineret for dette panel.</strong></p>
                    {!! csrf_field() !!}
                    <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Afbryd</button>
                    <button type="submit" class="btn btn-success btn-sm">Opret</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    @parent
    <script>
        $('#pNodeId').select2();
    </script>
@endsection
