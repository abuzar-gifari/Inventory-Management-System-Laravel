@extends('admin.admin_master')
@section('admin')
<div class="page-content">
   <div class="container-fluid">
      <!-- Page Title -->
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
         <h2 class="mb-3 text-center" style="font-family: 'Gilroy-Bold', sans-serif;">All Products Data </h2>
      </div>
      <!-- end Page Title -->
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <a href="{{ route('product.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Product </i></a> <br>  <br> 
                  <table id="example1"  class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                     <thead>
                        <tr>
                           <th>Sl</th>
                           <th>Name</th>
                           <th>Supplier Name </th>
                           <th>Unit</th>
                           <th>Category</th>
                           <th>Action</th>
                     </thead>
                     <tbody>
                        @foreach($product as $key => $item)
                        <tr>
                           <td> {{ $key+1}} </td>
                           <td> {{ $item->name }} </td>
                           <td> {{ $item['supplier']['name'] }} </td>
                           <td> {{ $item['unit']['name'] }} </td>
                           <td> {{ $item['category']['name'] }} </td>
                           <td>
                              <a href="{{ route('product.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                              <a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
                           </td>
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