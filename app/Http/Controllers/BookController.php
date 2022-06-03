<?php
namespace App\Http\Controllers;

use App\Models\Book;

use App\Models\about;
use App\Models\massege;
use Illuminate\Http\Request;
class BookController extends Controller
{
    public function listBooks(Request $request)
    {
        $data['books'] = Book::all();

        return view('admin.list-books', $data);
    }

    public function addBook(Request $request)
    {
        return view('admin.add-book');
    }

    public function doAddBook(Request $request)
    {
        $book = new Book();
                if($request->image){
                    $imagename = time().'.'.$request->image->extension();
                    $request->image->move(public_path('uimages'),$imagename);
                    $book->image = $imagename;
                }
                $book->author=$request->author;
                $book->title=$request->title;
                $book->isbn=$request->isbn;
                $book->price=$request->price;
              $book->save();
              return redirect()->back();
    }

    public function updateBook(Request $request, $id)
    {
        $data = Book::find($id);

        return view('admin/update-book', compact('data'));
    }

    public function doUpdateBook(Request $request, $id) {
        $request->validate([
            'title' => 'required|max:100',
            'author' => 'required|max:100',
            'isbn' => 'required|max:100',
            'price' => 'required|numeric|min:1'
        ]);

        $book = Book::find($id);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->isbn = $request->input('isbn');
        $book->price = $request->input('price');

        $result = $book->save();

        if ($result) {
            $successMsg = 'Book has been updated successfully.';

            return redirect()->route('list-books')->with('success', $successMsg);
        } else {
            $errorMsg = 'Failed to update book, please try again.';

            return redirect()->route('list-books')->with('error', $errorMsg);
        }
    }

    public function deleteBook(Request $request, $id)
    {
        $book = Book::find($id);

        $result = $book->delete();

        if ($result) {
            $successMsg = 'Book has been deleted successfully.';

            return redirect()->route('list-books')->with('success', $successMsg);
        } else {
            $errorMsg = 'Failed to delete book, please try again.';

            return redirect()->route('list-books')->with('error', $errorMsg);
        }
    }

    public function viewBook(Request $request, $id) {
        $book = Book::find($id);

        return response()->json($book);
    }




    public function purchase_managementk(){
        return view('admin.purchase-management');
    }



    public function main_screen(){
        $book=Book::all();
        return view('userr.main-screen' ,compact('book'));
    }

    public function contact_us(){
        return view('userr.contact-us');
    }

    public function about(){
        $about= about::all();
        return view('userr.about',compact('about'));
    }

    public function Purchasing_Screen(){
        return view('userr.Purchasing-Screen');
    }

    public function show_aouther(){
        $author = Book::all();
        return view('admin.aouther',compact('author'));
    }

    public function Add_contact(Request $request){
        $massege=new massege();
        $massege->name=$request->name;
        $massege->email=$request->email;
        $massege->massege=$request->massege;
                  $massege->save();
                  return redirect()->back()->with('message','Done  ');
                                                         }



   public function show_masseges(){
    $messages = massege::get();
    return view('userr.show-m',compact('messages'));
}
}
