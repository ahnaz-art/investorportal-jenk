@extends('layouts.admin.admin_lte')
@section('content')

 <div class="inner admin-dsh header-tp">

    <h3><i class="fa fa-angle-right" aria-hidden="true"></i>{{$page_title}} </h3>
      <a href="#" class="help-link">
        <i class="fa fa-question-circle" aria-hidden="true"></i>
        <div class="tool-tip">Merchant Marketing Offers</div>     
      </a>
      
  </div>
{{ Breadcrumbs::render('admin::merchantMarketOfferList') }}
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            @include('layouts.admin.partials.lte_alerts')

             <div class="box-body">


             <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                 <div class="row">
                    <div class="col-sm-10"></div>
                     <div class="col-sm-12 btn-adm" style="padding-bottom:15px">
                       @if(@Permissions::isAllow('Marketing Offers','Create'))  
                    <a href="{{route('admin::addEditMerchantsOffers')}}" class="btn btn-primary admin-btn" style="float:right; margin-bottom:8px">Create Offers</a>
                   @endif
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                     {!! $tableBuilder->table(['class' => 'table table-bordered'],true) !!}
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>

@stop
@section('scripts')

  
    <script src="{{ asset('select2/js/select2.full.min.js') }}"></script>
        {!! $tableBuilder->scripts() !!}
    <script type="text/javascript">
        var table = window.LaravelDataTables["dataTableBuilder"];
    </script>


@stop

@section('styles')
     <style type="text/css">
    .adminSelect .select2-hidden-accessible {
    display: none;
    }
    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }
    .breadcrumb > li {
        display: inline-block;
    }
   li.breadcrumb-item a{
        color: #6B778C;
    }
    .breadcrumb > li + li::before {
        padding: 0 5px;
        color: #ccc;
        content: "/\00a0";
    }
    li.breadcrumb-item.active{
        color: #2b1871!important;
    }

</style>
     <link href="{{ asset('/css/optimized/bills.css?ver=5') }}" rel="stylesheet" type="text/css" />
@stop