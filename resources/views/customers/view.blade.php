@extends('layouts.app')

@section('content')
<section id="tabs" class="project-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                            aria-controls="nav-home" aria-selected="true">Informations</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-avancement" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Avancement</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-remarques" role="tab"
                            aria-controls="nav-profile" aria-selected="false">Remarques</a>
                        <a class="nav-item nav-link" id="nav-todo-tab" data-toggle="tab" href="#nav-todo" role="tab"
                            aria-controls="nav-todo" aria-selected="false">TO-DO</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Informations générales</h5>
                                <hr>
                                <table class="cus-table-details" align="center">
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-id-card"></i></td>
                                        <td class="cus-table-details customer-td left-cell">ID Base de données</td>
                                        <td class="cus-table-details customer-td right-cell">{{ $customer_data[0]->id
                                            }}</td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fa fa-user"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Nom du client</td>
                                        <td class="cus-table-details customer-td right-cell">{{
                                            $customer_data[0]->customer_name }} {{ $customer_data[0]->customer_lastname
                                            }}</td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-building"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Société</td>
                                        <td class="cus-table-details customer-td right-cell">{{
                                            $customer_data[0]->customer_company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-map-marker-alt"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Adresse de la société</td>
                                        <td class="cus-table-details customer-td right-cell">{{
                                            $customer_data[0]->company_address }}</td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-user-tie"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Forme juridique</td>
                                        <td class="cus-table-details customer-td right-cell">{{
                                            $customer_data[0]->company_type }}</td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-hand-holding-usd"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Régime de TVA</td>
                                        <td class="cus-table-details customer-td right-cell">
                                            {{ $customer_data[0]->description }}
                                            @if ($customer_data[0]->deadline != 0)
                                            (Echéance au {{ $customer_data[0]->deadline }})
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="cus-table-details icon-customer"><i class="fas fa-user-friends"></i></td>
                                        <td class="cus-table-details customer-td left-cell">Portefeuille</td>
                                        <td class="cus-table-details customer-td right-cell">{{ $customer_data[0]->name
                                            }}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Dernières alertes</h5>
                                <hr>
                                <div class="card-text text-left">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:10%">Date</th>
                                                <th scope="col" style="max-size:200px">Alerte</th>
                                                <th scope="col" style="width:20%">Collaborateur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">08/10/2018</th>
                                                <td>Le client Johnny Lafrite ne répond toujours pas aux appels, fin de mission.</td>
                                                <td>Cedric</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">07/10/2018</th>
                                                <td>Plus de contact ?????</td>
                                                <td>Cedric</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">06/10/2018</th>
                                                <td>Plus de nouvelles :(</td>
                                                <td>Cédric</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-avancement" role="tabpanel" aria-labelledby="nav-avancement-tab">
                        <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="card">
                                <div class="card-body text-center">
                                        <h5 class="card-title">{{ $customer_data[0]->customer_company_name }} - Avancement de la saisie 2018</h5>
                                        <hr>
                                    <ul class="progress-indicator custom-complex">
                                        @for ($i = 1; $i <= 12; $i++) @if ($i <=$customer_data[1]) <li class="completed">
                                            @else
                                            <li>
                                                @endif
                                                <span class="bubble"></span>
                                                {{ $customer_data[2][$i] }}
                                            </li>
                                            @endfor
                                    </ul>
                                </div>
                            </div>
                            <div class="card mt-3">
                                    <div class="card-body text-center">
                                            <h5 class="card-title">{{ $customer_data[0]->customer_company_name }} - Avancement de la TVA 2018</h5>
                                            <hr>
                                    <ul class="progress-indicator custom-complex custom-complex-fisc">
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            JAN
                                        </li>
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            FEV
                                        </li>
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            MAR
                                        </li>
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            AVR
                                        </li>
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            MAI
                                        </li>
                                        <li class="completed">
                                            <span class="bubble"></span>
                                            JUIN
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            JUIL
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            AOUT
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            SEPT
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            OCT
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            NOV
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            DDEC
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-remarques" role="tabpanel" aria-labelledby="nav-remarques-tab">
                            <div class="card mt-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Remarques des collaborateurs</h5>
                                        <hr>
                                        <div class="card-text text-left">
                                            Placeholder des remarques ! :D
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="nav-todo" role="tabpanel" aria-labelledby="nav-todo-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Contest Name</th>
                                        <th>Date</th>
                                        <th>Award Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
