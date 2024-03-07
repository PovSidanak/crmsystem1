@extends('layouts.app')

@section('title', 'Home lead List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Lead List</h1>
    <a href="{{ route('admin/lead/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Lead</a>
    <hr />
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Phone</th>
                <th scope="col" class="px-6 py-3">Product</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($lead->count() > 0)
            @foreach($lead as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->name }}
                </td>
                <td>
                    {{ $rs->email }}
                </td>
                <td>
                    {{ $rs->phone }}
                </td>

                <td>
                    {{ $rs->products }}
                </td>

                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/lead/show', $rs->id) }}" class="text-blue-800">Detail</a> |
                        <a href="{{ route('admin/lead/edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('admin/lead/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
