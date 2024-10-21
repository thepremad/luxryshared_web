@extends('frontend.layouts.app')
@section('content')
<div id="page-content" class="aboutUs faq">
    <div class="container">
        <div class="aboutUs-Heading">
            <h4>Helps</h4>                    
            <h6 class="text-center mb-5">{{ $category->name }}</h6>                    
            <p class="text-center mb-5" >{{ $category->description ?? '' }}</p>
        </div>
        <div class="faq-container update mt-5">
            <div class="row faq-contant2 mt-5">
                
                @foreach ($faq as $item)
                    <div class="col-md-12 mb-1">
                        <div class="faq-question">
                            <h4 >
                                {{ $item->title }}
                            </h4>
                        </div>
                        <div class="faq-answer">
                            {!! $item->text !!}
                        </div >
                    </div>
                    
                @endforeach

            </div>
        </div>
        
    </div>
  

</div>
@endsection