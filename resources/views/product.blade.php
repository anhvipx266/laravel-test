@extends('layouts.master')
@section('main')
<div class="container">
<h1>Danh sách sản phẩm</h1>
<hr>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Tên sản phẩm</th>
<th>Giá/ giá KM</th>
<th>Trạng thái</th>
<th>Ngày tạo</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($products as $pro)
<tr>
<td>{{$pro->id}}</td>
<td>{{$pro->name}}</td>
<td>{{$pro->price}}/ {{$pro->sale_price}}</td>
<td>{{$pro->status}}</td>
<td>{{$pro->created_at}}</td>

@endforeach

@stop