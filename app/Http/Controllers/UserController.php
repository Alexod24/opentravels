<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->lastname = "";
        $user->avatar = "";
        $user->username = "";
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return view('app.places');
    }

    // public function destroy($id){
    //     $todo = Todo::find($id);
    //     $todo->delete();
    //     return redirect()->route('todos')->with('success', 'Todo deleted successfully');
    // }

    // public function show($id){
    //     $todo = Todo::find($id);
    //     $categories = Category::all();
    //     return view('todos.show', ['todo' => $todo, 'categories' => $categories]);
    // }

    // public function update(Request $request, $id){
    //     $todo = Todo::find($id);

    //     $todo->title = $request->title;
    //     $todo->save();

    //     return redirect()->route('todos')->with('success', 'Todo updated successfully');
    // }
}
