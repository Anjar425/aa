@extends('Layout.dashboard')
@extends('Layout.notif')

@section('Title')
    VEGETATION REGION
@endsection

@section('navigation')
    @include('RegionalAdmin.LinkDashboard')
@endsection

@section('table')
    <table class="table-auto w-full border-collapse mt-1 overscroll-x-auto">
        <thead>
            <tr>
                <th class="py-2 px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                    Id
                </th>
                <th class="py-2 px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                    Id Region
                </th>
                <th class="py-2 px-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                    Id Plant
                </th>
                <th class="py-2 border-b-[1px] text-sm border-b-gray-200 font-semibold text-gray-300 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plantRegion as $p)
                <tr class="hover:bg-[#f5f5f5]">
                    <td class="p-2 text-center border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                        {{ $p->id }}
                    </td>
                    <td class="p-2 text-center border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                        {{ $p->region_id }} : {{ $p->region->name }}</td>
                    <td class="p-2 text-center border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                        {{ $p->plant_id }} : {{ $p->plant->name }}</td>
                    <td class="p-2 text-center border-b-[1px] text-xs border-b-gray-700 font-normal text-gray-400">
                        <div class="flex flex-row gap-x-2 justify-center">
                            <button type="button" onclick="openEditModal('{{ $p->id }}')"
                                class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-500">Edit</button>
                            <button type="button" onclick="openDeleteModal('{{ url('/' . $p->id . '/delete-vegetation') }}')"
                                class=" text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-xs w-12 py-2.5 text-center bg-red-600 hover:bg-red-700 focus:ring-red-500">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('button')
    <button onclick="openInsertModal()"
        class="my-3 px-5 py-2.5 rounded-md place-self-start  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2"
        data-toggle="modal" data-target="#myModal">Insert</button>
@endsection

@section('Insert Modal')
    @include('RegionalAdmin.PlantRegion.InsertModal')
@endsection

@section('Edit Modal')
    @include('RegionalAdmin.PlantRegion.EditModal')
@endsection
