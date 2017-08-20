<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(5);
        return view('admin.home', [
            'auth' => 'admin',
            'books' => $books,
        ]);
    }

    // 查看图书信息
    public function detail($id) {

        $book = Book::find($id);

        return view('admin.bookDetail', [
            'book' => $book,
        ]);
    }

    // 添加页面
    public function create(Request $request)
    {
        $book = new Book();

        if ($request->isMethod('POST')) {

            // 1. 控制器验证
            /*
            $this->validate($request, [
                'Student.name' => 'required|min:2|max:20',
                'Student.age' => 'required|integer',
                'Student.sex' => 'required|integer',
            ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 必须为整数',
            ], [
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);
            */

            // 2. Validator类验证
            $validator = \Validator::make($request->input(), [
                'name' => 'required|min:2|max:255',
                'author' => 'required|min:2|max:255',
                'amount' => 'required|integer',
                'price' => 'required|integer',
                'brief' => 'required|max:255',
            ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 字数太短',
                'max' => ':attribute 字数太长',
                'integer' => ':attribute 必须为整数',
            ], [
                'name' => '书名',
                'author' => '作者',
                'aomunt' => '数量',
                'price' => '价格',
                'brief' => '简介',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $book->name = $request->name;
            $book->author = $request->author;
            $book->amount = $request->amount;
            $book->brief = $request->brief;
            $book->price = $request->price;
            $img = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images'),$img);
            $book->image = $img;

            if ($book->save()) {
                return redirect('Admin/home')->with('success', '图书添加成功!');
            } else {
                return redirect()->back();
            }
        }

        return view('admin.create', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if ($request->isMethod('POST')) {

            $validator = \Validator::make($request->input(), [
                'name' => 'required|min:2|max:255',
                'author' => 'required|min:2|max:255',
                'amount' => 'required|integer',
                'price' => 'required|integer',
                'brief' => 'required|max:255',
            ], [
                'required' => ':attribute 为必填项',
                'min' => ':attribute 字数太短',
                'max' => ':attribute 字数太长',
                'integer' => ':attribute 必须为整数',
            ], [
                'name' => '书名',
                'author' => '作者',
                'aomunt' => '数量',
                'price' => '价格',
                'brief' => '简介',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // 先删除原来的图片，再添加新图片
            $book->name = $request->name;
            $book->author = $request->author;
            $book->amount = $request->amount;
            $book->brief = $request->brief;
            $book->price = $request->price;
            Storage::delete($book->image);
            $img = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images'),$img);
            $book->image = $img;

            if ($book->save()) {
                return redirect('Admin/home')->with('success', 'ID为 ' . $id . ' 的图书修改成功');
            }
        }


        return view('admin.update', [
            'book' => $book
        ]);
    }

    public function delete($id)
    {

        $book = Book::find($id);

        if ($book->delete()) {
            return redirect('Admin/home')->with('success', 'ID为 ' . $id . ' 的图书删除成功');
        } else {
            return redirect('Admin/home')->with('error', 'ID为 ' . $id . ' 的图书删除失败');
        }
    }
}
