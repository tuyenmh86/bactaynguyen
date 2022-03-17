<footer>
 <div class="container">
   <div class="row">
      <div class="col-sm-3">
         <p><a href=""><img src="{{asset($sitesetting->logo)}}" style="max-height:60px"></a></p>
               <p><i class="fas fa-map-marker-alt"></i>   {{$sitesetting->address}}</p>
               <p>
                  <i class="fas fa-phone-square"></i> 
                  Hotline: <br/>
                  <a href="tel:{{$sitesetting->phone}}">{{$sitesetting->phone}}</a><br/>
                  <a href="tel:{{$sitesetting->zalo}}">{{$sitesetting->zalo}}</a>
               </p>
               <p><i class="fas fa-envelope"></i> Email <a href="mailto:{{$sitesetting->email}}">{{$sitesetting->email}}</a></p>
      </div>
      <div class="col-sm-9 padtop10">
         <div class="row">
            @foreach (\App\CategoriesPost::where('published',1)->where('footer',1)->take(5)->get() as $mfooter)
               <div class="col-sm-4">
                  <div class="menufooter">
                     <h4>{{$mfooter->name}}</h4>
                     <ul>
                        @foreach (\App\Post::where('published',1)->where('category_id','=',$mfooter->id)->get() as $news)
                              <li>
                                 <a href="{{$news->link()}}">{{$news->name}}</a>
                              </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               @endforeach
            
         </div>
      </div>
   </div>
   <div class="row copyright">
      <div class="col-sm-12">
         <p class="text-center"></p>
         <center>
            bdstoanphat.com là sản phẩm công nghệ của {{$sitesetting->site_name}}<br>
            <center>
               <p></p>
            </center>
         </center>
      </div>
   </div>
</div>

</footer>