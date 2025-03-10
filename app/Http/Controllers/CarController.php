<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Flasher\Laravel\Facade\Flasher;

class CarController extends Controller
{
    public function addCar(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'category' => 'required|string',
            'plate_number' => 'required|string|unique:car,plate_number',
            'mileage' => 'required|numeric',
            'rent_price' => 'required|numeric',
            'fuel_level' => 'required|string',
            'condition' => 'required|string',
            'status' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $imageName = $request->image->hashName();

            // Move the file to the 'public/cars' directory
            $request->file('image')->move(public_path('cars'), $imageName);
            
            $input['image'] = 'cars/' . $imageName;
        }

        Car::create([
            'brand' => $input['brand'],
            'model' => $input['model'],
            'category' => $input['category'],
            'plate_number' => $input['plate_number'],
            'mileage' => $input['mileage'],
            'rent_price' => $input['rent_price'],
            'fuel_level' => $input['fuel_level'],
            'condition' => $input['condition'],
            'status' => $input['status'],
            'image' => $input['image'],
        ]);

        // Add success flash message
        Flasher::addSuccess('Car added successfully!');

        return redirect()->route('cars');
    }
}
