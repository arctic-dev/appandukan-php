@extends('layouts.superadmin')
@section('content')


<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
        <h1>&nbsp;</h1>
            <ol class="breadcrumb col-sm-6">
                 <li><a href="<?php echo url('superadmin/dashboard');?>">Superadmin</a></li>
        <li>Pan Card</li>
        <li>Pan Card overiew</li>
            </ol>

            
           
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="#">
                                <div class="tiles-heading">Profit</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top"></span>XXX</div>
                                    <small>+8.7% from last period</small>
                                </div>
                                <div class="tiles-footer">more info</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-success" href="#">
                                <div class="tiles-heading">Revenue</div>
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-money"></i-->
                                    <div class="text-center"><span class="text-top"></span>XXX<span class="text-smallcaps"></span></div>
                                    <small>-13.5% from last week</small>
                                </div>
                                <div class="tiles-footer">go to accounts</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-orange" href="#">
                                <div class="tiles-heading">Members</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-group"></i>
                                    <div class="text-center">XXX</div>
                                    <small>new users registered</small>
                                </div>
                                <div class="tiles-footer">manage members</div>
                            </a>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-alizarin" href="#">
                                <div class="tiles-heading">Orders</div>
                                <div class="tiles-body-alt">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="text-center">XXX</div>
                                    <small>new orders received</small>
                                </div>
                                <div class="tiles-footer">manage orders</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">User Report <small>(weekly)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">this week</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">previous week</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="site-statistics" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-grape">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Annual Sales <small>(by quarter)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">2012</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2011</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2010</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="budget-variance" style="height:250px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Site Reports <small>(overview)</small></h4>
                                    <div class="pull-right">
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-refresh"></i></a>
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-wrench"></i></a>
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-cog"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexvisits" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">7,451</h3>
                                    <p style="text-align: center; margin: 0;">Visits</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexpageviews" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">35,711</h3>
                                    <p style="text-align: center; margin: 0;">Page Views</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexpagesvisit" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">6.92</h3>
                                    <p style="text-align: center; margin: 0;">Pages / Visit</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexavgvisit" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">00:04:17</h3>
                                    <p style="text-align: center; margin: 0;">Average Visit Time</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexnewvisits" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">71.27%</h3>
                                    <p style="text-align: center; margin: 0;">New Visits</p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexbouncerate" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">31.08%</h3>
                                    <p style="text-align: center; margin: 0;">Bounce Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-grape">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Visitor Statistics <small>(overview)</small></h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" id="updatePieCharts" class="btn btn-default-alt btn-sm">Refresh</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <div class="easypiechart" id="returningvisits" data-percent="65">
                                        <span class="percent"></span>
                                    </div>
                                    <label for="newvisits">Returning Visits</label>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <span class="easypiechart" id="newvisitor" data-percent="81">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="bouncerate">New Visitor</label>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4" style="padding-top:10px;padding-bottom:10px;">
                                    <span class="easypiechart" id="clickrate" data-percent="42">
                                        <span class="percent"></span>
                                    </span>
                                    <label for="clickrate">Click Rate</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-orange">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin: 0 0 20px;">Server Load</h4>
                                    <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">Server #1</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">Server #2</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div id="server-load" style="height:125px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            


        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

@stop