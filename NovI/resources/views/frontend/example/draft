@extends('frontend/layouts.template')
@section('header')
    Add Chapter - Novel Inspiration
@endsection
@section('content')
<div class="contact-content">
    <div class="container">
        <h2 class="title">Add New Chapter</h2>
            <div class="col-md-4">
                <p class="description">You can add new chapter for your novel here.<br><br>
                </p>
                <form role="form" id="contact-form" method="post">
                    <input type="hidden" name="chapter_id" id="chapter_id" value="" >
                    <input type="hidden" name="chapter_read_counter" id="chapter_read_counter" value="0">
                    <div class="form-group label-floating">
                        <label class="control-label">Chapter Title</label>
                        <input type="text" name="chapter_title" value="" class="form-control">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Email address</label>
                        <input type="email" name="email" class="form-control"/>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Phone</label>
                        <input type="text" name="phone" class="form-control"/>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Chapter Text</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <div class="submit text-center">
                        <input type="submit" class="btn btn-primary btn-raised btn-round" value="Add" />
                    </div>
                </form>
                <script>
                    $(document).ready(function() {
                        $('#summernote').summernote({
                toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
                ]
                });
                    });
                </script>
            </div>
    </div>
</div>

@endsection
