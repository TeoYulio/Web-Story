@extends('layout.main')
@section('container')

    <head>


        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/css/home.css">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">

    </head>

    <body>

        <div class="col-lg-11 mx-auto p-3 py-md-5" background-image: url('{{ asset('image/tes.jpg') }}');>
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2"
                        viewBox="0 0 118 94" role="img"> --}}
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                    </svg>
                    <span class="fs-1 fst-italic">HOLLAA,SELAMAT DATANG</span>
                </a>
            </header>

            <main>
                <h1>Cerita Yuk</h1>
                <p class="fs-5 col-md-8">Cerita Yuk merupakan sebuah portal cerita yang dimana disini kita bisa menemukan
                    cerita-cerita yang sesuai dengan apa yang ingin kita,ayo bergabung menjadi bagian
                    dari cerita yuk.</p>

                <div class="mb-5">


                    <a href="/register/" class="btn btn-success primary btn-lg px-4">Daftar Segera</a>
                </div>

                <hr class="col-3 col-md-2 mb-5">

                <div class="row g-5">
                    <div class="col-md-6">
                        <h2>Project WEB 2
                        </h2>
                        <p>Web ini dirancang untuk memenuhi tugas akhir dari pembelajaran Pemrograman Web II</p>

                    </div>

                    <div class="col-md-6">
                        <h2>Alur Membuat Cerita</h2>
                        <p>1.Pertama terlebih dahulu registrasi akun didalam fitur login</p>
                        <p>2.Ketika sudah baru login menggunakan username dan password yang sudah dibuat</p>
                        <p>3.Akan masuk kedalam dashboard dibagian post kalian bisa posting cerita dengan ketentuan yang ada
                        </p>
                        <p>4.Ketika sudah diposting,cerita kalian akan muncul di laman Post dan bisa dibaca oleh orang
                            banyak
                        </p>

                    </div>
                </div>
            </main>
            <footer class="pt-5 my-5 text-muted border-top ">
                &copy; 2021 Created by <a href="https://www.instagram.com/teojuliosht/" text-dark>
                    Teo Yulio Sihotang </footer>
        </div>
        <style>
            body {
                background-color: #FFF3E6;
            }
        </style>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>
@endsection