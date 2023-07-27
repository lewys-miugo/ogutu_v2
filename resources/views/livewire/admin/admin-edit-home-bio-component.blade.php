<div>
    {{-- Success is as dangerous as failure. --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <div class="w-full px-4 py-8">
        <div class="w-full px-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="py-4  px-6">
                <!-- <h2 class="text-2xl font-bold mb-4">return Policy</h2> -->
                <form wire:submit.prevent="updateHomeBio" class="w-full">
                    <label class="text-2xl text-center font-bold mb-4" for="home_bio">Home Biography edit</label>

                    <div class="mb-4">
                        <!-- <h2 class="text-center underline underline-offset-2">Preview</h2>
                        <p class="mx-8">{!!$home_bio!!}</p> -->
                        <p>color: #00063d and size: heading 3</p>
                    </div>

                    <div wire:ignore class="w-full h-full">
                        <textarea name="home_bio" id="home_bio" wire:model="home_bio" class="w-full h-full">
                            {!! $home_bio !!}
                        </textarea>
                        
                    </div>

                    <!-- <div>
                    dd({{-- $homeBio->home_bio --}})
                    </div> -->
                    

                    @error('home_bio')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror

                    <div class="flex justify-center mt-2">
                        <button type="submit" class="flex bg-editlink rounded-lg m-4 p-2 w-fit">Update</button>
                    </div>

                    @if(Session::has('message'))
                        <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="font-semibold">Success! | {{Session::get('message')}}</span>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <!-- <script>
      $('#home_bio').summernote({
        // placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100,
        callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('home_bio',contents);
                }
            }
      });
    </script> -->

    <script>
        $('#home_bio').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 4,
            height: 300,
            width:1000,
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('home_bio',contents);
                }
            }

        });
        {{-- $('#home_bio').summernote('code', '{{$homeBio->home_bio}}'); --}}
    </script> 
    
</div>
