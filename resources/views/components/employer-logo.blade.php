@props(['employer','width'=>'90'])
<img src="{{ asset('storage/' . $employer->logo) }} " width="{{$width}} " class="rounded-xl" alt="emp_logo">