@extends('layout')

@section('content')
<main>
    <div class="blogContainer">
        @for($i = 0; $i < 9; $i++)
            <a href="{{route('blog.inner', $i)}}">
                <div id="image">
                    <img src="https://d3544la1u8djza.cloudfront.net/APHI/Blog/2016/10_October/persians/Persian+Cat+Facts+History+Personality+and+Care+_+ASPCA+Pet+Health+Insurance+_+white+Persian+cat+resting+on+a+brown+sofa-min.jpg" alt="">
                </div>
                <div>White cats</div>
                <p> 21 June 2020 08:04 AM </p>
                <div id="paragraph">Lid est laborum et dolorum fuga. Et harum quidem rerum facilis est et expeditasi distincti...
                </div>
            </a>
        @endfor
    </div>
</main>
@endsection
