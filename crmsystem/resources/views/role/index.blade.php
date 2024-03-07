@extends('layouts.app')

@section('title', 'Home lead List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Role List</h1>
    <a href="{{ route('admin/role/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Lead</a>
    <hr />
</div>
@endsection
