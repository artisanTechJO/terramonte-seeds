@extends('layouts.User.userLayout')
@section('head')
    <style>
        #events .player .vp-video-wrapper{
            border-radius: 10px !important;
        }
        #events .player vp-controls-wrapper .vp-title{
            display: none !important;
        }
        @media(min-width:365px) and (max-width:700px){
            .entry-header{
                height:265px;
            }
            iframe{
                border-radius: 10px;
            }
            .entry-header iframe{
                height:100%;
                width:100%;
            }
        }
        @media(max-width:364px){
            iframe{
                border-radius: 10px;
            }
            .entry-header iframe{
                height:100%;
            }
        }
        .vp-center #player{
            height:400px !important;
            border-radius: 10px;
        }

    </style>
@endsection
@section('content')
<!-- about section start -->
    <div class="container">
{{--        <div class="row justify-content-center mt-5" id="events">--}}
{{--            <div class="col-lg-9  main-content">--}}
{{--                <div class="entry-wrapper">--}}
{{--                    <div class="entry-single">--}}
{{--                        <div class="entry-header">--}}

{{--                            <iframe  width="100%" height="400" src="https://vimeo.com/691534464" style="border:none;border-radius: 15px">--}}
{{--                            </iframe>--}}
{{--                        </div>--}}
{{--                        <div class="entry-content">--}}
{{--                            <ul class="meta-post list-unstyled pl-0 d-flex">--}}
{{--                                <li>--}}
{{--                                    <span class="icon"><i class="far fa-clock"></i></span>--}}
{{--                                    <span class="meta-content">10/4/2021</span>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h2 class="title mb-3">Field day</h2>--}}
{{--                            <div style="color: #000">--}}
{{--                               Scenes from the field day of <strong>Terra Monte Seeds Company</strong> in our station in jordan vauy , for protected and open field varieties sush as tomato, cucumbers, sweet peppers, hot peppers, cherry tomato, which are characterized by advanced and developed specifications.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        @foreach($events as $event)
            <div class="row justify-content-center mt-5">
                <div class="col-lg-9  main-content">
                    <div class="entry-wrapper">
                        <div class="entry-single">
                            <div class="entry-header">
                                <img src="{{$event->getMedia('event')->first()->getUrl()}}" alt="thumb">
                            </div>
                            <div class="entry-content">
                                <ul class="meta-post list-unstyled pl-0 d-flex">
                                    <li>
                                        <span class="icon"><i class="far fa-clock"></i></span>
                                        <span class="meta-content">{{$event->events_date}}</span>
                                    </li>
                                </ul>
                                <h2 class="title mb-3">{{$event->title}}</h2>
                                <div style="color: #000">
                                    {!! $event->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

<!-- about section end -->

@endsection
@section('scripts')
    <script>
        $(documnt).ready(function(){
            $('#player').css('height','100%');
        });
    </script>
@endsection
