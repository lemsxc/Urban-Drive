<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class PageController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function settings()
    {
        return view('users.shared.settings');
    }

    public function home()
    {
        $cars = Car::all();
        return view('users.user.home',compact('cars'));
    }

    public function dashboard()
    {
        return view('users.admin.dashboard');
    }

    public function cars()
    {
        $cars = Car::all();
        return view('users.user.cars', compact('cars'));
    }

    public function addCars()
    {
        return view('users.admin.addCars');
    }

    public function rental()
    {
        return view('users.admin.rentals');
    }

    public function addDriver()
    {
        return view('users.admin.addDrivers');
    }

    public function driverlist()
    {
        return view('users.admin.driverlist');
    }

    public function historylogs()
    {
        return view('users.admin.logs');
    }

    public function carlist()
    {
        $cars = Car::all();

        return view('users.admin.carlist', compact('cars'));
    }
}
