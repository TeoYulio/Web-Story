@extends('layout.main')


@section('container')
    <main>

        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Feature</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="">
                    <div class="">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection" />
                        </svg>
                    </div>
                    <h2 door-open>Post</h2>
                    <p>Merupakan wadah seluruh cerita yang sudah diposting ada,dan kalian bisa membaca walau belum
                        mepunyai akun</p>
                    <a href="/post" class="btn btn-success primary btn-lg px-4">Post</a>
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#chevron-right" />
                    </svg>
                    </a>
                </div>
                <div class="">
                    <div class="">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#people-circle" />
                        </svg>
                    </div>
                    <h2>Kategori</h2>
                    <p>Merupakan pembagian kategori dari sub-sub cerita yang supaya mempermudah mencari cerita yang
                        diinginkan.</p>
                    <a href="/categories" class="btn btn-success primary btn-lg px-4">Kategori</a>

                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#chevron-right" />
                    </svg>
                    </a>
                </div>
                <div class="">
                    <div class=" ">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#toggles2" />
                        </svg>
                    </div>
                    <h2>Login</h2>
                    <p>Jika ingin melakukan atau membagikan karya harap terlebih dahulu mempunyai aku agar bisa masuk
                        kedalam web untuk membuat cerita</p>
                    <a href="/login" class="btn btn-success primary btn-lg px-4">Login</a>

                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#chevron-right" />
                    </svg>
                    </a>
                </div>
            </div>
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
