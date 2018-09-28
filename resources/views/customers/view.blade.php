@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-0">
                <div class="card">
                    <div class="card-header">
                        Dossier : {{ $customer_data[0]->customer_company_name }}
                    </div>
                    <div class="card-body">
                            <div style="text-align:center">
                        <table class="table table-borderless" style="text-align:left">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">ID du client</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->id }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Nom du client</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->customer_name }} {{ $customer_data[0]->customer_lastname }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Nom de la société</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->customer_company_name }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Adresse de la société</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->company_address }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Forme juridique</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->company_type }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Régime de TVA</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->description }}
                                            @if ($customer_data[0]->deadline != 0)
                                                (Echéance au {{ $customer_data[0]->deadline }})
                                            @endif
                                            " disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend" style="width:180px">
                                                <div class="input-group-text" style="width:100%">Portefeuille</div>
                                            </div>
                                            <input type="text" style="background: white;" class="form-control" id="inlineFormInputGroup" placeholder="{{ $customer_data[0]->name }}"
                                                disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="text-align:left; padding-bottom:3px">Avancement de la saisie (2018)</div>
                                        <ul class="progress-indicator custom-complex">
                                            @for ($i = 1; $i < 12; $i++)
                                                @if ($i <= $customer_data[1])
                                                    <li class="completed">
                                                @else
                                                    <li>
                                                @endif
                                                <span class="bubble"></span>
                                                {{ $customer_data[2][$i] }}
                                                </li>
                                            @endfor
                                        </ul>
                                        <div style="text-align:left; padding-bottom:3px">Avancement des TVA (2018)</div>
                                        <ul class="progress-indicator custom-complex custom-complex-fisc">
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    <i class="fa fa-check-circle"></i>
                                                    Janvier
                                                </li>
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    <i class="fa fa-check-circle"></i>
                                                    Février
                                                </li>
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    <i class="fa fa-check-circle"></i>
                                                    Mars
                                                </li>
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    <i class="fa fa-check-circle"></i>
                                                    Avril
                                                </li>
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    Mai
                                                </li>
                                                <li class="completed">
                                                    <span class="bubble"></span>
                                                    Juin
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Juillet
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Août
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Septembre
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Octobre
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Novembre
                                                </li>
                                                <li>
                                                    <span class="bubble"></span>
                                                    Décembre
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@push('scripts')
@endpush

