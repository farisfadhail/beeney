<x-app-layout>
    <x-slot name="header">
        {{ __('Article - Create (Admin)') }}
    </x-slot>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Form -->
    <div class="flex flex-col mb-4">
        <label for="thumbnail" class="text-2xl font-semibold mb-2">Thumbnail</label>
        <img src="{{ asset($thumbnail) }}" alt="" width="200">
    </div>

    <div class="flex flex-col">
        <label for="title" class="text-2xl font-semibold mb-4">Judul</label>
        <div class="w-full py-2" disabled>{{ $article->title }}</div>
    </div>

    <div class="flex flex-col mt-8">
        <label for="body" class="text-2xl font-semibold mb-4">Isi</label>
        <textarea name="article_body" class="">{{ $article->article_body }}</textarea>
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

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
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
