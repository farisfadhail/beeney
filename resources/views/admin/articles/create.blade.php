<x-app-layout>
    <x-slot name="header">
        {{ __('Article - Create (Admin)') }}
    </x-slot>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Form -->
    <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data" class="mt-8">
        @csrf
        <div class="flex flex-col mb-4">
            <label for="thumbnail" class="text-2xl font-semibold mb-4">Thumbnail</label>
            <img id="preview" alt="preview image" width="200">
            <input type="file" name="thumbnail" id="thumbnail" placeholder="Masukkan judul" />
            @error('thumbnail')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="title" class="text-2xl font-semibold mb-4">Judul</label>
            <input value="{{ old('title') }}" type="text" name="title" id="title" placeholder="Masukkan judul" class="input input-bordered w-full" />
            @error('title')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex-col mt-8">
            <label for="body" class="text-2xl font-semibold mb-4">Isi</label>
            <textarea name="article_body" id="editor">{{ old('body') }}</textarea>
            @error('body')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
            @error('user_id')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex-col mt-8">
            {{--<label for="multipleTags" class="text-2xl font-semibold mb-4">Tags</label>

            <select class="form-control multipleTags" multiple>
                <option selected="selected">orange</option>
                <option>white</option>
                <option>purple</option>
            </select>--}}

            {{--<select name="tags[]" id="tags" class="select select-bordered selectMultiple w-full" multiple="multiple">
                <option value="">Pilih tags</option>
                <option value="Badan Pengurus Harian">Badan Pengurus Harian</option>
                <option value="Pemrograman">Pemrograman</option>
                <option value="OS & Jaringan">OS & Jaringan</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Humas">Humas</option>
            </select>--}}
        </div>

        <div class="flex justify-end my-4">
            <button type="submit" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Create Article</button>
            <a href="{{ route("question.index") }}"><button type="button" class="btn btn-outline btn-error ml-4">Batal</button></a>
        </div>
    </form>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        $(".multipleTags").select2({
            tags: true,
        })

        /* Preview Image Script */
        let hero_image_input = document.getElementById("thumbnail");
        hero_image_input.addEventListener("change", function()
        {
            let file = hero_image_input.files[0];
            let reader = new FileReader();
            reader.addEventListener("load", function()
            {
                let image_source = document.getElementById("preview");
                image_source.src = reader.result;
            });

            reader.readAsDataURL(file);
        });
    </script>
</x-app-layout>
