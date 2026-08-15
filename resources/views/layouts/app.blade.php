
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title','NovaTech Solutions')</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}
body{background:#f4f7fb;color:#333;}
.container{width:90%;max-width:1200px;margin:auto;}
main{min-height:80vh;}
.hero{background:linear-gradient(135deg,#0f172a,#2563eb);color:white;padding:100px 20px;text-align:center;}
.hero h1{font-size:50px;margin-bottom:20px;}
.hero p{font-size:20px;margin-bottom:30px;}
.btn{background:#f59e0b;color:white;padding:14px 28px;border-radius:6px;text-decoration:none;}
.section{padding:70px 20px;}
.section-title{text-align:center;font-size:36px;margin-bottom:40px;}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:25px;}
.card{background:white;padding:25px;border-radius:12px;box-shadow:0 5px 15px rgba(0,0,0,.1);text-align:center;}
.card h3{margin:15px 0;}
.team{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;}
.member{background:white;padding:20px;border-radius:12px;text-align:center;}
.member img{width:100px;height:100px;border-radius:50%;margin-bottom:15px;}
.contact-box{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;}
input,textarea{width:100%;padding:12px;margin:10px 0;border:1px solid #ccc;border-radius:6px;}
button{background:#2563eb;color:white;border:none;padding:12px 20px;border-radius:6px;cursor:pointer;}
</style>

</head>
<body>

@include('components.navbar')

<main>
@yield('content')
</main>

@include('components.footer')

</body>
</html>