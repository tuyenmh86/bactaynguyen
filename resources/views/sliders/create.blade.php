<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Slider Information')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group">
                <div class="col-sm-3">
                    <label class="control-label">{{__('Slider Images')}}</label>
                    <strong>(850px*315px)</strong>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="name" placeholder="" onchange="">
                    <input type="text" class="form-control" name="content" placeholder="" onchange="">
                    <select class="form-control" name="category_post_id">
                        @foreach (\App\CategoriesPost::where('published',1)->get() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-control" name="post_id">
                    </select>
                </div>
                {{-- <div class="col-sm-3">
                    <label class="control-label">Mobile Photos</label>
                    <strong>(412px*275px)</strong>
                </div> --}}

                <div class="col-sm-9">
                    <div id="photos">

                    </div>

                    {{-- <div id="photos_mobile">

                    </div> --}}
                </div>
            </div>
        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#photos").spartanMultiImagePicker({
            fieldName:        'photos[]',
            maxCount:         10,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
        $("#photos_mobile").spartanMultiImagePicker({
            fieldName:        'photos_mobile[]',
            maxCount:         10,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-9 col-xs-6',
            maxFileSize:      '',
            dropFileLabel : "Drop Here",
            onExtensionErr : function(index, file){
                console.log(index, file,  'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(index, file){
                console.log(index, file,  'file size too big');
                alert('File size too big');
            }
        });
    });

</script>
