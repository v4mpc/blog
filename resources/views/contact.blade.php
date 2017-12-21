@extends('layouts.main') @section('title', ' | Contact') @section('content')







<div class="ui centered grid">

    <div class="row">
        <div class="six wide column">
            <form action="">
                <div class="ui equal width form">
                    <div class="fields">
                        <div class="field">
                            <label>Username</label>
                            <div class="ui left icon input">
                                <input type="text" placeholder="Name">
                                <i class="user icon"></i>
                            </div>

                        </div>
                        <div class="field">
                            <label>Email</label>

                            <div class="ui left icon input">
                                <input type="email" placeholder="Email">
                                <i class="mail icon"></i>
                            </div>

                        </div>
                    </div>
                    <div class="field">
                        <label>Comment</label>
                        <textarea rows="6" placeholder="Say Something..."></textarea>
                    </div>
                    <div class="field">
                        <button type="submit" class="positive ui right floated button">submit</button>
                    </div>
                </div>

            </form>
        </div>






    </div>
</div>

@endsection