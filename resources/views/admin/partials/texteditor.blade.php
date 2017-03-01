<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
    //        tinymce.init({
    //            selector: 'textarea',
    //            plugins: 'link code print',
    //            browser_spellcheck: true,
    //            menubar: false,
    //        });
    tinymce.init({
        selector: 'textarea',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: '//www.tinymce.com/css/codepen.min.css'
    });
</script>