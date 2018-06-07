@extends('app')

@section('head_page')
    <style media="screen">
        .uploadButton {
            margin-top:30px;
        }
    </style>
@stop


@section('content')

  @include('includes.spinner')

  <div>
    @include('includes.sidebar')

    <div class="page-container">
            @include('includes.topnav')



              <main class="main-content bgc-grey-100">
                  <div id="mainContent">
                      <div class="container-fluid">
                          <!-- <h4 class="c-grey-900 mT-10 mB-30">Attendance</h4> -->
                          <div class="row">
                                          <div class="col-md-12">
                                              <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                                  <h4 class="c-grey-900 mB-20">Make Announcement</h4>

                                                  <div class="mT-30">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Class</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">Everyone</option>
                                                                    <option value="">2</option>
                                                                    <option value="">3</option>
                                                                    <option value="">4</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputEmail4">Section</label>
                                                                <select class="form-control" name="">
                                                                    <option value="">A</option>
                                                                    <option value="">B</option>
                                                                    <option value="">C</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="inputPassword4">Date</label>
                                                                <input type="date" class="form-control" id="inputPassword4" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Title</label>
                                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Title">
                                                          </div>




                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6" >
                                                              <label for="inputPassword4">Summary</label>

                                                              <textarea name="name" rows="8" cols="80" class="form-control"></textarea>
                                                          </div>

                                                        </div>

                                                        <div class="form-group col-md-2" >
                                                            <button type="submit" class="btn btn-primary">Upload</button>

                                                        </div>

                                                    </form>
                                                </div>

                                                  
                                              </div>
                                          </div>
                                      </div>
                      </div>
                  </div>
              </div>
            @include('includes.footer_content')
        </div>
  </div>


@stop
