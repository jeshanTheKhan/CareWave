<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin Add User</title>
@extends('layouts.back.backend')
@section('content')

<!-- page content -->
 <div class="right_col" role="main">
    <div class="">
    <div class="page-title">
        
        <div class="title_left">
            <h3>Form Elements</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="clearfix"></div>
 <div class="row">
     <div class="col-md-12 col-sm-12 ">
         <div class="x_panel">
             <div class="x_title">
                 <h2>Form Design <small>Add User</small></h2>
                 <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>
                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         <ul class="dropdown-menu" role="menu">
                             <li><a class="dropdown-item" href="#">Settings 1</a>
                             </li>
                             <li><a class="dropdown-item" href="#">Settings 2</a>
                             </li>
                         </ul>
                     </li>
                     <li><a class="close-link"><i class="fa fa-close"></i></a>
                     </li>
                 </ul>
                 <div class="clearfix"></div>
             </div>
             <div class="x_content">
                 <br />
                 <form id="demo-form2" method="POST" action="{{ route('admin.saveupdate.user') }}" data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="header1" value="{{ $data->name }}" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" name="header2" value="{{ $data->lastName }}" required="required" class="form-control ">
                        </div>
                    </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align ">Select User Type</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="user">
                                <option>{{ $data->user_role }}</option>
                                @foreach ($user as $user)
                                <option value="{{ $user->type }}">{{ $user->type }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">E-Mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="email" id="last-name" name="email" value="{{ $data->email }}" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="last-name" value="{{ $data->password }}" name="password" required="required" class="form-control">
                        </div>
                    </div>
                     <div class="ln_solid"></div>
                     <input type="hidden" name="c_id" value="{{ $data->id }}">
                     <div class="item form-group">
                         <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button" onclick="window.history.back();">Cancel</button>
                            <button class="btn btn-primary" type="reset" onclick="window.location.reload();">Reset</button>
                             <button type="submit" class="btn btn-success">Submit</button>
                         </div>
                     </div>

                 </form>
             </div>
         </div>
     </div>
 </div>
 </div>
@endsection