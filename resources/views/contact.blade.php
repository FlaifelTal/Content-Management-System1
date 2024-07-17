@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us Page</title>
   
  </head>
  <body>
  
    <div
      class="container"
      style="padding-top: 100px; padding-left: 400px; padding-right: 400px"
    >
    @if ($errors->any())
    @foreach ($errors->all() as  $error)
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif
<form action="{{route('contact.submit')}}" method="POST">
    @csrf
    <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"
            >Email address</label
          >
          <input name="email"
            {{-- type="email" --}}
            class="form-control"
            id="exampleFormControlInput1"
            placeholder="name@example.com"
          />
        </div>
        <div class="mb-3">
          <label for="Conatact us" class="form-label">Contact us</label>
          <textarea name="contact"
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
        </div>
        <!-- <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div> -->
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
    </div>
    <div class="container" style="padding-top: 100px;">
        <iframe
            width="100%"
            height="400"
            frameborder="0"
            style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.104747662775!2d-122.4194!3d37.7749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808f5eaf58cb%3A0x7b1bc75ab6df7309!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1644922387856!5m2!1sen!2sus"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </div>

  </body>
</html>
@endsection