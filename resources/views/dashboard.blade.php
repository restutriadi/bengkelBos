<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Main CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <div>
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Bengkel Bos" style="width: 80%;"/>
                </a>
            </div>
            <div>
                <nav class="navbar-sidebar">
                    <ul class="navbar-list">
                        <li>
                            <i><img src="{{ asset('assets/img/icon/ico_dashboard.png') }}"></i>Dashboard
                        </li>
                        <li>
                            <i><img src="{{ asset('assets/img/icon/ico_users.png') }}"></i>Customer
                        </li>
                        <li>
                            <i><img src="{{ asset('assets/img/icon/ico_pesanan.png') }}"></i>Order
                        </li>
                        <li>
                            <i><img src="{{ asset('assets/img/icon/mdi_build.png') }}"></i>CS - 58
                        </li>
                        <li class="active">
                            <i><img src="{{ asset('assets/img/icon/ico_inventory.png') }}"></i>Inventory
                        </li>
                        <div class="user-data" style="padding-top: 45px;">
                            <p style="color: #58bfa0;">Bengkel</p>
                            <p>BOS Kedoya</p>
                        </div>
                        <div class="user-data" style="padding-bottom: 15px;">
                            <p style="color: #58bfa0;">SR / NIK</p>
                            <p>Rachmat Hidayat</p>
                            <p>1234567890</p>
                        </div>
                        <li>
                            <i><img src="{{ asset('assets/img/icon/mdi_exit_to_app.png') }}"></i>LOGOUT
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-bar">
                                    <h1><strong>Dashboard</strong></h1>
                                    <p class="small">02 FEB 2020 - 15:15:15</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" style="padding-right: 7.5px;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Fast Moving</strong>
                                        <p class="subtext">Last Update: 7 Januari 2021</p>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="knob" value="35" data-width="150" data-height="150" data-fgColor="#58BFA0" data-readonly="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="padding-right: 7.5px; padding-left: 7.5px;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Medium Moving</strong>
                                        <p class="subtext">Last Update: 7 Januari 2021</p>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="knob" value="45" data-width="150" data-height="150" data-fgColor="#ec9023" data-readonly="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" style="padding-left: 7.5px;">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Slow Moving</strong>
                                        <p class="subtext">Last Update: 7 Januari 2021</p>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="knob" value="20" data-width="150" data-height="150" data-fgColor="#fc8787" data-readonly="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-name">
                                    <p class="medium" style="padding-right: 25px"><strong>INVENTORY LIST</strong></p>
                                    <p class="small subtext">Last Update: 7 Januari 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-border">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 7%">
                                                    <div class="column-name">
                                                        Alarm
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-left">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/Down.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 11%">
                                                    <div class="column-name">
                                                        Status Moving
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 12%">
                                                    <div class="column-name">
                                                        No SKU
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 8%">
                                                    <div class="column-name">
                                                        Kategori
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 9%">
                                                    <div class="column-name">
                                                        Nama Item
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 8%">
                                                    <div class="column-name">
                                                        Demand
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 6%">
                                                    <div class="column-name">
                                                        Min
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 6%">
                                                    <div class="column-name">
                                                        Max
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 6%">
                                                    <div class="column-name">
                                                        Stock
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th style="width: 9%">
                                                    <div class="column-name">
                                                        On Order
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="column-name">
                                                        Lead Time
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="column-name">
                                                        Sgt. Order
                                                        <span><img src="{{ asset('assets/img/icon/ico_sort.png') }}" style="height: 16px;"></span>
                                                    </div>
                                                    <div class="input-container-right">
                                                        <input type="text">
                                                        <img src="{{ asset('assets/img/icon/mdi_search.png') }}" alt="">
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="dot-orange"></span></td>
                                                <td>Slow</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>14 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-green"></span></td>
                                                <td>Slow</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Oli</td>
                                                <td style="text-align: left;">Shell Helix</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>8 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-green"></span></td>
                                                <td>Medium</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Corsa</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>10 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-orange"></span></td>
                                                <td>Fast</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>8 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-red"></span></td>
                                                <td>Fast</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>8 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-orange"></span></td>
                                                <td>Slow</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>7 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-green"></span></td>
                                                <td>Medium</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>12 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-green"></span></td>
                                                <td>Fast</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>9 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-red"></span></td>
                                                <td>Slow</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>17 Hari</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td><span class="dot-red"></span></td>
                                                <td>Slow</td>
                                                <td style="text-align: left;">SKU-ABCDE123456</td>
                                                <td style="text-align: left;">Ban</td>
                                                <td style="text-align: left;">Ban Achilles</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>50</td>
                                                <td>20</td>
                                                <td>6 Hari</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination">
                                    <img src="{{ asset('assets/img/icon/right-arrow.png') }}" alt="" style="transform:  scaleX(-1)">
                                    <div class="small" style="padding-left: 20px;">Prev</div>
                                    <div class="small circle active">1</div>
                                    <div class="circle small">2</div>
                                    <div class="circle small">3</div>
                                    <div class="circle small">4</div>
                                    <div class="circle small">5</div>
                                    <div class="small" style="padding-right: 20px;">Next</div>
                                    <img src="{{ asset('assets/img/icon/right-arrow.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                    Copyright &copy 2020 Bengkel BOS - Bengkel Hemat dan Baik (PT Penta Artha Impresi). All rights reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/jquery-3.2.1.min.js') }}"></script>
    <!-- jQuery Knob -->
    <script src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>

    <script>
        $(function () {
            /* jQueryKnob */

            $(".knob").knob({
                draw: function () {

                }
            });
            /* END JQUERY KNOB */
        });
    </script>
</body>

</html>
<!-- end document-->
