@extends('layouts.main')


@section('title', ' | Blog')
@section('content')

      <div class="ui three column centered grid">
    <div class="column">
      <div class="ui black fluid card" href="#">
        <div class="content">
          <div class="header">Cute Dog</div>

          <div class="meta">
           <span class="right floated time"><a class="ui teal tag label">Featured</a> <a class="ui red tag label">Upcoming</a></span>
            <span>2 days ago</span>
          </div>
          <div class="description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, at excepturi, ratione quam debitis similique
              qui dolorum reiciendis autem eius dolor corrupti voluptas voluptate incidunt ducimus! Veritatis laboriosam
              dicta minima!
            </p>
          </div>
        </div>
        <div class="extra content">
        <a class="ui inverted green button">More</a>
          <div class="right floated author">
            <img class="ui avatar image" src="images/avatar04.png"> Matt
          </div>
        </div>
      </div>
    </div>
  </div>

  
@endsection

  






