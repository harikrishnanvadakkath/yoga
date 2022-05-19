@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <label for="Name" class="inline-block text-lg mb-2"> Name</label>
        <br>
        <input type="text" placeholder="Name" class="border border-gray-200 rounded p-2 w-full" Name="Name" /><br><br>
        <div class="mb-6">
            <label for="Age" class="inline-block text-lg mb-2">Age</label>
            <br>
            <input type="number" placeholder="Age" class="border border-gray-200 rounded p-2 w-full" name="Age" /><br><br>

            <div class="mb-6">
                <label for="Address" class="inline-block text-lg mb-2">Address</label>
                <br>
                <class=border border-gray-200 rounded p-2 w-full>
                    <textarea cols="80" row="5" placeholder="address" value="address"></textarea>
                    </textarea><br><br>

                    <div class="mb-6">
                        <label for="phone" class="inline-block mb-2">
                            phone</label>
                        <br>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phoneno"
                            placeholder="phoneno" size="40">
                        <br><br>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2">Email</label>
                            <br>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" placeholder="Enter email"
                                name="email" size="60">
                            <br><br>

                            <button type="button" class=btn-REGISTER>REGISTER
                                <br><br>
                            </button>
@endsection
