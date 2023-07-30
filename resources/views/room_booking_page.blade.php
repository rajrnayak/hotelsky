<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script>
            function myFunction() {
                // Get the checkbox
                var checkBox = document.getElementById("myCheck");
                // Get the output text
                var text = document.getElementById("text");

                // If the checkbox is checked, display the output text
                if (checkBox.checked == true) {
                    text.style.display = "block";
                } else {
                    text.style.display = "none";
                }
            }
        </script>
    </head>

    <body>
        {{-- {{dd($selectroom);}} --}}
        <div class="flex items-center justify-center ">
            <div class="mx-auto w-full max-w-[550px]">
                <form action="{{ route('insert_room_booking.page') }}" method="POST">
                    @csrf
                    <input type="hidden" name="roombookingcategoryid" value="{{ $selectroom->room_room_category_id }}">
                    <input type="hidden" name="roombookingroomid" value="{{ $selectroom->room_id }}"

                    <h2 class="text-base font-semibold leading-7 text-gray-900 ">Add Customer Details</h2><br>

                    <div class="mb-5">
                        <label for="customername" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Name
                        </label>
                        <input type="text" name="customername" id="customername" placeholder="customer name"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="customeremail" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Email
                        </label>
                        <input type="text" name="customeremail" id="customeremail" placeholder="Customer email"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="customernumber" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Phone Number
                        </label>
                        <input type="text" name="customernumber" id="customernumber" placeholder="phone number"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="customeraddress" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Address
                        </label>
                        <input type="text" name="customeraddress" id="customeraddress" placeholder="Customer address"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="customermembers" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Family Members
                        </label>
                        <input type="text" name="customermembers" id="customermembers" placeholder="family members"
                            min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="checkin" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Checkin Date
                        </label>
                        <input type="date" name="checkin" id="checkin" placeholder="checkin date" min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="checkout" class="mb-3 block text-base font-medium text-[#07074D]">
                            Enter Customer Checkout Date
                        </label>
                        <input type="date" name="checkout" id="checkout" placeholder="checkout date" min="0"
                            class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-5">
                        <label for="payment" class="mb-3 block text-base font-medium text-[#07074D]">
                            Room Price Confirm
                        </label>
                        Confirm Payment: <input type="checkbox" id="myCheck" onclick="myFunction()" required>
                        <p id="text" style="display:none">Payment Confirmed :)</p>
                    </div>

                    <div><br>
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
