<?php

namespace App\Http\Controllers;

use App\items;
use App\booking;
use Illuminate\Http\Request;
use App\Member;


class mycontroller extends Controller
{
    public function index()
    {

        $data = items::all();
        return view('index', ['data' => $data]);
    }

    public function insert(Request $req)
    {
        $imageName = $req->file('image')->getClientOriginalName();
        $req->image->move(public_path('images'), $imageName);

        $product = $req->post('product');
        $price = $req->post('price');
        $qty = $req->post('qty');

        $data = new items();

        $data->Product = $product;
        $data->Price = $price;
        $data->Quantity = $qty;
        $data->image = $imageName;
        $data->save();

        return redirect('/admindashboard');
    }

    public function updateordelete(Request $req)
    {
        $ID = $req->get('ID');
        $Product = $req->get('product');
        $Price = $req->get('price');
        $Quantity = $req->get('qty');

        if ($req->get('update') == "update") {
            return view('update', ['ID' => $ID, 'product' => $Product, 'price' => $Price, 'qty' => $Quantity]);
            echo $req->get('update');
        } else {
            $data = items::find($ID);
            $data->delete();
            echo $req->get('delete');
        }
        return redirect('/');
    }
    public function update(Request $req)
    {
        $ID = $req->get('ID');
        $Product = $req->get('product');
        $Price = $req->get('price');
        $Quantity = $req->get('qty');

        $data = items::find($ID);
        $data->Product = $Product;
        $data->Price = $Price;
        $data->Quantity = $Quantity;
        $data->save();

        return redirect('/');
    }
    public function section(Request $req)
    {

        $Id = $req->get('ID');
        $image = $req->get('image');
        $Product = $req->get('Product');
        $Price = $req->get('Price');

        // if(Has->req->('submit')){
        return view('section', ['Id' => $Id, 'image' => $image, 'Product' => $Product, 'Price' => $Price]);
        // }
    }

    public function booking(Request $req)
    {
        // $imageName = $req->file('image')->getClientOriginalName();
        // $req->image->move(public_path('images'), $imageName);

        // $product = $req->post('product');
        // $price = $req->post('price');
        // $qty = $req->post('qty');
           $Product = $req->get('Product');
           $Price = $req->get('Price');
           $image = $req->get('image');
           $Name = $req->get('Name');
           $Address = $req->get('Address');
           $Contact = $req->get('Contact');
           $City = $req->get('City');
           $Date = $req->get('Date');
           $Days = $req->get('Days');


        $record = new booking();

        $record->Product = $Product;
        $record->Price = $Price;
        $record->image = $image;
        $record->Name = $Name;
        $record->Address = $Address;
        $record->Contact = $Contact;
        $record->City = $City;
        $record->Date = $Date;
        $record->Days = $Days;

        $record->save();

        $record = booking::all();

        return view('booking', ['record' => $record]);
    }

    // Controllers for Registration START

    function viewRegister()
    {
        //return view('login');
        return view('/register');
    }

    function registerNew(Request $req)
    {
        $name = $req->get('name');
        $email = $req->get('email');
        $password = $req->get('password');
        // return view('/create', ['name' => $name, 'email' => $email, 'password' => $password]);
        // $email = $req->get('email');

        $result = count(Member::all()->where('email', $email)->where('password', $password));
        if ($result > 0) {
            echo "Already Exist";
            return view('login');
        } else {


            $prod = new member();
            $prod->name = $name;
            $prod->email = $email;
            $prod->password = $password;
            $prod->save();
        }
        return view('login');
        //return view('/createuser');
        //return redirect('login');
    }
    // Controllers for Registration END

    // CONTROLLER FOR LOGIN START
    function successfully()
    {

         return view('login');

    }

    function login(Request $reg)
    {
        $email = $reg->get('email');
        $password = $reg->get('password');
        // echo('success');

        // $name = $reg->get('name');
        $result = count(member::all()->where('email', $email)->where('password', $password));

        // return $result;

        if ($result > 0) {

            // $reg->session()->put('user', $email);
            // $reg->session()->get('user');
            // echo('success');
            return redirect('/');

            //    print_r(session()->put('user', 'login'));
            //     return view('home');


        } else {
            echo "Incorrect.";
            return view('login');
        }
    }

    function adminLogin(Request $reg)
    {

        $email = $reg->get('email');
        $password = $reg->get('password');
        echo $email;
        // $result = count(member::all()->where('email', 'admin@kernel.com')->where('password', '12345'));

        if ($email == 'admin@kernel.com' && $password =='12345')
        {

            return redirect('/admindashboard');


        } else {
            echo "Incorrect.";
            return view('admin');
            echo $email;
        }
    }

    function adminsuccessfully()
    {

        return view('admin');

    }
    // CONTROLLER FOR LOGIN END

    function admindashboard() {
        $record = booking::all();

        return view('admindashboard', ['record' => $record]);

    }
}
