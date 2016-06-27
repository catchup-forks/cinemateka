<div class="form-group col-md-12 text-center">
  <input
    id="image_upload"
    name="image_upload"
    title="Select Image"
    data-url="admin/upload"
    data-remove-url="admin/remove"
    accept="image/*"
    type="file" multiple
  >

  <!-- Preview(s) will be displayed here -->
  {!! $field['surpass']->html('preview') !!}

</div>

@section('script')

    <!-- Load required JS libraries. -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="bower_components/blueimp-load-image/js/load-image.all.min.js"></script>
    <script src="bower_components/blueimp-canvas-to-blob/js/canvas-to-blob.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="bower_components/blueimp-tmpl/js/tmpl.min.js"></script>

    <!-- JS code (including <script></script> tag) will be displayed here. -->
    {!! $field['surpass']->html('js') !!}
@stop