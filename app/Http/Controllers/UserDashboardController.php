<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowList;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(){

        $user = Auth::user()->id;
        return view('frontEnd.user.dashboard.dashboard',['categories'=>Category::all() ,'books'=>Book::all() ,'user'=> $user , 'borrowlists' => BorrowList::all()]);
    }
    public function borrowdBooks($u_id){
        $user = Auth::user()->id;
        $borrowlists = BorrowList::select('*')->where('student_id',$u_id)->get();
        return view('frontEnd.user.borrowBooks',['books'=>Book::all(),'borrowlists'=> $borrowlists,'user'=> $user]);
    }
    public function showBooks($name,$u_id){

        $user = Auth::user()->id;
        $books = Book::select('*')->where('category_name',$name)->get();
        $borrowlists = BorrowList::select('*')->where('student_id',$u_id)->get();
        return view('frontEnd.user.showBooks',['books'=> $books,'borrowlist'=>$borrowlists,'user'=> $user,'categories'=>Category::all(),'name'=>$name ]);
    }
    
}
