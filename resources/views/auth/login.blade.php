@extends('layouts.main') @section('title', ' | Log-in') @section('content')




<div class="ui centered grid">

    <div class="row">
        <div class="four wide column">

            <h2 class="ui teal image header">
                <img src="assets/images/logo.png" class="image">
                <div class="content">
                    Log-in to your account
                </div>
            </h2>
            <form class="ui large form" method="POST" action="{{route('login')}}">
            {{ csrf_field() }}
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="E-mail address">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <button class="ui button" type="submit">Submit</button>
                </div>

                <div class="ui error message"></div>

            </form>

          
        </div>

    </div>






</div>
</div>
@endsection