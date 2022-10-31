@extends('admin.admin_master')
@section('admin')
<div class="page-content">
   <div class="container-fluid">
      <!-- Page Title -->
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h2 class="mb-3 text-center" style="font-family: 'Gilroy-Bold', sans-serif;">All Invoices </h2>
            </div>
         </div>
      </div>
      <!-- end Page Title -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <a href="{{ route('invoice.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Inovice </i></a> <br>  <br>
                  <table id="example1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>Sl</th>
                           <th>Customer Name</th>
                           <th>Invoice No </th>
                           <th>Date </th>
                           <th>Desctipion</th>
                           <th>Amount</th>
                     </thead>
                     <tbody>
                        @foreach($allData as $key => $item)
                        <tr>
                           <td> {{ $key+1}} </td>
                           <td> {{ $item['payment']['customer']['name'] }} </td>
                           <td> #{{ $item->invoice_no }} </td>
                           <td> {{ date('d-m-Y',strtotime($item->date))  }} </td>
                           <td> {{ $item->description }} </td>
                           <td> $ {{ $item['payment']['total_amount'] }} </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- container-fluid -->
</div>
@endsection