@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 offset-md-0">
                            <ul class="timeline">
                                <li>
                                    <a target="_blank" href="#">RENAT</a>
                                    <a href="#" class="float-right">Cédric le 08/10/2018</a>
                                    <p>Estimation de la TVA d'Octobre à la demande du client. Le montant s'élève à 2 547€ (sans tenir compte
                                        des différents taux de TVA des ventes).
                                    </p>
                                </li>
                                <li>
                                    <a href="#">MEDICA</a>
                                    <a href="#" class="float-right">Emmanuelle le 07/10/2018</a>
                                    <p>Liquidation en cours. Dossier comptable propre, vu avec clients. Ajout de la demande d'informations sur l'intranet</p>
                                </li>
                                <li>
                                    <a href="#">Ze Kitchen</a>
                                    <a href="#" class="float-right">Cédric le 07/10/2018</a>
                                    <p>Saisie en attente à la demande de Pascale Bonnet.</p>
                                </li>
                                <li>
                                    <a href="#">CCLM</a>
                                    <a href="#" class="float-right">Cédric le 06/10/2018</a>
                                    <p>Saisie à jour, demande d'informations effectuée le 04.10.18</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
