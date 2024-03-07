@extends('layouts.app')

@section('title', 'Show Lead')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Lead</h1>
<hr />
<div class="boreder-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
                {{ $lead->name }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
                {{ $lead->email }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
            <div class="mt-2">
                {{ $lead->phone }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Address</label>
            <div class="mt-2">
                {{ $lead->address }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Product</label>
            <div class="mt-2">
                {{ $lead->products }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                {{ $lead->description }}
            </div>
        </div>
        </form>
    </div>

</div>

@endsection
