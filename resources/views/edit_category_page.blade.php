<x-app-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('update_room_category.page') }}" method="POST">
                <input name="categoryid" value="{{ $selectcategory->room_category_id }}" type="hidden">
                @csrf
                <div class="mb-5">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 ">Add Room Category Details</h2><br>
                    <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
                        Enter Room Category
                    </label>
                    <input type="text" name="category" id="category"
                        value="{{ $selectcategory->room_category_type }}" placeholder="category name" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                        Enter Room Number
                    </label>
                    <input type="number" name="price" id="price"
                        value="{{ $selectcategory->room_category_price }}" placeholder="1" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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



</x-app-layout>
