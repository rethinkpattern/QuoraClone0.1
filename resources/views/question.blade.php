@extends('layouts.app')

@section('content')

    @php
        if(!( isset($anws) and isset($qt)))
            return redirect()->route('home') ;
    @endphp

    <div class="card" >
        <div class="card-block">
            <h3 class="card-title">{{ $qt->user->name }}</h3>
            <p class="card-text">{{ $qt->the_question }}</p>
            <a href="{{ route('profile' , [ 'id' => $qt->user_id] ) }}" class="btn btn-primary">see more from {{ $qt->user->name }}</a>
        </div>
    </div>


    <style>
        .thumbnail {
            padding: 0px;
        }

        .panel {
            position: relative;
        }

        .panel > .panel-heading:after, .panel > .panel-heading:before {
            position: absolute;
            top: 11px;
            left: -16px;
            right: 100%;
            width: 0;
            height: 0;
            display: block;
            content: " ";
            border-color: transparent;
            border-style: solid solid outset;
            pointer-events: none;
        }

        .panel > .panel-heading:after {
            border-width: 7px;
            border-right-color: #f7f7f7;
            margin-top: 1px;
            margin-left: 2px;
        }

        .panel > .panel-heading:before {
            border-right-color: #ddd;
            border-width: 8px;
        }
    </style>

    <br>
    <br>
    <br>
    <br>
    <br>

    @foreach($anws as $answer)

        <div class="row">
            <div class="col-sm-1">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $answer->user->name }} </strong> <small> at {{ $answer->answred_at }}</small> <span class="text-muted">{{ $answer->answered_at }}</span>
                    </div>
                    <div class="panel-body">
                        {{ $answer->the_answer }}
                    </div><!-- /panel-body -->
                </div><!-- /panel panel-default -->
            </div><!-- /col-sm-5 -->
        </div><!-- /row -->

    @endforeach


    <style>
        body{ background: #fafafa;}
        .widget-area.blank {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none;
        }
        body .no-padding {
            padding: 0;
        }
        .widget-area {
            background-color: #fff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
            -ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
            -o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
            float: left;
            margin-top: 30px;
            padding: 25px 30px;
            position: relative;
            width: 100%;
        }
        .status-upload {
            background: none repeat scroll 0 0 #f5f5f5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            float: left;
            width: 100%;
        }
        .status-upload form {
            float: left;
            width: 100%;
        }
        .status-upload form textarea {
            background: none repeat scroll 0 0 #fff;
            border: medium none;
            -webkit-border-radius: 4px 4px 0 0;
            -moz-border-radius: 4px 4px 0 0;
            -ms-border-radius: 4px 4px 0 0;
            -o-border-radius: 4px 4px 0 0;
            border-radius: 4px 4px 0 0;
            color: #777777;
            float: left;
            font-family: Lato;
            font-size: 14px;
            height: 142px;
            letter-spacing: 0.3px;
            padding: 20px;
            width: 100%;
            resize:vertical;
            outline:none;
            border: 1px solid #F2F2F2;
        }

        .status-upload ul {
            float: left;
            list-style: none outside none;
            margin: 0;
            padding: 0 0 0 15px;
            width: auto;
        }
        .status-upload ul > li {
            float: left;
        }
        .status-upload ul > li > a {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            color: #777777;
            float: left;
            font-size: 14px;
            height: 30px;
            line-height: 30px;
            margin: 10px 0 10px 10px;
            text-align: center;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -ms-transition: all 0.4s ease 0s;
            -o-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
            width: 30px;
            cursor: pointer;
        }
        .status-upload ul > li > a:hover {
            background: none repeat scroll 0 0 #606060;
            color: #fff;
        }
        .status-upload form button {
            border: medium none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
            color: #fff;
            float: right;
            font-family: Lato;
            font-size: 14px;
            letter-spacing: 0.3px;
            margin-right: 9px;
            margin-top: 9px;
            padding: 6px 15px;
        }
        .dropdown > a > span.green:before {
            border-left-color: #2dcb73;
        }
        .status-upload form button > i {
            margin-right: 7px;
        }
    </style>

    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <div class="container">
        <div class="row">
            <h5> New answer </h5>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="widget-area no-padding blank">
                    <div class="status-upload">
                        <form method="post" action="{{ route('new_answer') }}">
                            <textarea placeholder=" answer the question here !! " name="the_answer"></textarea>
                            <input name="questionId" value="{{ $qt->id }}" type="hidden">
                            <input name="userId" value="{{ \Auth::user()->id }}" type="hidden">
                            {{ csrf_field() }}
                            <ul>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                            </ul>
                            <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Post the answer </button>
                        </form>
                    </div><!-- Status Upload  -->
                </div><!-- Widget Area -->
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("[data-toggle=tooltip]").tooltip();
        });
    </script>




@endsection