@extends('Member.master')
@section('content')
<?php
use App\Http\Controllers\Assignment\AssignReport as AssignReport;
?>
<?php $root_url = dirname($_SERVER['PHP_SELF']); ?>
<meta name="_token" content="{!! csrf_token() !!}"/>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">รายงานมอบหมายงาน</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>

  <div class="row print_button">
    <div class="col-lg-12 text-right">
    </div>
  </div>

  <div class="row">

    <!-- search and filter -->
    <div class="no_print col-xs-12 form-group" style="display:inline-flex;">
      {{ AssignReport::getyear() }}
      <input placeholder="ค้นหา.." type="text" class="input-xs form-control" id="filter" name="filter" value="" style="margin-left:5px;"/>
      <a onclick='window.print()' title="พิมพ์รายงาน"><i style="cursor:pointer;padding-left:5px;" class="fa fa-print fa-2x"></i></a>
      <!--<input type="text" class="input-xs form-control" id="date_filter_value" name="date_filter_value" value="" style="margin-left:5px;"/>-->
    </div>
  </div>


  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive" id="result_report">
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script src="{{$root_url}}/public/js/reportassign.js"></script>
@stop
