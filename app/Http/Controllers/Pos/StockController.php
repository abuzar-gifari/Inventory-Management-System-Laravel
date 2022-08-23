<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class StockController extends Controller
{

    // Show Stock Report Page
    public function StockReport(){
        $allData = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
        return view('backend.stock.stock_report',compact('allData'));
    }

    // Stock Report PDF Generate
    public function StockReportPdf(){
        $allData = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
        return view('backend.pdf.stock_report_pdf',compact('allData'));        
    }

    // Supplier and Product Wise Report Page Show
    public function StockSupplierWise(){
        $supppliers = Supplier::all();
        $category = Category::all();
        return view('backend.stock.supplier_product_wise_report',compact('supppliers','category'));
    }

    // Show Supplier Wise PDF Page
    public function SupplierWisePdf(Request $request){
        $allData = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->where('supplier_id',$request->supplier_id)->get();
        // dd($allData->toArray());
        return view('backend.pdf.supplier_wise_report_pdf',compact('allData'));
    }

    // Show Product Wise PDF Page
    public function ProductWisePdf(Request $request){
        $product = Product::where('category_id',$request->category_id)->where('id',$request->product_id)->first();
        // dd($allData->toArray());
        return view('backend.pdf.product_wise_report_pdf',compact('product'));
    }



    
}