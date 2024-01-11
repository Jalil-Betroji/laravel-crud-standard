<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
<?php include_once "../../layouts/heade.php" ?>

<div class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="nav-icon fas fa-table"></i> Modifier le Projet
                                    </h3>
                                </div>
                                @include('projects.form')
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>