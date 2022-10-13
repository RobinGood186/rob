<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;


class ContactController extends Controller {
// ввод в Базу Данных
  public function submit(ContactRequest $req) {
    $contact = new Contact();
    $contact->name = $req->input('name');
    $contact->email = $req->input('email');
        $contact->save();
      return redirect()->route('contact')->with('success','сохраненно');
   }
   public function AllData (){ $contact = new Contact;
     return view('messagess', ['data'=>$contact->all()]);
   }
   public function showOneMessage($id) {
         $contact = new Contact();
return view('one-messages', ['data'=>$contact->find($id)]);
   }
   public function updateMessage ($id) {
    $contact = new Contact;
     return view('update-message', ['data'=>$contact->find($id)]);
   }
   public function updateMessageSubmit($id, ContactRequest $req) {
     $contact = Contact::find($id);
     $contact->name = $req->input('name');
     $contact->email = $req->input('email');
         $contact->save();
       return redirect()->route('contact-data-one', $id)->with('succes','сохранение изменено');
    }
    public function deleteMessage($id){
      Contact::find($id)->delete();
      return redirect()->route('contact-data')->with('succes','Заметки удалены, вы молодец!');

    }
}
