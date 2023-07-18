<div>
@section('title') {{'Dashboard'}}@endsection
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex h-screen">
  <!-- Sidebar -->
  <div class="w-1/4 bg-gray-200">
    <!-- Sidebar content -->
    <nav class="p-4">
      <ul class="space-y-4">
        <!-- Sidebar links -->
        <li><a href="{{route('admin.home.banner')}}" class="text-blue-500">Link 1</a></li>
        <li><a href="#" class="text-blue-500">Link 245</a></li>
        <li><a href="#" class="text-blue-500">Link 3</a></li>
        <li><a href="#" class="text-blue-500">Link 4</a></li>
        <li><a href="#" class="text-blue-500">Link 5</a></li>
        <li><a href="#" class="text-blue-500">Link 6</a></li>
      </ul>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="w-3/4 bg-white p-8">
    <!-- Selected page content -->
    <h1 class="text-3xl font-bold">Selected Page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div>

</div>
