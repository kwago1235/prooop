<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staffs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <div class="float-right">
                                        <a href="{{ Route('createStaff') }}" >
                                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                                Add Staff
                                            </button>
                                        </a>
                                    </div>
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">Full name</th>
                                            <th scope="col" class="px-6 py-4">Age</th>
                                            <th scope="col" class="px-6 py-4">Gender</th>
                                            <th scope="col" class="px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($staffData as $staff)
                                                <tr class="border-b dark:border-neutral-500">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $staff->name }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $staff->age }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $staff->gender }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <a href="{{ Route('staffDelete', ['id' => $staff->id ]) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                            @csrf
                                                            @method('DELETE')
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
