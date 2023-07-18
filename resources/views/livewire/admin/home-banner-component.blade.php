<div>
@section('title') {{'Dashboard Home Banner'}}@endsection
    {{-- Be like water. --}}
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-200">

        @livewire('admin.admin-dashboard-nav-component')
        </div>
        <!-- Main Content -->
        <div class="w-3/4 bg-white p-8">
            <!-- Selected page content -->
            <h1 class="text-3xl font-bold">Home Banner Preview Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.wre</p>
        </div>
        <button class="bg-bluetange hover:bg-sitangeh text-white font-bold py-2 px-4 rounded">
            Edit Home Banner
        </button>

    </div>

</div>
