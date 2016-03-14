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
<div class="row">
    <div class="col-sm-10"><h1>Edit page: About Us</h1></div>
    <div class="col-sm-2">
        <div class="editor__actions">
            <button class="btn btn-primary editor-actions__button" tile="Save"><i class="fa fa-check"></i></button>
            <button class="btn btn-default editor-actions__button" tile="Cancel"><i class="fa fa-times"></i></button>
        </div>
    </div>
</div>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" id="myTabs">
    <li role="presentation" class="active"><a href="#tab-content" aria-controls="tab-content" role="tab" data-toggle="tab">Content</a></li>
    <li role="presentation"><a href="#tab-images" aria-controls="tab-images" role="tab" data-toggle="tab">Images</a></li>
    <li role="presentation"><a href="#tab-settings" aria-controls="tab-settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>
<br>
<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="tab-content">
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
    <div role="tabpanel" class="tab-pane" id="tab-images">
        <div class="row">
            <div class="col-sm-3">
                <figure class="editor__figure thumbnail">
                    <button class="btn btn-danger btn-sm editor__btn-delete-image"><i class="fa fa-times"></i></button>
                    <img src="https://placeimg.com/500/500/arch" alt="" class="img-responsive">
                </figure>
            </div>
            <div class="col-sm-3">
                <figure class="editor__figure thumbnail">
                    <button class="btn btn-danger btn-sm editor__btn-delete-image"><i class="fa fa-times"></i></button>
                    <img src="https://placeimg.com/500/500/arch" alt="" class="img-responsive">
                </figure>
            </div>
            <div class="col-sm-3">
                <figure class="editor__figure thumbnail">
                    <button class="btn btn-danger btn-sm editor__btn-delete-image"><i class="fa fa-times"></i></button>
                    <img src="https://placeimg.com/500/500/arch" alt="" class="img-responsive">
                </figure>
            </div>
            <div class="col-sm-3">
                <figure class="editor__figure thumbnail">
                    <button class="btn btn-danger btn-sm editor__btn-delete-image"><i class="fa fa-times"></i></button>
                    <img src="https://placeimg.com/500/500/arch" alt="" class="img-responsive">
                </figure>
            </div>
            <div class="col-sm-3">
                <figure class="editor__figure thumbnail">
                    <button class="btn btn-danger btn-sm editor__btn-delete-image"><i class="fa fa-times"></i></button>
                    <img src="https://placeimg.com/500/500/arch" alt="" class="img-responsive">
                </figure>
            </div>
        </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="tab-settings">
        <div class="form-group">
            <input type="checkbox" data-toggle="switch" name="background-colour">
            <label for="background-colour">Enable background for logo &amp; nav</label>
        </div>
        <div class="form-group">
            <input type="checkbox" data-toggle="switch" name="background-colour">
            <label for="background-colour">Enable background for text</label>
        </div>
    </div>
</div>
@endsection
