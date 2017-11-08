<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 07/11/2017
 * Time: 11:47 AM
 */
?>
<script>
    $(".btn-desk").on('click',function () {
        $("#listarmesas").addClass('hidden');
        $("#detallemesa").removeClass('hidden');
    });
</script>
<div class="row row-md">
    <div id="listarmesas" class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
                Mesas
            </div>
            <div class="box-body">
                <button class="btn btn-default active btn-desk btn-lg"><i class="ion ion-android-radio-button-on"></i> Mesa 1</button>
                <button class="btn btn-warning btn-desk btn-lg"><i class="ion ion-android-radio-button-on"></i> Mesa 2</button>
                <button class="btn btn-default active btn-desk btn-lg"><i class="ion ion-android-radio-button-on"></i> Mesa 3</button>
                <button class="btn btn-warning btn-desk btn-lg"><i class="ion ion-android-radio-button-on"></i> Mesa 4</button>
                <button class="btn btn-default btn-desk btn-lg"><i class="ion ion-android-radio-button-on"></i> Mesa 5</button>
            </div>
        </div>
    </div>
    <div id="detallemesa" class="col-md-12 hidden">
        <div class="box box-success">
            <div class="box-header">
                <h4 class="box-title"><i class="ion ion-ios-list"></i> Detalle de Mesa: # 5</h4>
            </div>
            <div class="box-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control input-sm" placeholder="Buscar Cliente"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table  table-condensed ">
                                    <thead>
                                    <tr class="bg-black">
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Mi Producto</td>
                                        <td>$ 25.00</td>
                                        <td>3</td>
                                        <td>$ 75.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-right">Total</th>
                                        <th>$ 75.00</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-danger"> Cancelar</button>
                                <button class="btn btn-info"> Ver Factura</button>
                                <button class="btn btn-default"> Buscar</button>
                                <button class="btn btn-success"> Cobrar</button>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-8">
                        <div class="panel">

                            <!-- Nav tabs -->
                            <ul class="nav  nav-pills" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">+ Pedido</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bebidas</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Platillos</a></li>
                                <li role="presentation"><a href="#combos" aria-controls="messages" role="tab" data-toggle="tab">Combos</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">lo mas vendido</div>
                                <div role="tabpanel" class="tab-pane" id="profile">bebidas</div>
                                <div role="tabpanel" class="tab-pane" id="messages">Platillos</div>
                                <div role="tabpanel" class="tab-pane" id="combos">Combos en Platillos</div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
