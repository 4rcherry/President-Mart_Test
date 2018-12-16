<!-- START Template Main -->
<section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Dashboard</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row mb15">
                    <div class="col-sm-12">
                        <!-- Stats carousel -->
                        <div class="owl-carousel" id="stats">
                            <!-- stat #1 -->
                            <div class="item panel no-border">
                                <div class="panel-body">
                                    <h4 class="semibold nm"><i class="ico-users mr5"></i>New Clients</h4>
                                    <h2 class="thin mt5 text-muted">+<span data-toggle="counterup">542</span></h2>
                                    <!-- chart -->
                                    <div class="chart" style="height:120px;" id="stats1"></div>
                                    <!--/ chart -->
                                </div>
                            </div>
                            <!--/ stat #1 -->

                            <!-- stat #2 -->
                            <div class="item panel no-border">
                                <div class="panel-body">
                                    <h4 class="semibold nm"><i class="ico-coins mr5"></i>Total Sales</h4>
                                    <h2 class="thin mt5 text-muted">$<span data-toggle="counterup">783,370</span></h2>
                                    <!-- chart -->
                                    <div class="chart" style="height:120px;" id="stats2"></div>
                                    <!--/ chart -->
                                </div>
                            </div>
                            <!--/ stat #2 -->

                            <!-- stat #3 -->
                            <div class="item panel no-border">
                                <div class="panel-body">
                                    <h4 class="semibold nm"><i class="ico-calculate2 mr5"></i>Conversion Rate</h4>
                                    <h2 class="thin mt5 text-muted"><span data-toggle="counterup">10.543</span>%</h2>
                                    <!-- chart -->
                                    <div class="chart" style="height:120px;" id="stats3"></div>
                                    <!--/ chart -->
                                </div>
                            </div>
                            <!--/ stat #3 -->

                            <!-- stat #4 -->
                            <div class="item panel no-border">
                                <div class="panel-body">
                                    <h4 class="semibold nm"><i class="ico-coin mr5"></i>Net Profit</h4>
                                    <h2 class="thin mt5 text-muted">$<span data-toggle="counterup">256,795</span></h2>
                                    <!-- chart -->
                                    <div class="chart" style="height:120px;" id="stats4"></div>
                                    <!--/ chart -->
                                </div>
                            </div>
                            <!--/ stat #4 -->

                            <!-- stat #5 -->
                            <div class="item panel no-border">
                                <div class="panel-body">
                                    <h4 class="semibold nm"><i class="ico-bag mr5"></i>Orders</h4>
                                    <h2 class="thin mt5 text-muted"><span data-toggle="counterup">5,961</span></h2>
                                    <!-- chart -->
                                    <div class="chart" style="height:120px;" id="stats5"></div>
                                    <!--/ chart -->
                                </div>
                            </div>
                            <!--/ stat #5 -->
                        </div>
                        <!--/ Stats carousel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">Customer Location</h3>
                            </div>
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="world-map-markers" style="height:400px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row mt10">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Order lists</h3>
                            </div>
                            <table class="table table-striped" id="order-list">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Reference</th>
                                        <th>Delivery</th>
                                        <th>Customer</th>
                                        <th>Total</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td><span class="text-primary">DD287E17D5F9</span></td>
                                        <td>Cambodia</td>
                                        <td>Rafael Johnston</td>
                                        <td>$92.86</td>
                                        <td>Bank Wire</td>
                                        <td><span class="label label-success">paid</span></td>
                                        <td>Jun 12, 2013</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><span class="text-primary">C90B06C7E83B</span></td>
                                        <td>Guinea</td>
                                        <td>Otto Glass</td>
                                        <td>$45.52</td>
                                        <td>Paypal</td>
                                        <td><span class="label label-success">paid</span></td>
                                        <td>Feb 12, 2014</td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><span class="text-primary">336DC5ED6271</span></td>
                                        <td>Haiti</td>
                                        <td>Clarke Donovan</td>
                                        <td>$30.48</td>
                                        <td>Bank Wire</td>
                                        <td><span class="label label-warning">pending</span></td>
                                        <td>Feb 13, 2014</td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td><span class="text-primary">A50927A89D48</span></td>
                                        <td>Austria</td>
                                        <td>Brielle Skinner</td>
                                        <td>$52.31</td>
                                        <td>Bank Wire</td>
                                        <td><span class="label label-success">done</span></td>
                                        <td>May 26, 2014</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="ID"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Reference"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Delivery"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Customer"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Total"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Payment"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Status"></th>
                                        <th><input type="search" class="form-control" name="search_engine" placeholder="Date"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><i class="ico-globe mr5"></i>Traffic</h5>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">Visits <span class="semibold pull-right">47650</span></li>
                                <li class="list-group-item">Unique Visitors <span class="semibold pull-right">28590</span></li>
                                <li class="list-group-item">
                                    <p>Traffic Sources</p>
                                    <p class="mb5 clearfix">
                                        <i class="ico-circle mr5 text-primary"></i>PRESTASHOP.COM
                                        <span class="pull-right semibold">23825</span>
                                    </p>
                                    <p class="mb5 clearfix">
                                        <i class="ico-circle mr5 text-success"></i>GOOGLE.COM
                                        <span class="pull-right semibold">15883</span>
                                    </p>
                                    <p class="mb5 clearfix">
                                        <i class="ico-circle mr5 text-danger"></i>DIRECT TRAFFIC
                                        <span class="pull-right semibold">11912</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><i class="ico-clock mr5"></i>Currently pending</h5>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">Orders <span class="semibold pull-right">5</span></li>
                                <li class="list-group-item">Return/Exchanges <span class="semibold pull-right">4</span></li>
                                <li class="list-group-item">Abandoned Carts <span class="semibold pull-right">13</span></li>
                                <li class="list-group-item">Out of Stock Products <span class="semibold pull-right">8</span></li>
                                <li class="list-group-item">New Customers <span class="semibold pull-right">32</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->