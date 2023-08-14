<head>
    <style>
        .link-menu a, footer {
            color: #fff !important;
            display: flex;
            padding-top: 5px;
        }
        footer p{
            padding-right: 100px;
        }
        footer{
            margin-top: 100px !important;
        }
        footer h4{
            color:#fff;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <footer class="bg-primary">
        <div class="container d-flex align-item-center mt-5 mb-5 text-white">
            <div class="row">
                <div class="col-md-5">
                    <h4>Laravel</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, quasi hic iste veniam reprehenderit laudantium nesciunt, facere quisquam officiis nobis eligendi, sit adipisci. Delectus amet odit molestiae corrupti non debitis!</p>
                </div>
                <div class="col-md-3 px-5">
                    <h4>Menu</h4>
                    <div class="link-menu text-white">
                        <a href="/" class="{{ ($title === "Home") ? 'active' : '' }}">Home</a>
                        <a href="/about" class="{{ ($title === "About") ? 'active' : '' }}">About</a>
                        <a href="/posts" class="{{ ($title === "Posts") ? 'active' : '' }}">Blog</a>
                        <a href="/categories" class="{{ ($title === "Categories") ? 'active' : '' }}">Categories</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Sosial Media</h4>
                </div>
            </div>
        </div>
    </footer>
</body>