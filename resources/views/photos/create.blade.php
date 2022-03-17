@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm ảnh vào Album</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group">
                <div class="col-lg-3">
                    <label class="control-label">Chọn Album</label>
                </div>
                <div class="col-lg-9">
                    <select class="form-control" name="album_id" id="album_id">
                        <option value="0">Chọn album</option>
                        @foreach (\App\Album::where('published',1)->get() as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-9">
                    <div id="photos">
                        {{-- @foreach (\App\Photo::all() as $item)
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="img-upload-preview">
                                    <img src="{{ asset($item->photo) }}" alt="" class="img-responsive">
                                    <input type="hidden" name="previous_meta_img" value="{{ $item->photo }}">
                                    <button type="button" class="btn btn-danger close-btn remove-files"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
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
@endsection
@section('script')
<script type="text/javascript">
    // $('#album_id').on('change', function() {
    //     getPhotos();
    // });
    // function getPhotos(){
    //     var album_id = $('#album_id').val();
    //     $('#photos').html(null);
    //     $.get('{{ route('album.photo')}}',{_token:'{{ csrf_token() }}', album_id:album_id}, function(data){
    //         console.log(data);
    //             for (var i = 0; i < data.length; i++) {
    //             $('#photos').append(
    //                 "<div class='col-md-4 col-sm-4 col-xs-6'>"+
    //                 "<img src='{{ asset($item->photo) }}'' class='img-responsive'>"+
    //                 "<input type='hidden' name='previous_meta_img' value='"+ data[i].photo+"'>"+
    //                 "<button type='button' class='btn btn-danger close-btn remove-files'><i class='fa fa-times'></i></button>"+
    //                 "</div>"
    //             )};
    //     });
    // }
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
</script>
@endsection