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
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Responsive example<small>Users</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30">
                  Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                </p>
                
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>User-Type</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($sl=1)
                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $data->type }}</td>
                        <td>
                            @if($data->status == 1)
                                     <form action="{{ route('admin.usertype.updatestatus', $data->userid ) }}" method="POST">
                                @csrf
                                    <input type="hidden" name="status" value="0">
                                    <button type="submit" class="btn btn-success">Available</button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.usertype.updatestatus', $data->userid ) }}" method="POST">
                                @csrf
                                    <input type="hidden" name="status" value="1">
                                    <button type="submit" class="btn btn-danger">Unavailable</button>
                                    </form>
                             @endif 
                        </td>
                        <td>
                            {{-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> --}}
                            <a href="{{ route('admin.update.usertype',$data->userid) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="{{ route('admin.del.usertype',$data->userid) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                
                
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
    </div>
</div>


@endsection