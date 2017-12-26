@extends('layouts.main')


@section('title', ' | Blog')
@section('content')

{{Auth::()->id}}
 <div class="ui three column centered grid">
    <div class="column">
        
        <form class="ui form">
  <div class="two fields">
    <div class="field">
      <label>First name</label>
      <input type="text" placeholder="First Name">
    </div>
    <div class="field">
      <label>Last name</label>
      <input type="text" placeholder="Last Name">
    </div>
  </div>

  <div class="field">
    <label>Profession</label>
    <input type="text" placeholder="e.g Computer Scientist">
  </div>

  <div class="two fields">
    <div class="field">
      <label>Course</label>
      <input type="text" placeholder="e.g BSc in Computer Science">
    </div>
    
    <div class="field">
      <label>University</label>
      <input type="text" placeholder="e.g IFM">
    </div>
  </div>

  <div class="field">
    <label>Skills</label>
    <select multiple="" class="ui dropdown">
      <option value="">Select Skills</option>
      <option value="AF">PHP</option>
      <option value="AX">JAVA</option>
      <option value="AL">Graphic Design</option>
      <option value="DZ">Server Admin</option>
      <option value="AS">Gaming</option>
      <option value="AD">CSS</option>
      <option value="AO">HTML</option>
      </select>
  </div>

  <button class="ui button" type="submit">Submit</button>
</form>
        </div>
    </div>


    @endsection 