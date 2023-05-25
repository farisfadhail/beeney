@extends('layouts.frontend')

@section('content')
    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Form -->
    <form method="POST" action="{{ route('reply.update', $reply->id) }}" enctype="multipart/form-data" class="mt-8">
        @csrf
        @method('PUT')
        <div class="flex flex-col mt-8">
            <label for="reply_body" class="text-2xl font-semibold mb-4">Isi</label>
            <textarea name="reply_body" id="editor">{{ old('reply_body', $reply->reply_body) }}</textarea>
            @error('reply_body')
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
            <button type="submit" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Update balasan</button>
            <a href="{{ route('question.index') }}"><button type="button" class="btn btn-outline btn-error ml-4">Batal</button></a>
        </div>
    </form>

    <div class="w-full bg-green-700 h-[1px] my-4"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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

    </script>

@endsection
