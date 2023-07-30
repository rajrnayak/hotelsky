<x-app-layout>
    <input name="sr" type="hidden" value="{{ $num = 1 }}">
    <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
            <tr
                class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Sr.No</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Room type</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Room Number</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Room Price</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Room Status</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Actions</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach ($viewroom as $row)
                <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $num++ }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->RoomCategoryDetails->room_category_type }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $row->room_no }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->RoomCategoryDetails->room_category_price }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        @if ($row->room_status == 1)
                            available
                        @else
                            unavailable
                        @endif
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                        <a href="{{ route('edit_room.page', [$row->room_id]) }}"><button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button></a>
                        <a href="{{ route('delete_room.page', [$row->room_id]) }}"><button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button></a>
                        @if ($row->room_status == 1)
                            <a href="{{ route('book_room.page', [$row->room_id]) }}"><button
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Book
                                    Room</button></a>
                        @else
                            <a href=""><button disabled
                                    class="bg-green-500 text-white font-bold py-1 px-2 border border-green-500 rounded">Book
                                    Room</button></a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
