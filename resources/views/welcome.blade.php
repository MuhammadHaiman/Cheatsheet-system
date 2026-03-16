@extends('layouts.admin-layout')
@section('content')

  <!-- Hero Section -->
  <section class="bg-blue-600 py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to My Website</h1>
      <p class="text-lg mb-6">A simple and clean website layout</p>
      <button class=" text-blue-600 px-6 py-2 rounded-lg font-semibold">Get Started</button>
    </div>
  </section>

  <!-- Content Section -->
  <section class="container text-center">
    <div class="row">
    <div class="col bg-white p-6 rounded-xl shadow">
      <h3 class="text-xl font-semibold mb-2">Feature 1</h3>
      <p class="text-gray-600">Description for feature one.</p>
    </div>
    <div class="col bg-white p-6 rounded-xl shadow">
      <h3 class="text-xl font-semibold mb-2">Feature 2</h3>
      <p class="text-gray-600">Description for feature two.</p>
    </div>
    <div class="col bg-white p-6 rounded-xl shadow">
      <h3 class="text-xl font-semibold mb-2">Feature 3</h3>
      <p class="text-gray-600">Description for feature three.</p>
    </div>
  </div>

  </section>

@endsection