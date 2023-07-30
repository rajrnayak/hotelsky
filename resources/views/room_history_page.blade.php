<x-app-layout>
    {{-- {{dd($viewbooking);}} --}}
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
                    Customer Name</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Customer Email</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Customer Phone Number</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Customer Address</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Customer Family Members</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    CheckIn Date</th>
                    <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    CheckOut Date</th>
                <th
                    class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                    Actions</th>
            </tr>
        </thead>
        <tbody class="block md:table-row-group">
            @foreach ($viewbooking as $row)
                <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $num++ }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->CategoryDetails->room_category_type }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{ $row->RoomDetails->room_no}}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->customer_name }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->customer_email }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->customer_phoneno }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->customer_address }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->customer_members }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->checkin_date }}</td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                        {{ $row->checkout_date }}</td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                            <a href=""><button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button></a>
                            <a href=""><button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button></a>
                                <a href=""><button
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">CheckOut</button></a>
                                <a href=""><button
                                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-1 px-2 border border-orange-500 rounded">Payment Details</button></a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
