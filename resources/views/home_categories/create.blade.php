<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Home Categories')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('home_categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group" id="category">
                <label class="col-lg-2 control-label">{{__('Category')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-placeholder" name="category_id" id="category_id" required>

                        @foreach(\App\Category::all() as $category)
                            @if (\App\HomeCategory::where('category_id', $category->id)->first() == null)
                                <option value="{{$category->id}}">{{__($category->name)}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" id="subsubcategory">
                <label class="col-lg-2 control-label">{{__('Subcategory')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-max-4" name="subcategories[]" id="subcategory_id" data-placeholder="Choose Options (max 6)" multiple>

                    </select>
                </div>
            </div>
            <div class="form-group" id="subsubcategory">
                <label class="col-lg-2 control-label">{{__('Sub Subcategory')}}</label>
                <div class="col-lg-7">
                    <select class="form-control demo-select2-max-4" name="subsubcategories[]" id="subsubcategory_id" data-placeholder="Choose Options (max 6)" multiple>

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

        // get_subsubcategories_by_category();

        $('#category_id').on('change', function() {
            get_subcategories_by_category();
        });

        function get_subcategories_by_category(){
            var category_id = $('#category_id').val();
            $.post('{{ route('home_categories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
                $('#subcategory_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#subcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name +' ('+data[i].number_of_products+' products)'
                    }));
                    $(".demo-select2-max-6").select2({
                        maximumSelectionLength: 6
                    });
                    $(".demo-select2-max-6").on("select2:select", function (evt) {
                          var element = evt.params.data.element;
                          var $element = $(element);

                          $element.detach();
                          $(this).append($element);
                          $(this).trigger("change");
                    });
                }
            });
        }

        function get_subsubcategories_by_category(){
            var category_id = $('#category_id').val();
            $.post('{{ route('home_categories.get_subsubcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
                $('#subsubcategory_id').html(null);
                for (var i = 0; i < data.length; i++) {
                    $('#subsubcategory_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name +' ('+data[i].number_of_products+' products)'
                    }));
                    $(".demo-select2-max-6").select2({
                        maximumSelectionLength: 6
                    });
                    $(".demo-select2-max-6").on("select2:select", function (evt) {
                		  var element = evt.params.data.element;
                		  var $element = $(element);

                		  $element.detach();
                		  $(this).append($element);
                		  $(this).trigger("change");
                	});
                }
            });
        }

    });
</script>
