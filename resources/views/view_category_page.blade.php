<x-app-layout>
	<input name="sr" type="hidden" value="{{$num=1;}}">
	<h2 class="text-base font-semibold leading-7 text-gray-900 pt-7 pl-7">view Room Category</h2><br>
<table class="min-w-full border-collapse block md:table">
	<thead class="block md:table-header-group">
		<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
			<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">S.No</th>
			<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Category Name</th>
			<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Price</th>
			<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
		</tr>
	</thead>
	<tbody class="block md:table-row-group">
		{{-- {{dd($viewcategory);}} --}}
		@foreach ($viewcategory as $row)
		<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
			<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$num++;}}</td>
			<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$row->room_category_type}}</td>
			<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$row->room_category_price}}</td>
			<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
				<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
				<a href="{{ route('edit_category.page',[$row->room_category_id]) }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button></a>
				<a href="{{ route('delete_category.page',[$row->room_category_id]) }}"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button></a>
			</td>
		</tr>	
		@endforeach
	</tbody>
</table>
</x-app-layout>