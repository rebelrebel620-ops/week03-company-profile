@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container" style="padding:60px 20px;">

    <h1>Contact Us</h1>

    <form style="margin-top:30px;">

        <input type="text"
               placeholder="Full Name"
               style="width:100%;padding:12px;margin-bottom:15px;">

        <input type="email"
               placeholder="Email Address"
               style="width:100%;padding:12px;margin-bottom:15px;">

        <textarea
            placeholder="Message"
            style="width:100%;padding:12px;height:150px;margin-bottom:15px;">
        </textarea>

        <button class="btn">
            Send Message
        </button>

    </form>

    <hr style="margin:40px 0;">

    <h3>Company Information</h3>

    <p>📍 Makati City, Metro Manila, Philippines</p>
    <p>📧 contact@novatechsolutions.com</p>
    <p>📞 +63 917 123 4567</p>

    <h3 style="margin-top:20px;">Follow Us</h3>

    <p>
        Facebook | Instagram | LinkedIn | X
    </p>

</div>

@endsection