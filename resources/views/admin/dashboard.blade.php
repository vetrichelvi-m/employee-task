@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Active Users
                            <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm btn-group">
                                    <button class="active btn btn-focus">Last Week</button>
                                    <button class="btn btn-focus">All Month</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Email</th>
                                        {{-- <th class="text-center">Status</th> --}}
                                        {{-- <th class="text-center">Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center text-muted">#345</td>
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
                                                        {{ session()->get('username') }}
                                                        <div class="widget-heading"> </div>
                                                        <div class="widget-subheading opacity-7">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- <li> <a href="{{ url('/profile') }}">Your Account</a></li> --}}

                                        <td class="text-center">{{ session()->get('email') }}</td>

                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1"
                                                class="btn btn-primary btn-sm"><a href="{{ url('/profile') }}">update</a></button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="d-block text-center card-footer">
                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                    class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            <button class="btn-wide btn btn-success">Save</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
