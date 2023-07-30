{{-- {{$selectroom}} --}}
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <body>

        <!-- component -->
        <div class="flex items-center justify-center p-12">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="mx-auto w-full max-w-[550px]">
                <form action="{{ route('update_room.page') }}" method="POST">
                    @csrf
                    <input type="hidden" name="roomid" value="{{ $selectroom->room_id }}">
                    <div class="mb-5">
                        <label for="roomno" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Room Number
                        </label>
                        <input type="number" name="roomno" value="{{ $selectroom->room_no }}" id="roomno"
                            placeholder="1" min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="sm:col-span-4">
                        <label for="roomcategory" class="mb-3 block text-base font-medium text-[#07074D]">
                            Select Category
                        </label>
                        <select name="roomcategory">
                            <option selected>Select any one</option>
                            @foreach ($roomcategory as $row)
                                <option @if ($selectroom->room_room_category_id == $row->room_category_id) selected @endif
                                    value="{{ $row->room_category_id }}">{{ $row->room_category_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="sm:col-span-4">
                        <label for="roomstatus" class="mb-3 block text-base font-medium text-[#07074D]">
                            Select Room Status
                        </label>
                        <select name="roomstatus">
                            <option selected>Select any one</option>
                            @if ($selectroom->room_status == '1')
                                <option selected value="1">{{ 'Available' }}</option>
                                <option value="0">{{ 'Unavailable' }}</option>
                            @else
                                <option value="1">{{ 'Available' }}</option>
                                <option selected value="0">{{ 'Unavailable' }}</option>
                            @endif
                        </select>
                    </div>
                    <br>
                    <div>
                        <button type="submit"
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
