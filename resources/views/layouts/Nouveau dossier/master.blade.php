<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">

    <title>WEBEXIT</title>

    <!-- Styles -->
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">

    <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="{{ asset('assets/js/vendor/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/respond.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <![endif]-->
    
</head>
<body>


	@include('layouts/header_blog')

	 <div id="app">

        @yield('content')

    </div>




</div>
<!-- End demo content -->
<script src="{{ asset ('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


    <script>
    tinymce.init({
      selector: '#description',
      height: 300,
      plugins: [
              'advlist autolink lists link image code charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
      toolbar: 'undo redo | link image | code',
      toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons',
      image_advtab: true,
      // enable title field in the Image dialog
      image_title: true, 
      // enable automatic uploads of images represented by blob or data URIs
      automatic_uploads: true,
      // add custom filepicker only to Image dialog
      file_picker_types: 'image',
      file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.onchange = function() {
          var file = this.files[0];
          var reader = new FileReader();
          
          reader.onload = function () {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            // call the callback and populate the Title field with the file name
            cb(blobInfo.blobUri(), { title: file.name });
          };
          reader.readAsDataURL(file);
        };
        
        input.click();
      }
    });
    </script>
<script type="text/javascript">
  $(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>

<script>
$(function() {
    function split( val ) {
        return val.split( '/,\s*/ ');
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
    
    $( "#tags-input" ).bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 1,
        source: function( request, response ) {
            // delegate back to autocomplete, but extract the last term
            console.log(response);
            //$.getJSON("{{url('administration/liste-tags') }}", { term : extractLast( request.term )},response);
        },
        focus: function() {
            // prevent value inserted on focus
            return false;
        },
        select: function( event, ui ) {
            var terms = split( this.value );
            // remove the current input
            terms.pop();
            // add the selected item
            terms.push( ui.item.value );
            // add placeholder to get the comma-and-space at the end
            terms.push( "" );
            this.value = terms.join( ", " );
            return false;
        }
    });
});
</script>


</body>
</html>
