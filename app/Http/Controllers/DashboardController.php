<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BorrowList;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
    public function borrowRequest($id, $u_id)
    {
        return view('admin.book.borrowRequest', ['book' => Book::find($id), 'user' => User::find($u_id)]);
    }
    public function acceptBorrow($id, $u_id)
    {
        $book = Book::find($id);
        $nowbook = $book->quantity - 1;
        $book->quantity = $nowbook;
        $book->save();

        $user = User::find($u_id);
        $borrow = new BorrowList();
        $borrow->student_id = $user->id;
        $borrow->category_name = $book->category_name;
        $borrow->book_id = $id;
        $borrow->book_name = $book->book_name;
        $borrow->author_name = $book->author_name;
        $borrow->save();
 
        return redirect('dashboard')->with('msg', 'borrow request accepted..');
    }
    public function cancelBorrow()
    {
 
        return redirect('dashboard')->with('msg', 'sorry!!borrow reuest can not be accepted..');
    }
    public function returnRequest($id, $b_id)
    {
        $book = Book::find($id);
        $nowbook = $book->quantity + 1;
        $book->quantity = $nowbook;
        $book->save();

        $borrow = new BorrowList();
        $borrow = BorrowList::find($b_id);
        $borrow->delete();

        return back()->with('msg', 'book return succesful...');
    }
    public function borrowList()
    {
        return view('admin.book.borrowlist', ['borrowlists'=>BorrowList::all()]);
    }
}
