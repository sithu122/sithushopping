@extends('layouts.front-end')
@section('content')

<!-- category section -->
    
<!-- @php
   var_dump($items);
@endphp -->
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-8 fw-bolder">အမိုက်စား ဖက်ရှင်တွေကို အလွယ်တကူ ဝယ်ယူလိုက်ပါ</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                    @foreach($categories as $category)
                    <a class="col mb-5" href="">
                           <div class="card text-bg-dark">
                            <img src="{{$category->photo}}" class="card-img" alt="....">
                            <div class="card-img-overlay">
                                <h5 class="card-title">{{$category->name}}</h5>
                            </div>
                           </div>
                       </a>



                    @endforeach
              
            </div>

        </div>
    </section>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($items as $item) 
                     
                <div class="col mb-5">
                     <div class="card h-100">
                            @if($item->discount >0)
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$item->discount}}%</div>
                            @endif
                             <!-- Product image-->

                             <img class="card-img-top" src="{{$item->image}}" alt="..." />
                             <!-- Product details-->
                             <div class="card-body p-4">
                                <div class="text-center">
                                     <!-- Product name-->
                                    <h5 class="fw-bolder">{{$item->name}}</h5>
                                     <!-- Product reviews-->
                                   
                                     <!-- Product price-->
                                    @if($item->discount >0)
                                     <span class="text-mute text-decoration-line-through">{{$item->price}}</span>
                                     {{$item->price- (($item->discount/100)*$item->price)}} MMK
                                    @else
                                       {{$item->price}}MMK
                                    @endif
                                </div>
                                <!-- Product price-->
                                

                             </div>
                             <!-- Product actions-->
                             <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                 <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('items.show',$item->id)}}">View Option</a></div>
                             </div>
                         </div>
                </div>
                    @endforeach 
                </div>
               
            </div>
        </section>
       
 @endsection