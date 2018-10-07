@extends('layouts.app')
{{-- estT --}}
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-0">
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
                                <th style="width:20px">ID</th>
                                <th>Société</th>
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
    $(function () {
        $('#customers-table').DataTable({
            processing: true,
            serverSide: true,
            @if(empty($team_id))
            ajax: '{!! route('datatables.data') !!}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'customer_company_name',
                    name: 'customer_company_name'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'progress',
                    name: 'progress'
                },
                {
                    data: 'view',
                    name: 'view',
                    orderable: false,
                    searchable: false
                }
            ]
            @else
            ajax: '{!! route('datatables.databyid', $team_id) !!}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'customer_company_name',
                    name: 'customer_company_name'
                },
                {
                    data: 'progress',
                    name: 'progress'
                },
                {
                    data: 'view',
                    name: 'view',
                    orderable: false,
                    searchable: false
                },
            ]
            @endif

        });
    });
</script>
@endpush
