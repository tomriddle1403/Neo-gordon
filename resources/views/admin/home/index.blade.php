@extends ('admin.layout')

@section ('styles')

@endsection

@section ('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/quill/0.20.1/quill.min.js"></script>
<script>
$(function() {
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
  var editor = new Quill('#js-editor', {
    modules: { toolbar: '#js-editor-toolbar' },
    theme: 'snow',
    styles: {
        '.ql-editor': {
          'font-family': 'Overpass, Ubuntu, san-serif',
          'font-weight': 300,
          'font-size': '1.8rem'
        }
      }
  });
})
</script>
@endsection

@section ('main')
<h1>Edit page: About Us</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" id="myTabs">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Content</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Images</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>
<br>
<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <!-- Create the editor container -->
        <div class="editor__wrapper">
            <!-- Create the toolbar container -->
            <div id="js-editor-toolbar" class="editor__toolbar">
                <div class="btn-group btn-group-sm">
                  <button type="button" class="ql-bold btn btn-info"><i class="fa fa-fw fa-bold"></i></button>
                  <button type="button" class="ql-italic btn btn-info"><i class="fa fa-fw fa-italic"></i></button>
                  <button type="button" class="ql-underline btn btn-info"><i class="fa fa-fw fa-underline"></i></button>
                  <button type="button" class="ql-strike btn btn-info"><i class="fa fa-fw fa-strikethrough"></i></button>
                  <button type="button" class="ql-underline btn btn-info"><i class="fa fa-fw fa-underline"></i></button>
                </div>
            </div>
            <div id="js-editor" class="editor__textarea">
              <p>Hello World!</p>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">profile...</div>
    <div role="tabpanel" class="tab-pane" id="settings">settings...</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
@endsection
