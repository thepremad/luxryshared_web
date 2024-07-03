@extends('frontend.layouts.app')

@section('content')



<section>

    <div class="container">
        <div class="listitem-head mb-3">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>

    <div class="about-wp">
        <div class="container">
            <div class="about-sec mt-5">
                <ul>
                    <li>
                        <span></span>
                    </li>
                    <li>
                        <h3>About Us</h3>
                    </li>
                </ul>
                <div class="text-center mb-5">
                    <h5>What is <span style="color: rgba(60, 186, 121, 1);">LXRY SHARED</span>?</h5>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more. <br>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/images/aboutimg.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection