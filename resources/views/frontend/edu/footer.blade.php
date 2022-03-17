@php
    $info= \App\GeneralSetting::first();
@endphp

{{-- <section class="mobile_chat hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-3 chat-item">
				<a href="tel:0985231499 " class="chat-item-url">
					<div class="chat-item-image">
						<img alt="goi-dien" src="{{asset('frontend/images/icon-phone2.png')}}" class="img-responsive" alt="goi-dien"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="sms:0985231499" class="chat-item-url">
					<div class="chat-item-image">
						<img alt="nhan-tin" src="{{asset('frontend/images/icon-sms2.png')}}" class="img-responsive lazyloaded" alt="nhan-tin"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="http://zalo.me/0985231499" class="chat-item-url">
					<div class="chat-item-image">
						<img alt="chat-zalo" src="{{asset('frontend/images/icon-zalo2.png')}}" class="img-responsive" alt="chat-zalo"></noscript>
					</div>
				</a>
			</div>
			<div class="col-3 chat-item">
				<a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-M%E1%BA%A7m-non-Hoa-H%E1%BB%93ng-292827164821466/">
					<div class="chat-item-image">
						<img alt="facebook" src="{{asset('frontend/images/icon-mesenger2.png')}}" class="img-responsive lazyloaded" alt="facebook"></noscript>
					</div>
				</a>
			</div>
		</div>
	</div>
</section> --}}
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
       <div class="row mb-5">
             <div class="ftco-footer-widget mb-5">
                <p class="p-footer">
                   {{$info->description}}
                </p>
             </div>
       </div>
       {{-- <div class="row">
          <div class="col-md-12 text-center">
             <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
             </p>
          </div>
       </div> --}}
    </div>
 </footer>
 