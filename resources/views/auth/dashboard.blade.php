@extends('auth.layouts')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header class="bg-primary text-white text-left py-5 container-fluid">
        <h1>Ahmad Syauqi</h1>
        <p>UI/X Designer and Android Developer</p>
    </header>

    <div class="container mt-4">
        <h2>About Me</h2>
        <p>
            I am a committed software engineering student who is always looking to improve my knowledge and skills in the dynamic tech field.
            I'm eager to start a career in software development because it will let me use my passion for innovation and problem-solving to produce significant solutions.
            I have acquired the theoretical knowledge and practical experience necessary to succeed in the field of software engineering at University of Gadjah Mada Vocational School.
            Join me on this journey as I use cutting-edge software development and a desire for constant improvement to revolutionize the world of technology.
        </p>

        <h2>Education</h2>
        <p>Present - Software Engineering, University of Gadjah Mada Vocational School</p>
        <p>June 2022- MAN 2 Yogyakarta, Special Region Of Yogyakarta</p>

        <h2>Skills</h2>
        <p>Programming</p>
        <p>UI/X Design</p>
        <p>Microsoft Office</p>
    </div>

    <div class="container text-center mt-4">
        <a href="https://www.linkedin.com/in/ahmad-syauqi-49b628249" class="btn btn-primary" target="_blank">View LinkedIn Profile</a>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 Ahmad Syauqi Taqiyuddin
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

@endsection