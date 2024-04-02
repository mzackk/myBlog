@extends('layouts.dashboard')

@section('title')
    {{ trans('roles.title.create') }}
@endsection

@section('breadcrumbs')
    {{Breadcrumbs::render('add_roles')}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <form action="" method="POST">
             <div class="card-body">
                <div class="form-group">
                   <label for="input_role_name" class="font-weight-bold">
                      {{ trans('roles.form_control.input.name.label') }}
                   </label>
                   <input id="input_role_name" value="" name="name" type="text" class="form-control" readonly />
                </div>
                <!-- permission -->
                <div class="form-group">
                   <label for="input_role_permission" class="font-weight-bold">
                    {{ trans('roles.form_control.input.permission.label') }}
                   </label>
                   <div class="form-control overflow-auto h-100 " id="input_role_permission">
                      <div class="row">
                         <!-- list manage name:start -->
                         <ul class="list-group mx-1">
                            <li class="list-group-item bg-dark text-white">
                               Manage name
                            </li>
                            <!-- list permission:start -->
                            <li class="list-group-item">
                               <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <label class="form-check-label">
                                     Role name
                                  </label>
                               </div>
                            </li>
                            <!-- list permission:end -->
                         </ul>
                         <!-- list manage name:end  -->
                      </div>
                   </div>
                </div>
                <div class="float-right mb-4">
                   <a class="btn btn-warning px-4 mx-2" href="">
                    {{ trans('roles.button.back.value') }}
                   </a>
                   <button type="submit" class="btn btn-primary px-4">
                    {{ trans('roles.button.save.value') }}
                   </button>
                </div>
             </div>
          </form>
       </div>
    </div>
 </div>
@endsection