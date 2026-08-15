@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section style="background:#2563eb;color:white;padding:100px 20px;text-align:center;">
    <h1 style="font-size:50px;">NovaTech Solutions</h1>
    <p style="font-size:20px;margin-top:15px;">
        Empowering Businesses Through Innovative Technology
    </p>

    <a href="{{ route('services') }}" class="btn"
       style="background:white;color:#2563eb;font-weight:bold;">
        View Our Services
    </a>
</section>

<section style="padding:60px 20px;">
    <div class="container">

        <h2 style="text-align:center;margin-bottom:30px;">
            Company Introduction
        </h2>

        <p style="font-size:18px;text-align:center;line-height:1.8;">
            NovaTech Solutions is a leading technology company dedicated
            to delivering innovative software solutions for businesses
            of all sizes. We help organizations improve efficiency,
            security, and digital transformation through modern
            technology.
        </p>

    </div>
</section>

<section style="padding:60px 20px;background:white;">
    <div class="container">

        <h2 style="text-align:center;margin-bottom:40px;">
            Featured Services
        </h2>

        <div style="display:flex;justify-content:space-around;flex-wrap:wrap;gap:20px;">

            <div style="background:#f3f4f6;padding:20px;width:300px;border-radius:10px;">
                <h3>Web Development</h3>
                <p>Modern and responsive business websites.</p>
            </div>

            <div style="background:#f3f4f6;padding:20px;width:300px;border-radius:10px;">
                <h3>Mobile Applications</h3>
                <p>Android and iOS solutions for growing companies.</p>
            </div>

            <div style="background:#f3f4f6;padding:20px;width:300px;border-radius:10px;">
                <h3>Cybersecurity</h3>
                <p>Protecting business data from threats.</p>
            </div>

        </div>

    </div>
</section>

@endsection

//2