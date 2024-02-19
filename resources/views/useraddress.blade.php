    {{-- <!-- Header Section End -->


    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mx-auto">
                    <div class="section-title">
                        <h2> My Account</h2>
                    </div>
                    <div class="contact__form">
                        <form action="updateuser" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="father_name" placeholder="Father Name" value="{{  $userprofile->father_name ?  $userprofile->father_name : ' '}}">
                                    <input type="hidden" name="id" placeholder="Mother Name" value="{{ $user->id}}">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="mother_name" placeholder="Mother Name" value="{{  $userprofile->mother_name ?  $userprofile->mother_name : ' '}}">
                                </div>
                                <button type="submit" class="site-btn">Save Changes</button>
                                <button  class="site-btn" onclick="history.back()">back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Contact Section End -->


    @extends('admin.layouts.app')

    @section('title')
        User Profile
    @endsection

    @section('content')
        <div class="app-main__outer">
            <div class="app-main__inner">


                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">

                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">1</th>
                                            <th>address1</th>
                                            <th class="text-center">address2</th>
                                            <th class="text-center">pincode</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                  <form action="useraddress" method="POST">
                                    @csrf

                                        <tr>
                                            <td class="text-center text-muted">1</td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <input type="text" name="address1" placeholder="Address1" value="{{  $userprofile->address1 ?  $userprofile->address1 : ' '}}">
                                                            <input type="hidden" name="id" placeholder="Mother Name" value="{{ $user->id}}">
                                                            <div class="widget-heading"> </div>
                                                            <div class="widget-subheading opacity-7">


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <input type="text" name="address2" placeholder="Address2" value="{{  $userprofile->address2 ?  $userprofile->address2 : ' '}}">
                                                            <div class="widget-heading"> </div>
                                                            <div class="widget-subheading opacity-7">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <input type="text" name="pincode" placeholder="pincode" value="{{  $userprofile->pincode ?  $userprofile->pincode : ' '}}">
                                                            <div class="widget-heading"> </div>
                                                            <div class="widget-subheading opacity-7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            {{-- <li> <a href="{{ url('/profile') }}">Your Account</a></li> --}}

                                            <td class="text-center"></td>

                                            <td class="text-center">
                                                <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                                                <button  class="btn btn-primary btn-sm" onclick="history.back()">back</button>

                                            </td>
                                        </tr>

                                    </form>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
