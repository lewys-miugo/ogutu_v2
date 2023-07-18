<div>
@section('title') {{'Dashboard'}}@endsection
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="h-12 bg-gray-100">
        <!-- Navbar -->
        <nav class="bg-blue-500 py-2">
            <div class="container mx-auto px-4">
            <!-- Navbar content -->
                @livewire('admin.admin-dashboard-nav-component')
            </div>
        </nav>

        <!-- Main Content -->
        <!-- <div class="container flex flex-col  justify-center  px-4 py-8">
            Content
            <h1 class="text-3xl font-bold">Welcome to the Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            
        </div> -->
    </div>

</div>
