<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('client.auth.login');
    }

    public function postLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::guard('customer')->attempt($credentials)) {
                return redirect('/');
            }

            throw new \Exception('Invalid login credentials.');
        } catch (\Exception $e) {
            $errorMessage = ($e->getMessage() === 'The given password was incorrect.')
                ? 'Incorrect password. Please try again.'
                : $e->getMessage();

            return redirect()->route('customer.login')->withErrors(['credentials' => $errorMessage]);
        }
    }

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

        return redirect(route('customer.login'))->with('success', 'You have successfully registered! Please login to continue.');
    }

    public function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function logout()
    {

      
        Auth::guard('customer')->logout();
        return redirect(route('customer.login'));
  
    }
}
