@extends('frontend.layouts.app')

@section('content')

    <section class="bg-white mt-4">
        <div class="row">
            <div class="container">
                <div class="col-md-9 col-sm-12 col-xs-12 content-right pull-right">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 contact_left pull-left">
                            <div class="contactinfo">
                                <p class="title-send">Thông tin liên hệ</p>
                                <div class="content-contact">
                                    <ul>
                                        <li>
                                            <p>
                                                <span style="font-family:arial,helvetica,sans-serif;"><span
                                                        style="font-size:14px;"><b><i>Showroom TP.HCM: {{App\GeneralSetting::first()->address}}</i></b></span></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="font-family:arial,helvetica,sans-serif;"><span
                                                        style="font-size:14px;"><b>Điện thoại<i>: </i></b>{{App\GeneralSetting::first()->phone}}</span></span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="font-family:arial,helvetica,sans-serif;"><span
                                                        style="font-size:14px;"><b>Hotline - Zalo <i>: </i></b>{{App\GeneralSetting::first()->phone}}</span></span>
                                            </p>
                                        </li>
                                    </ul>

                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 contact_right pull-right">
                            <p class="title-send">Gửi thông tin liên hệ</p>
                            <form action="{{route('gui-lien-he')}}" enctype="multipart/form-data"
                                  id="form-sec" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="map"
                                     style="text-align:center; font-size:20px; margin-bottom:10px; color:#f44336;"></div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="fullname" id="fullname" value=""
                                               placeholder="Họ và tên *" pattern=".{6,}" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" name="phone" id="phone" value=""
                                               placeholder="Điện thoại *" pattern="(\+?\d[- .]*){7,16}" required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" name="email" id="email" value=""
                                               placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                               required="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <textarea type="text" class="form-control" rows="5" name="message" id="message"
                                              placeholder="Nội dung *" pattern=".{6,}" required=""></textarea>
                                </div>
                                <div class="form-group" style="text-align:center;">
                                    <input type="submit" name="contact" value="Gửi liên hệ" id="contact"
                                           class="btn btn-info">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-md-3 col-xs-12 pull-left content-left hidden-xs hidden-sm">
                    @foreach(App\Category::where('id',73)->get() as $category)
                        @foreach($category->subcategories as $subcategory)
                            <div class="box_left">
                                <h2 class="title-left">
                                    <a href="{{$subcategory->link()}}" title="{{$subcategory->name}}"><i
                                            class="fa fa-bullseye" aria-hidden="true"></i> {{$subcategory->name}}</a>
                                </h2>
                                <ul>
                                    @foreach($subcategory->subsubcategories as $subsubcategory)
                                        <li><h3 class="title_h3 transition"><a href="{{$subsubcategory->link()}}"
                                                                               title="{{$subsubcategory->name}}"><i
                                                        class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{$subsubcategory->name}}</a></h3></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

        </div>

    </section>

@endsection
