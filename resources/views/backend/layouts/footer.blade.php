<script src="{{ asset('/backend/js/app.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('/backend/assets/libs/summernote/summernote-lite.js') }}"></script>
<script src="{{ asset('/backend/assets/libs/select2/js/select2.full.min.js') }}"></script>
<script>
    $('.summernote').summernote({
        height: 150,
        width: '100%',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['height', ['height']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ]
    });
</script>

@include('sweetalert::alert')
@yield('third_party_scripts')
@stack('page_scripts')
@yield('script')
