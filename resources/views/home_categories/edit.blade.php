<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Home Categories')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('home_categories.update', $homeCategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="panel-body">
            <div class="form-group" id="category">
                <label class="col-lg-2 control-label">{{__('Category')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>
                        @foreach(\App\Category::all() as $category)
                            <option value="{{$category->id}}" @php if($homeCategory->category_id == $category->id) echo "selected"; @endphp>{{__($category->name)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" id="subcategory">
                <label class="col-lg-2 control-label">{{__('Subcategory')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-max-7" name="subcategories[]" id="subcategory_id" data-placeholder="Choose Options (max 7)" multiple required>

                    </select>
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

        get_edit_subcategories_by_category();

        $('#category_id').on('change', function() {
            get_edit_subcategories_by_category();
        });

        function get_edit_subcategories_by_category(){
            var category_id = $('#category_id').val();
            $.post('{{ route('home_categories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
                $('#subcategory_id').html(null);
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    $('#subcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name +' ('+data[i].number_of_products+' products)'
                    }));
                }

                $("#subcategory_id > option").each(function() {

                    @foreach (json_decode($homeCategory->subcategories) as $key => $id)
                        if(this.value == '{{$id}}'){
                            $(this).prop('selected', true);
                        }
                    @endforeach
                });
                $(".demo-select2-max-7").select2({
                    maximumSelectionLength: 7
                });
            	$(".demo-select2-max-7").on("select2:select", function (evt) {
            		  var element = evt.params.data.element;
            		  var $element = $(element);

            		  $element.detach();
            		  $(this).append($element);
            		  $(this).trigger("change");
            	});
            });
        }
    });
</script>
