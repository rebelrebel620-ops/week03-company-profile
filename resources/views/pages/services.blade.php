@extends('layouts.app')

@section('title', 'Services')

@section('content')

<div class="container" style="padding:60px 20px;">

    <h1 style="text-align:center;margin-bottom:40px;">
        Our Services
    </h1>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>🌐 Web Development</h3>
            <p>Custom websites and web applications.</p>
        </div>

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>📱 Mobile Development</h3>
            <p>Android and iOS application development.</p>
        </div>

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>🎨 UI/UX Design</h3>
            <p>Modern and user-friendly interface design.</p>
        </div>

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>☁️ Cloud Solutions</h3>
            <p>Cloud migration and infrastructure services.</p>
        </div>

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>🔒 Cybersecurity</h3>
            <p>Security audits and protection services.</p>
        </div>

        <div style="background:white;padding:20px;border-radius:10px;">
            <h3>💼 IT Consulting</h3>
            <p>Technology planning and digital transformation.</p>
        </div>

    </div>

</div>

@endsection

//tesr