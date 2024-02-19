


    @extends('admin.layouts.app')

    @section('title')
        User address
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
                                                            {{$useradrees->address1}}
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
                                                            {{$useradrees->address2}}

                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading"> </div>
                                                            {{$useradrees->pincode}}
                                                            <div class="widget-subheading opacity-7">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
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


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
