<!-- Header Section End -->


<!-- Contact Section Begin -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<section class="contact spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="section-title">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Create Post Form -->
                    @if (session()->has('successs'))
                        <div class="alert alert-success">
                            <p>{{ session()->get('successs') }}</p>
                        </div>
                    @endif
                    <h2>Create New Account</h2>
                </div>
                <div class="contact__form">
                    <form action="registerstore" method="POST" id="registerfrom">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="number"   name="phone"  class="form-control" id="exampleInputPassword1" placeholder="phone">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password"   name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>

                          <button type="submit" class="btn btn-primary">Sign Up</button>
                          <button class="site-btn" onclick="javascript:window.history.back()">Cancel</button>
                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <input type="number" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="site-btn">Sign Up</button>
                                <button class="site-btn"
                                    onclick="javascript:window.history.back()">Cancel</button>

                            </div>

                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $().ready(function() {

        $("#registerfrom").validate({


            rules: {

                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                country_id: {
                    required: true,
                },
                address_line1: {
                    required: true,
                },
                state: {
                    required: true,
                },
                postal_code: {
                    required: true,
                },
                mobile: {
                    required: true,
                },
                email: {
                    required: true,
                },


            },

            messages: {

                first_name: {
                    required: "Please enter a username",

                },
                last_name: {
                    required: "Please enter a username",

                },
                country_id: {
                    required: "Please enter a username",

                },
                address_line1: {
                    required: "Please enter a username",
                },
                state: {
                    required: "Please enter a username",
                },
                postal_code: {
                    required: "Please enter a username",
                },
                mobile: {
                    required: "Please enter a username",
                },
                email: {
                    required: "Please enter a username",
                },

            }
        });
    });
</script>
