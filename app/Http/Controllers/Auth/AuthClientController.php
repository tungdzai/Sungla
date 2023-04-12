<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginRequest;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Client\RegisterRequest;
use App\Repositories\Customers\CustomerRepositoryInterface;

class AuthClientController extends Controller
{
    public $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function loginClient()
    {
        return view('auth.client.login');
    }

    public function handleLoginClient(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();
            $customer = Auth::guard('customer')->user();
            if ($customer) {
                session()->put('customer', $customer);
            }
            return redirect()->route("client.home");
        }
        return redirect()->back();
    }

    public function registerClient()
    {
        return view('auth.client.register');
    }

    public function handleRegisterClient(RegisterRequest $request)
    {
        $customer = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        $statusCustomer = $this->customerRepository->addCustomer($customer);
        if (!empty($statusCustomer)) {
            return redirect()->route('client.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->forget('customer');
        return redirect()->route("client.home");

    }
}
