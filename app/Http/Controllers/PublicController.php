<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{


  public function __construct(){
    $this->middleware('auth')->except('home');
  }


  public function home(){
    $articles = Article::where('is_accepted' , true)->orderBy('created_at' , 'desc')->take(4)->get();
    return view('welcome' , compact('articles'));
  }


  public function careers(){
    return view('careers');
  }


  public function careersSubmit(Request $request){
    $request->validate([

      'role' => 'required',
      'email' => 'required|email',
      'message' => 'required',

    ]);

    $user = Auth::user();
    $role = $request->role;
    $email = $request->email;
    $message = $request->message;

    Mail::to('admin@storysail.it')->send(new CareerRequestMail(Compact('role' , 'email', 'message')));

    switch ($role) {
      case 'admin':
        //Qua ho fatto in modo che anche se l'amministratore prova a richiedere di diventare admin non gli vengano tolti i permessi
        if ($user->is_admin == 0) {

          $user->is_admin = NULL;

        }
        break;
        //Qua ho fatto in modo che anche se il revisore prova a richiedere di diventare revisor non gli vengano tolti i permessi
      case 'revisor':
        if ($user->is_revisor == 0) {

        $user->is_revisor = NULL;

        }
        break;
        //Qua ho fatto in modo che anche se lo scrittore prova a richiedere di diventare writer non gli vengano tolti i permessi
        case 'writer':
          if ($user->is_writer == 0) {

          $user->is_writer = NULL;

        }
          break;
    }
    

    $user->update();

    return redirect(route('home'))->with('message' , 'Grazie per averci contattato!');

  }


}