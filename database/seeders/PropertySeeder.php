<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        DB::table('properties')->insert([
            [
                'title' => 'Modern 2BHK Apartment in Downtown',
                'description' => 'A beautiful and modern 2-bedroom apartment in the heart of the city.',
                'address' => '123 Main Street, Downtown, Cityville',
                'price' => 350000.00,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 950.50,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spacious 4BHK Villa with Pool',
                'description' => 'Luxurious villa with private pool and garden area.',
                'address' => '456 Palm Street, Beverly Hills',
                'price' => 1250000.00,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 3200.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Studio Apartment for Singles',
                'description' => 'Cozy studio perfect for students or bachelors.',
                'address' => '789 Hilltop Road, Uptown',
                'price' => 120000.00,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 450.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Countryside Cottage Retreat',
                'description' => 'Peaceful 3-bedroom cottage in a rural setting.',
                'address' => '12 Meadow Lane, Greenfields',
                'price' => 280000.00,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1400.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Commercial Land Plot',
                'description' => 'Ideal plot for commercial development.',
                'address' => 'Industrial Zone, Sector 21',
                'price' => 850000.00,
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 5000.00,
                'type' => 'land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1BHK Budget Apartment',
                'description' => null,
                'address' => '88 River Road, Suburbia',
                'price' => 95000.00,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 420.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Luxury Penthouse Suite',
                'description' => 'Penthouse with city skyline view.',
                'address' => 'Top Floor, Skyline Towers, City Center',
                'price' => 2200000.00,
                'bedrooms' => 3,
                'bathrooms' => 4,
                'area' => 2800.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Beachfront Bungalow',
                'description' => 'Perfect for holiday home or Airbnb.',
                'address' => '1 Ocean Drive, Bayview',
                'price' => 670000.00,
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 1600.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Downtown Office Plot',
                'description' => 'Empty plot suited for commercial office space.',
                'address' => '45 Business Park, Downtown',
                'price' => 1500000.00,
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 4000.00,
                'type' => 'land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '3BHK Family Apartment',
                'description' => 'Ideal for mid-size families.',
                'address' => '73 Orchid Street, Blossom Town',
                'price' => 310000.00,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1250.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hillview Duplex House',
                'description' => 'Two-story house with hill views.',
                'address' => '112 Pine Avenue, Hillview',
                'price' => 540000.00,
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 2100.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Warehouse Land Plot',
                'description' => 'Perfect for setting up logistics or warehouse.',
                'address' => 'NH-44, Logistic Hub',
                'price' => 990000.00,
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 8000.00,
                'type' => 'land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Student Hostel Room',
                'description' => 'Shared space for two students.',
                'address' => '22 University Lane, Campus City',
                'price' => 55000.00,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 300.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '3BHK Ready-to-Move House',
                'description' => 'Recently renovated and painted.',
                'address' => '31 Maple Street, Old Town',
                'price' => 410000.00,
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1350.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lakeview Land Parcel',
                'description' => 'Ideal for resorts or holiday homes.',
                'address' => '99 Lakeview Drive, Lakeside',
                'price' => 730000.00,
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 6000.00,
                'type' => 'land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Suburban 2BHK Flat',
                'description' => 'Affordable and spacious.',
                'address' => '56 Lavender Close, Suburbia',
                'price' => 200000.00,
                'bedrooms' => 2,
                'bathrooms' => 1,
                'area' => 900.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Farmhouse with Garden',
                'description' => 'Spacious farmhouse with garden and barn.',
                'address' => '88 Country Road, Agriville',
                'price' => 680000.00,
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 2600.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IT Park Land Investment',
                'description' => 'Future tech park location.',
                'address' => 'Tech City, Sector 15',
                'price' => 1300000.00,
                'bedrooms' => 0,
                'bathrooms' => 0,
                'area' => 7500.00,
                'type' => 'land',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Loft Apartment in Metro',
                'description' => 'Trendy loft in heart of the metro.',
                'address' => '9 Trendy Lane, Metro City',
                'price' => 375000.00,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 800.00,
                'type' => 'apartment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '5BHK Mansion in Elite Area',
                'description' => 'Top-tier mansion for ultra luxury living.',
                'address' => '1 Prestige Boulevard, Elite Town',
                'price' => 4500000.00,
                'bedrooms' => 5,
                'bathrooms' => 6,
                'area' => 5000.00,
                'type' => 'house',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

