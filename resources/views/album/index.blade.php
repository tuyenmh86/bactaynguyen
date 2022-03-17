@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('album.create')}}" class="btn btn-info pull-right">{{__('Add New')}}</a>
        </div>
    </div>
    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Albums</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered demo-dt-basic" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>name</th>
                        <th>alias</th>
                        <th>position</th>
                        <th>published</th>
                        <th width="10%">{{__('Options')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($albums as $key => $album)
                        <tr>
                            <td>
                                {{ $key+1 }}
                            </td>
                            <td>
                                {{ $album->id}}
                            </td>
                            <td>
                                {{ $album->name}}
                            </td>
                            <td>
                                {{ $album->alias}}
                            </td>
                            <td>
                                @php
                                    switch($album->position){
                                        case 1:
                                            echo('Trang chủ');  
                                            break;
                                        case 2:
                                            echo('Giới thiệu');  
                                            break;
                                        case 3:
                                            echo('Thư viện');  
                                            break;
                                    }
                                @endphp
                            </td>
                           
                            <td>
                                <label class="switch">
                                    <input onchange="update_published(this)" value="{{ $album->id }}"
                                           type="checkbox" <?php if ($album->published == 1) echo "checked";?> >
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon"
                                            data-toggle="dropdown" type="button">
                                        {{__('Actions')}} <i class="dropdown-caret"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">

                                        {{-- <li><a href="{{route('page.edit', $page->id)}}">{{__('Edit')}}</a></li>
                                        <li>
                                            <a onclick="confirm_modal('{{route('widget.destroy', $page->id)}}');">{{__('Delete')}}</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });

        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('album.updatePublished') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Published album updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }

        function update_featured(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('album.updateFeatured') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    showAlert('success', 'Featured Album updated successfully');
                }
                else{
                    showAlert('danger', 'Something went wrong');
                }
            });
        }
    </script>
@endsection
