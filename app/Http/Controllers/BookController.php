<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('admin.book.add',['categories'=>Category::all()]);
    }
    public function store(Request $request){
       Book::saveBooks($request);
       return back()->with('msg','books added successfully!!');
    }
    public function manage(){
       return view('admin.book.manage',['books'=>Book::all()]);
    }
    public function edit($id){
       return view('admin.book.edit',['book'=>Book::find($id),'categories'=>Category::all()]);
    }
    public function update( Request $request,$id){
      Book::updateBook($request,$id);
      return redirect('/book/manage')->with('msg','Book updated successfully!!');
    }
    public function destroy($id){
      Book::destroyBook($id);
      return redirect('/book/manage')->with('msg','Book deleted successfully!!');
    }
    public function changeStatus($id)
    {

       $getStatus = Book::select('status')->where('id',$id)->first();
        if($getStatus->status == 1){
            $status = 0;
        }else{
            $status = 1;

        }
        Book::where('id',$id)->update(['status'=> $status]); 
        return redirect('book/manage');
        
    }
}
