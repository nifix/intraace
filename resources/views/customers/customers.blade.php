@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-md-offset-0">
            <div class="card">
                <div class="card-header">
                    @if (!empty($team_id))
                        @foreach ($teams as $team)
                            @if ($team->id == $team_id)
                                Dossiers de {{ $team->name }}
                            @endif
                        @endforeach
                    @else
                        Dossiers du cabinet
                    @endif
                </div>

                <div class="card-body">
                    <table class="table table-bordered" id="customers-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Société</th>
                                <th>Adresse</th>
                                @if (empty($team_id))
                                    <th>Responsable(s)</th>
                                @endif
                                <th style="text-align:center">Avancement</th>
                                <th style="text-align:center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(function() {
    $('#customers-table').DataTable({
        processing: true,
        serverSide: true,
        @if (empty($team_id))
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'customer_name', name: 'customer_name' },
                { data: 'customer_lastname', name: 'customer_lastname' },
                { data: 'customer_company_name', name: 'customer_company_name' },
                { data: 'company_address', name: 'company_address' },
                { data: 'name', name: 'name' },
                { data: 'progress', name: 'progress' },
                { data: 'view', name: 'view', orderable: false, searchable: false }
            ]
        @else
        ajax: '{!! route('datatables.databyid', $team_id) !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'customer_name', name: 'customer_name' },
            { data: 'customer_lastname', name: 'customer_lastname' },
            { data: 'customer_company_name', name: 'customer_company_name' },
            { data: 'company_address', name: 'company_address' },
            { data: 'progress', name: 'progress' },
            { data: 'view', name: 'view', orderable: false, searchable: false },
        ]
        @endif

    });
});
</script>
@endpush

