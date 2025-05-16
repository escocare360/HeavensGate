
@include('partials.header')
    
{{-- <link rel="stylesheet" href="Assets/Css/ClientBookNow.css"> --}}
</head>
<body>
  <main class="d-flex justify-content-center align-items-center" >
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <form>
                    <img class="d-block mx-auto mb-4" src="../Assets/img/logo.webp" alt="" width="102" height="102">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputasdEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inpudasdtPassword" class="form-control mb-3" placeholder="Password" required>
                    
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2022</p>
                </form>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEm2ail" class="form-control mb-3" placeholder="Email address" required autofocus>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPdasdasassword" class="form-control mb-3" placeholder="Password" required>
                                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="input3Email" class="form-control mb-3" placeholder="Email address" required autofocus>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPadsadssword" class="form-control mb-3" placeholder="Password" required>
                                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputE4mail" class="form-control mb-3" placeholder="Email address" required autofocus>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPaaaassword" class="form-control mb-3" placeholder="Password" required>
                                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEm5ail" class="form-control mb-3" placeholder="Email address" required autofocus>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="input6Password" class="form-control mb-3" placeholder="Password" required>
                    
                </div>
            </div>
        </div>
    </div>
</main>
</body>
@include('partials.footer')