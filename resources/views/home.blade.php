@extends('layouts.app')

@section('content')
    <div class="chat-container row justify-content-center">
        <div class="chat-area">
            <div class="card">
                <div class="card-header">Comment</div>
                <div class="card-body chat-card">
                    <div id="comment-data"></div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{route('add')}}">
        @csrf
        <div class="comment-container row justify-content-center">
            <div class="input-group comment-area">
                <textarea class="form-control" placeholder="push massage (shift + Enter)" aria-label="with textarea"
                onkeydown="if(event.shiftkey&&event.keyCode==13>{document.getElementById('submit').click();return false};">
         
                </textarea>
                <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>
            </div>
        </div>
    </form>
@endsection

@section('js')
<script src="{{asset('js/comment.js')}}"></script>
@endsection