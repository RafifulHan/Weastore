<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        <link rel= "stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        

        <header class="container-fluid">
            <div class="container">
                <nav class="navbar">
                    <div class="navbar-header">
                        <a href="" class="navbar-brand">Weastore</a>
                    </div>
                    <div class="topnav" id="myTopnav">
                        <div class="dropdown">
                            <button class="dropbtn" class="btn btn-primary">Produk 
                            <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                            <a href="#">Web Design</a>
                            <a href="#">Mobile Apps</a>
                            </div>
                        </div> 
                        <a href="#news">Tentang Kami</a>
                        <a href="#contact">Kontak</a>
                        
                        <a href="#about">Help</a>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </div>
                </nav>

                <div class="intro">
                    <div class="col-md-6">
                        <h1>We'll build a perfect website for you</h1>
                        <p>Kami memperhatikan setiap detail kode dan desain untuk menciptakan website yang ringan, elegan dan tentunya modern untuk Anda.</p>
                        <a href="" class="btn btn-primary">Order Sekarang</a> 
                        <a href="" class="btn btn-default">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid" id="recomended">
            <div class="container">
                <h4>Anda Ingin memiliki aplikasi web base sekelas enterprise untuk meningkatkan efisiensi bisnis anda? Kami bisa membantu anda membangun sistem impian anda, sesuai dengan kebutuhan anda. Mulai dari aplikasi database, penjualan, crm, hingga solusi aplikasi custom.</h4>
            </div>
        </div>


        <div class="container-fluid" id="services">
            <div class="container">
                <h1>Layanan Kami</h1>
                <h4>Web Development, Moblie Apps Developer & Web Designer</h4>
            </div>
            <div class="container">
                <div class="row">
                   <div class="col-md-6">
                       <h1>Aplikasi Berbasis Web</h1>
                       <h4 class="mt-5">Kami dapat membantu anda membangun sistem impian anda menggunakan PHP, Laravel, CI, Node JS, atau Ruby.</h4>
                       <h4 class="mt-5 mb-5">Contoh sistem yang kami kembangkan :</h4>
                       <h4>Aplikasi manajemen database. Aplikasi penjualan. Aplikasi CRM. Aplikasi Human Resource.Aplikasi ERP.Custom Solution</h4><br>
                       <a href="" class="btn btn-dark">Konsultasi Aplikasi Web Anda</a>
                   </div>
                   <div class="col-md-6 mt-5">
                       <img src="/img/services/website.png" alt="website.png">
                   </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-5">
                       <img src="/img/services/apps.png" alt="website.png">
                   </div>
                   <div class="col-md-6">
                       <h1>Aplikasi Mobile Android & IOS</h1>
                       <h4 class="mt-5">Kami dapat membangun aplikasi mobile android dan IOS sesuai kebutuhan perusahaan anda. Aplikasi mobile ini juga dapat dihubungkan ke Aplikasi Web anda.</h4>
                       <h4 class="mt-5 mb-5">Contoh sistem yang kami kembangkan :</h4>
                       <h4>Aplikasi booking untuk travel/hotel. Aplikasi ecommerce. Aplikasi training untuk gym. Aplikasi marketplace. Aplikasi hardware remote. Aplikasi full custom</h4><br>
                       <a href="" class="btn btn-dark">Konsultasi Proyek Mobile App!</a>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-6">
                       <h1>Outsourcing Programmer</h1>
                       <h4 class="mt-5">Dengan 100an staff yang telah berpengalaman mengerjakan proyek enterprise, perusahaan kami cukup besar untuk selalu dapat menyediakan resource yang anda butuhkan, namum cukup kecil untuk selalu flexible.</h4>
                       <h4 class="mt-5">Aplikasi manajemen database. Aplikasi penjualan. Aplikasi CRM. Aplikasi Human Resource.Aplikasi ERP.Custom Solution</h4><br>
                       <a href="" class="btn btn-dark">Konsultasi Aplikasi Web Anda</a>
                   </div>
                   <div class="col-md-6 mt-5">
                       <img src="/img/services/staf.png" alt="website.png">
                   </div>
                </div>
            </div>
        </div>




        <div class="container-fluid" id="system">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pt-5 pb-4" >
                        <img src="img/icon/seo.png" alt="">
                        <h4>Desain Yang Elegan</h4>
                        <p>Membuat desain website secantik mungkin. </p>
                    </div>

                    <div class="col-md-4 pt-5 pb-4">
                        <img src="img/icon/android.png" alt="">
                        <h4>Fast Loading</h4>
                        <p>Cepat dalam proses loading site on site. </p>
                    </div>

                    <div class="col-md-4 pt-5 pb-4">
                        <img src="img/icon/mac.png" alt="">
                        <h4>SEO Friendly</h4>
                        <p>Sebaik mungkin untuk menampilkan website dalam mesin pencari. </p>
                    </div>  
                </div>  
            </div>
        </div>


        

        {{-- WEB LIST --}}

        <div class="container" id="packet">
                <div class="container">
                    <div class="row">
                        <h1>Paket Harga Pembuatan Website</h1>
                        <p>Harga pembuatan website sangat bervariasi menurut kesulitan desain dan fasilitas-fasilitas yang diinginkan. Untuk Negoisasi & anggaran biaya silahkan hubungi kami.</p>
                    </div>
                </div>
                <div class="card-group mt-5 mb-5">
                    <div class="card">
                        <div class="img-thumbnail" id="web-startup">
                            <div class="image-startup">
                                <img src="https://img.icons8.com/ios-filled/50/000000/empty-box.png">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><h3><b>Paket Website Startup</b></h3></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Gratis </b>Domain (.com, .co.id)</li>
                                <li class="list-group-item"><b>10 GB </b>Private Cloud Hosting</li>
                                <li class="list-group-item"><b>100 Email </b>Akun Bisnis</li>
                                <li class="list-group-item"><b>10 Halaman </b>Desain Awa</li>
                                <li class="list-group-item"><b>SEO Onpage? </b>Optional</li>
                            </ul>
                            <a href="" class="btn btn-primary">Pilih Paket</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img-thumbnail" id="web-business">
                            <div class="image-business">
                                <img src="https://img.icons8.com/ios/50/000000/cardboard-box.png">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><h3><b>Paket Website Business</b></h3></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Gratis </b>Domain (.com, .co.id)</li>
                                <li class="list-group-item"><b>20 GB </b>Private Cloud Hosting</li>
                                <li class="list-group-item"><b>200 Email </b>Akun Bisnis</li>
                                <li class="list-group-item"><b>30 Halaman </b>Desain Awal</li>
                                <li class="list-group-item"><b>SEO Onpage? </b>Ready</li>
                            </ul>
                            <a href="" class="btn btn-primary">Pilih Paket</a>
                        </div>
                    </div>

                    <div class="card" >
                        <div class="img-thumbnail" id="web-expert">
                            <div class="image-expert">
                                <img src="https://img.icons8.com/ios-filled/64/000000/open-box.png">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><h3><b>Paket Website Expert</b></h3></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Gratis </b>Domain (.com, .co.id)</li>
                                <li class="list-group-item"><b>40 GB </b>Private Cloud Hosting</li>
                                <li class="list-group-item"><b>400 Email </b>Akun Bisnis</li>
                                <li class="list-group-item"><b>Unlimited Halaman </b>Desain Awal</li>
                                <li class="list-group-item"><b>SEO Onpage? </b>Ready</li>
                            </ul>
                            <a href="" class="btn btn-primary">Pilih Paket</a>
                        </div>
                    </div>
            </div>
        </div>

        

        <div class="container-fluid" id="media">
            <div class="container p-5" style="text-align: center">
                <h3><b>Hubungi Kami</b></h3><br>
                <h4>Call / Whatsapp: / 081 7241 1716 / 081 7241 1716</h4>
                <h4>Email:yamadotaro38@gmail.com</h4>
            </div>
        </div>

        <div class="container-fluid" id="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3><b>Memahami Bisnis</b></h3>
                        <p>Mengintegrasikan strategi marketing dengan website sebagai salah satu komponen marketing.</p>
                    </div>

                    <div class="col-md-3">
                        <h3><b>Cepat Diakses</b></h3>
                        <p>Optimisasi website sehingga website dapat dibuka dengan cepat di Indonesia.</p>
                    </div>

                    <div class="col-md-3">
                        <h3><b>Website Responsive</b></h3>
                        <p>Website menyesuaikan di HP, Tablet, Notebook dan PC</p>
                    </div>

                    <div class="col-md-3">
                        <h3><b>Halaman 1 di Google</b></h3>
                        <p>Menjamin Langsung Halaman 1 di Google setelah website selesai dikerjakan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5" id="project">
            <div class="container pb-5"><h1><b>Proyek </b> Kami</h1></div>
            <div class="container" id="child-project"> 
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/project/01.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/02.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/03.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/04.jpg" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <img src="img/project/05.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/06.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/15.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/16.jpg" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <img src="img/project/07.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/08.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/09.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/10.jpg" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <img src="img/project/11.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/12.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/13.jpg" alt="">
                    </div>

                    <div class="col-md-3">
                        <img src="img/project/14.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="team">
            <div class="container"><h1><b>Tim Kami</b></h1></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image"><img src="/img/icon/profile.png" alt=""></div>
                        <h4><b>Sirajudin Salam</b></h4>
                        <h5 class="mb-3">Managing Director</h5>
                        <h5>Enjory the Journey. Its more important than the destination.</h5>
                    </div>

                    <div class="col-md-3">
                        <div class="image"><img src="/img/icon/profile.png" alt=""></div>
                        <h4><b>Muhammad Ilyas Afriyan</b></h4>
                        <h5 class="mb-3">Head of Technology</h5>
                        <h5>The only way to do great work is by loving what you do.</h5>
                    </div>

                    <div class="col-md-3">
                        <div class="image"><img src="/img/icon/profile.png" alt=""></div>
                        <h4><b>Zidane Maulana Chilmy</b></h4>
                        <h5 class="mb-3">Head of Business Dev</h5>
                        <h5>Working with details and precision creates something in balance.</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- @if (isset($req))
            <div class="container" id="alert">
                <div class="alert alert-success">Pesan Anda Sudah Terkirim!</div>
            </div>
        @endif --}}

        <div class="container-fluid" id="kontak">
            <div class="container">
                <h1>Kontak</h1>
                <div class="card-body">
                
                <form action="{{ route('send') }}" method="POST" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="username" name="username" placeholder="Username" class="form-control" required><br>
                            <input type="email" name="email" placeholder="Email" class="form-control" required><br>
                            <input type="number" name="nohp" placeholder="Nomor Telepon" class="form-control" required><br>
                        </div>

                        <div class="col-md-6">
                            <textarea type="text" name="desc" placeholder="Pesan Anda" class="form-control" id="desc" required></textarea><br>
                        </div>
                        <button type="submit" name="messege" class="btn btn-success">Kirim Sekarang</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <footer>
            <div class="container" >
                <div class="row">
                    <div class="col-md-4" id="address">
                        <h5 class="mb-4">PT.Compro Web Apps Store</h5>
                        <ul>
                            <li><span><img src="https://img.icons8.com/ultraviolet/40/000000/marker.png"> </span> Address :</li>
                            <li>Sentral Bisnis Artha , Jl. Bandar Artha Blok A6A No. 22-23, Sumbar Barat, Semarang 14240</li>
                        </ul>

                        <ul>
                            <li><span><img src="https://img.icons8.com/ultraviolet/40/000000/phone.png"> </span> Phone :</li>
                            <li>081 7241 1716 / 087 7837 03945</li>
                        </ul>

                        <ul>
                            <li><span><img src="https://img.icons8.com/ultraviolet/40/000000/new-post.png"></span> Email :</li>
                            <li>yamadotrao38@gmail.com</li>
                        </ul>
                    </div>

                    <div class="col-md-4" id="company">
                        <h5 class="mb-4">Company</h5>
                        <ul>
                            <li><a href="">Tentang Kami</a></li>
                            <li><a href="">Karier Di Weastore</a> </li>
                            <li><a href="">Blog</a> </li>
                            <li><a href="">Hubungi Kami</a> </li>
                        </ul>
                    </div>

                    <div class="col-md-4" id="newsletter">
                        <h5 class="mb-4">Newsletter</h5>
                        <ul>
                            <input type="email" name="email" placeholder="Your Email Here" class="form-control"><br>
                            <button type="submit" class="btn btn-dark">Subscribe</button>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container" id="social-media">
                <h3 class="mr-5 mb-2">Follow Us</h3>
                <section><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></section>
                <section><img src="https://img.icons8.com/color/48/000000/facebook.png"></section>
                <section><img src="https://img.icons8.com/color/48/000000/twitter.png"></section>
                <section><img src="https://img.icons8.com/color/48/000000/youtube-play.png"></section>
            </div>
            <p>Copyright &copy; 2019 | <a href="">weastore.com</a></p>
        </footer>
    
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
