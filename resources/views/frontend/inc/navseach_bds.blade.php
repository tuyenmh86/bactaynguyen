<header>
    {{-- <img src="https://cenhomes.vn/images/banner.jpg" class="banner">    
    <div class="container-fluid topsearch">
        <div class="row"> --}}

            {{-- <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1" id="">

                <form action="{{route('search')}}" method="get" id="frmhomesearch">
                    <div class="typesearch" id="hometypesearch">
                        <a href="#" class="active" rel="1">Dự án</a>
                        <a href="#" rel="2">Nhà bán</a>
                        <a href="#" rel="3">Thuê nhà</a>
                        <a href="{{route('advanceSearch')}}" rel="3">Tìm kiếm nâng cao</a>
                    </div>
                    <div class="row pb-1">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><img src="https://cenhomes.vn/images/search_icon.png"></span>
                            </div>
                            <input type="hidden" value="1" id="txttypesearch">
                            <input class='form-control' type="text" aria-label="Search" id="search" name="q"
                            placeholder="Tôi muốn tìm ..." autocomplete="off" />
                            
                            <div class="input-group-append">
                                <button class="btn btn-orange" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="listsuggest stylebar">
                        </div>
                        <div class="typed-search-box d-none">
                            <div class="search-preloader">
                                <div class="loader">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="search-nothing d-none">
    
                            </div>
                            <div id="search-content">
    
                            </div>
                        </div>
                    </div>
                </form>
            </div> --}}
            <div class="s007" style="background-image: url('{{asset(\App\GeneralSetting::first()->seach_background)}}');background-size:cover; height:550px;">
                <form action="{{route('resultAdvanceSearch')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                  <div class="inner-form">
                    <div class="basic-search">
                      <div class="input-field">
                        <div class="icon-wrap">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                            <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                          </svg>
                        </div>
                        {{-- <input id="search" type="text" placeholder="Search..." /> --}}
                        <input class='form-control' type="text" aria-label="Search" id="search" name="q"
                            placeholder="Tôi muốn tìm ..." autocomplete="off" />
                        {{-- <div class="result-count">
                          <span>108 </span>results</div>
                      </div> --}}
                    </div>
                    <div class="advance-search">
                      {{-- <span class="desc">Tìm kiếm nâng cao</span> --}}
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <select class="form-control mb-3" name="provice" id="province_id" data-placeholder="Chọn Tỉnh">
                                <option value="" selected>Chọn thành phố </option>
                                @foreach(\App\Province::all() as $provice)
                                    @if ($provice->id==41)
                                        <option selected value="{{$provice->id}}">{{__($provice->name)}} </option>
                                    @else
                                        <option value="{{$provice->id}}">{{__($provice->name)}} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <select class="form-control mb-3" data-placeholder="Chọn TP/Quận/Huyện" id="district_id" name="district_id">

                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <select class="form-control mb-3" data-placeholder="Chọn phường xã" id="ward_id" name="ward_id">

                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <select id="huongdat" name="huongdat" class="form-control mb-3" aria-describedby="huongdatHelpBlock">
                                <option>Chọn hướng</option>
                                <option value="Đông">Đông</option>
                                <option value="Đông Nam">Đông Nam</option>
                                <option value="Đông Bắc">Đông Bắc</option>
                                <option value="Tây">Tây</option>
                                <option value="Tây Nam">Tây Nam</option>
                                <option value="Tây Bắc">Tây Bắc</option>
                                <option value="Nam">Nam</option>
                                <option value="Bắc">Bắc</option>
                              </select> 
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input class='form-control mb-3' type="text" aria-label="Giá từ" id="min_price" name="min_price"
                            placeholder="Giá từ: 500.000.000 ..." autocomplete="off" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input class='form-control mb-3' type="text" aria-label="Giá đến" id="max_price" name="max_price"
                        placeholder="Giá đến: 700.000.000 ..." autocomplete="off" />
                        </div>
                        
                      </div>
                      <div class="row third">
                        <div class="input-field">
                          <button class="btn-search">Search</button>
                          <button class="btn-delete" id="delete">Delete</button>
                        </div>
                      </div>
                    </div>
                    <div class="listsuggest stylebar">
                    </div>
                    <div class="typed-search-box d-none">
                        <div class="search-preloader">
                            <div class="loader">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="search-nothing d-none">

                        </div>
                        <div id="search-content">

                        </div>
                    </div>
                  </div>
                </form>
              </div>
        {{-- </div>
    </div> --}}
</header>
    {{-- <script src="{{asset('frontend/js/extention/choices.js')}}"></script> --}}
   <script>
    //   const customSelects = document.querySelectorAll("select");
    //   const deleteBtn = document.getElementById('delete')
    //   const choices = new Choices('select',
    //   {
    //     searchEnabled: false,
    //     removeItemButton: true,
    //     itemSelectText: '',
    //   });
    //   for (let i = 0; i < customSelects.length; i++)
    //   {
    //     customSelects[i].addEventListener('addItem', function(event)
    //     {
    //       if (event.detail.value)
    //       {
    //         let parent = this.parentNode.parentNode
    //         parent.classList.add('valid')
    //         parent.classList.remove('invalid')
    //       }
    //       else
    //       {
    //         let parent = this.parentNode.parentNode
    //         parent.classList.add('invalid')
    //         parent.classList.remove('valid')
    //       }
    //     }, false);
    //   }
    //   deleteBtn.addEventListener("click", function(e)
    //   {
    //     e.preventDefault()
    //     const deleteAll = document.querySelectorAll('.choices__button')
    //     for (let i = 0; i < deleteAll.length; i++)
    //     {
    //       deleteAll[i].click();
    //     }
    //   });
        $(document).ready(function(){
            get_district_by_provice();
        });
        
        $('#province_id').on('change', function() {
            get_district_by_provice();

	    });
        function get_district_by_provice(){
            var province_id = $('#province_id').val();
            $.post('{{ route('province.get_district') }}',{_token:'{{ csrf_token() }}', province_id:province_id}, function(data){
		    $('#district_id').html(null);
		    for (var i = 0; i < data.length; i++) {
                $('#district_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
               
		    }
            $('#district_id').change();
		    });
            
        }
        $('#district_id').on('change', function() {
            get_wards_by_district();
	    });
        function get_wards_by_district(){
            var district_id = $('#district_id').val();
           
            $.post('{{ route('district.getWards') }}',{_token:'{{ csrf_token() }}', district_id:district_id}, function(data){
                $('#ward_id').html(null);
            
		    for (var i = 0; i < data.length; i++) {
		        $('#ward_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
               
		    }
            $('#ward_id').change();
		    });
        }
    </script>