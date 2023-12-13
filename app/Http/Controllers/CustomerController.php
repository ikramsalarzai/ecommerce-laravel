<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;

use Session;


class CustomerController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('client.auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function  postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(
            'email',
            'password'
        );

        if (Auth::attempt($credentials)) {
            return redirect(route('home'));
        }

        return redirect(route('customer.login'))->with('error', 'Invalid login credentials. Please try again.');
    }
    /**
     *
     *
     * Write code on Method
     *
     * @return response()
     */
    public function register()
    {
        return view('client.auth.register');
    }

    public function customerRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        Customer::create($data);

        return redirect(route('customer-login'))->with('success', 'You have successfully registered! Please login to continue.');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
