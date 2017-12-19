@include('layouts.style')
<style>
.nav.nav-tabs.nav-justified{
    border: 0;
    padding: .7rem;
    margin-bottom: -20px;
    background-color:#d9edf7;
    z-index: 2;
    position: relative;
    border-radius: 2px;
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
}
ul.nav.nav-tabs li a {
    background: #00aff0;
    color: #fff;
    background-color: #00aff0;
    background-image: -webkit-linear-gradient(#00aff0,#03a2dd);
    background-image: linear-gradient(#00aff0,#03a2dd);
    border-radius: 3px;
    border: 1px solid #0298d0;
    border-bottom: 1px solid #0298d0;
    box-shadow: inset 0 1px #21bef8, 2px 0 4px rgba(0,0,0,0.1), -2px 0 4px rgba(0,0,0,0.1);
}
.tab-content.card{
    box-shadow: none;
    border: 0px;
    padding: 0px;
}
.cornsilk.btn-blue{
    display: block !important;
}
</style>
<title>{{$organization->name}} | Organization</title>

<div>

    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
     @include('layouts.header')
    <!--END TOPBAR-->
    
        <!--BEGIN SIDEBAR MENU-->
        @include('layouts.menu')
        <!--END SIDEBAR MENU-->
        <div id="wrapper">
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            @include('layouts.sidebar')
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title plxxl">
                        Organization</div>
                </div>
                <div class="sharethis-inline-share-buttons col-md-4"></div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-desktop"></i>&nbsp;<a href="/organization">Organizations</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="active">{{$organization->name}}</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <div id="tab-general">
                <div class="mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>

                    <div>
                    <button class="cornsilk btn-blue" style="position: absolute;top: 7px;left: auto;" id="menu-toggle">
                        <a href="" class="btn btn-secondary" style="padding: 0px;font-size: 25px;"><i class="fa  fa-search" style="color: #fff;font-size: 25px;"></i></a>
                    </button>
                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-8" style="padding: 0;">

                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="note note-info"><h4 class="box-heading" style="font-size: 25px;">{{$organization->name}}</h4>

                                            <p><code> Alternate Name:</code> {{$organization->alternate_name}}</p>
                                            <p><code> Description:</code> {!! $organization->description !!}</p>
                                            <p><code> Email:</code> {{$organization->email}}</p>
                                            <p><code> Url:</code> {{$organization->url}}</p>

                                            </div>
                                            <div>
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                    <tr class="info">
                                                        <th class="text-center">Budget</th>
                                                        <th class="text-center">Capital</th>
                                                        <th class="text-center">Expense</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="warning">
                                                        <td class="text-center">Year 1</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <td class="text-center">Year 2</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr class="warning">
                                                        <td class="text-center">Year 3</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>     
                                                </table>
                                            </div>
                                            <div>
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-justified">
                                                    <li class="nav-item">
                                                        <a class="btn-blue nav-link active" data-toggle="tab" href="#panel1" role="tab">Services</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Projects</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab" style="margin-right: 0;">People</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab panels -->
                                                <div class="tab-content card">
                                                    <!--Panel 1-->
                                                    <div class="tab-pane active" id="panel1" role="tabpanel">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div id="grid-layout-table-1" class="box jplist">

                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i> Display Options</div>
                                                            <div class="jplist-panel box panel-top">
                                                                <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                                        <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                            </div>
                                                            
                                                            <div class="box text-shadow">
                                                                <table class="demo-tbl">
                                                                    <!--<item>1</item>-->
                                                                   @foreach($organization_services as $organization_service)
                                                                    <tr class="tbl-item">
                                                                        
                                                                        <!--<data></data>-->
                                                                        <td class="td-block">

                                                                            <p class="title" style="font-size: 25px;"><a href="/service_{{$organization_service->service_id}}" style="color: #357ca5;">{{$organization_service->name}}</a></p>

                                                                            <p class="desc" style="font-size: 16px;"><a href="#" style="color: #00aff0;"></a></p>

                                                                            <div class="option" style="padding-left: 10px;padding-top: 5px;">

                                                                                <p class="desc" style="font-size: 16px; color: #000;"><i class="fa fa-fw fa-sitemap"></i>{{$organization_service->taxonomy_name}}</p>

                                                                                <p class="desc" style="font-size: 16px; color: #000;"><i class="fa fa-fw fa-phone-square"></i>{!! $organization_service->phone_numbers !!}</p>

                                                                                <p class="desc" style="font-size: 16px;">{!! $organization_service->description !!}</p>
                                                                            </div>
                                                                        </td>
                                                                        <!--<img/>-->
                                                                    </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                            
                                                            <div class="box jplist-no-results text-shadow align-center">
                                                                <p>No results found</p>
                                                            </div>
                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                            <div class="jplist-panel box panel-bottom">
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                                        <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/.Panel 1-->
                                                    <!--Panel 2-->
                                                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Project ID</th>
                                                                    <th>Description</th>
                                                                    <th>#Commitments</th>
                                                                    <th>Total Cost</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tiger Nixon</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Garrett Winters</td>
                                                                    <td>Accountant</td>
                                                                    <td>Tokyo</td>
                                                                    <td>63</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--/.Panel 2-->
                                                    <!--Panel 3-->
                                                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div id="grid-layout-table-1" class="box jplist">

                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i> Display Options</div>
                                                            <div class="jplist-panel box panel-top">
                                                                <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                                        <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                            </div>
                                                            
                                                            <div class="box text-shadow">
                                                                <table class="demo-tbl">
                                                                    <!--<item>1</item>-->
                                                                   @foreach($organization_services as $organization_service)
                                                                    <tr class="tbl-item">
                                                                        
                                                                        <!--<data></data>-->
                                                                        <td class="td-block">

                                                                            <p class="title" style="font-size: 25px;"><a href="/service_{{$organization_service->service_id}}" style="color: #357ca5;">{{$organization_service->name}}</a></p>

                                                                            <p class="desc" style="font-size: 16px;"><a href="#" style="color: #00aff0;"></a></p>

                                                                            <div class="option" style="padding-left: 10px;padding-top: 5px;">

                                                                                <p class="desc" style="font-size: 16px; color: #000;"><i class="fa fa-fw fa-sitemap"></i>{{$organization_service->taxonomy_name}}</p>

                                                                                <p class="desc" style="font-size: 16px; color: #000;"><i class="fa fa-fw fa-phone-square"></i>{!! $organization_service->phone_numbers !!}</p>

                                                                                <p class="desc" style="font-size: 16px;">{!! $organization_service->description !!}</p>
                                                                            </div>
                                                                        </td>
                                                                        <!--<img/>-->
                                                                    </tr>
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                            
                                                            <div class="box jplist-no-results text-shadow align-center">
                                                                <p>No results found</p>
                                                            </div>
                                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                            <div class="jplist-panel box panel-bottom">
                                                                <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-number="3"> 3 per page</span></li>
                                                                        <li><span data-number="5"> 5 per page</span></li>
                                                                        <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                                        <li><span data-number="all"> view all</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                                    <ul class="dropdown-menu">
                                                                        <li><span data-path="default">Sort by</span></li>
                                                                        <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                                        <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                                        <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                                        <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                                        <li><span data-path=".like" data-order="asc" data-type="number" data-default="true">Likes asc</span></li>
                                                                        <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                                        <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                                        <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/.Panel 3-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" style="padding: 0;">
                                    <div class="portlet box">
                                        <div class="portlet-header">
                                            <div id="mymap" style="width: 100%;"></div>
                                        </div>
                                        <div class="portlet-body">
                                            <p><code>Address:</code></p>
                                          
                                                @foreach($organization_map as $servicemap)
                                                @if($servicemap->location_id!=null)
                                                    <p><a href="location_{{$servicemap->location_id}}">{{$servicemap->name}}</a>: {{$servicemap->address_1}}, {{$servicemap->city}}, {{$servicemap->state_province}}, {{$servicemap->postal_code}}</p>
                                                @endif
                                                @endforeach
                                          
                                            <p><code>Contact:</code>{{$organization->contact_name}}</p>
                                            <p><code>Phones:</code></p>
                                            
                                            <h2>Organization Details</h2>
                                            
                                            <p><span class="badge badge-yellow"></span> </p>
                                            <p><code>Legal Status:</code></p>
                                            <p><code>Tax Status:</code></p>
                                            <p><code>Tax ID:</code></p>
                                            <p><code>Year Incorporated:</code></p>
                                            <p><code>Holiday schedule:</code></p>
                                            <p><span class="badge badge-yellow">detail type</span> </p>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-hover table-bordered">
                                                    <thead>
                                                    <tr class="info">
                                                        <th class="text-center">Expense Budget</th>
                                                        <th class="text-center">Year 1</th>
                                                        <th class="text-center">Year 2</th>
                                                        <th class="text-center">Year 3</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center">Total Dept.</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">City Funds</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Out Categorical</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Captical Funds</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">IFA</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">State</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Federal - C.D.</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Federal - Other</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">Intra - City Other</td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                        <td class="text-center"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">
                <a href="#">&copy; ThemesGround 2015. Designed by ThemesGround </a></div>
            </div>
            <!--END FOOTER-->
        </div>
        <!--END CONTENT-->

</div>
<!--END PAGE WRAPPER-->
</div>
</div>
@include('layouts.script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5XHJ6oNL9-qh0XsL0G74y1xbcxNGkSxw&callback=initMap">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

    var locations = <?php print_r(json_encode($organization_map)) ?>;

    var mymap = new GMaps({
      el: '#mymap',
      lat: 40.712722,
      lng: -74.006058,
      zoom:10
    });

    $.each( locations, function( index, value ){
        mymap.addMarker({
          lat: value.latitude,
          lng: value.longitude,
          title: value.name,
         infoWindow: {
            content: ('<a href="location_'+value.location_id+'">'+value.name+'</a></br>' +value.address_1+', ' +value.city+', '+value.state_province+', '+value.postal_code)
        }
   });
});

</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>