@extends('layouts.mast1')
@section('content')
<div class="navbar-static-top" id="wrapper" style="    top: 10%;
    overflow: hidden;
   
    z-index: 0;">
            

<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
<span style="display:inline-block !important;  padding: 0; border-radius:3px; height:30px; width:500px;  ">
<iframe style="margin-top: 2%;" scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://rajanmaharjan.com.np/getdate/index.php?dateType=np" height="30"></iframe></span>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                          
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
</div>
 <div class="col-md-12" style="    width: 80%;
    left: 10%;
    background: #09649a;
    padding: 50px 30px 50px 30px;">
     <h2 style="text-align: center;
    color: #fff;
    font-size: 30px;
    padding: 0px 0px 20px 0px;">Edit Bike Parts Details</h2>
 <!--modal-->
  {!! Form::model($editid, ['method' => 'PATCH','route' => ['inventorybikepartupdate.update', $editid->id]]) !!}
                                <fieldset>
                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Part Name</i></span>
                                        <input type="text" name="parts_name" class="form-control" value="{{$editid->parts_name}}" required />

                                      </div>
                                    <br/>
                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Part Number</i></span>
                                        <input type="text" name="parts_no" class="form-control" value="{{$editid->parts_no}}" required />

                                      </div>
                                    <br/>

                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th-list">&nbsp;Color</i></span>
                                     <select class="form-control select2" style="width: 100%;    height: 30px;" name="color" id="" required >


                                          <option value="{{$editid->color}}">{{$editid->color}}</option>
                                         
                                          <option value="black">Black</option>
                                          <option value="mattblack">Matt Black</option>
                                          <option value="red">Red</option>
                                          <option value="mattred">Matt Red</option>
                                          <option value="blue">Blue</option>
                                          <option value="gray">Gray</option>
                                          <option value="white">White</option>


                                        </select>
                                  </div>
                                    <br/>
                                   
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list">&nbsp;Bike Model</i></span>
                <input type="text" class="form-control" placeholder="Chasis Number" name="bike_model" value="{{$editid->bike_model}}" required ><br/>
              </div><br/>
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money">&nbsp;Quantity</i></span>
                <input type="text" class="form-control" placeholder="Quantity" name="units" value="{{$editid->units}}" required ><br/>
              </div><br/>
                                    
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Purchase Price in NRS</i></span>
                 <input type="text" class="form-control" placeholder="Unit Price" name="purchaseprice" value="{{$editid->purchaseprice}}" required ><br/>
              </div><br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Unit Price in NRS</i></span>
                 <input type="text" class="form-control" placeholder="Unit Price" name="price" value="{{$editid->price}}" required ><br/>
              </div><br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Status</i></span>
                                       <select class="form-control select2" style="width: 100%;    height: 30px;" name="status" id="" required >


                                          <option value="{{$editid->status}}"><?php
                                              if($editid->status==0){
                                                  echo 'Available';
                                                  
                                              } 
                                              else{
                                                  echo 'Not Available';
                                              }
                                              ?></option>
                                         
                                          <option value="0">Available</option>
                                          <option value="1">Not Available</option>
                                          


                                        </select>
                <br/>
              </div><br/>
                                    
                                    
                                    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Date Taken</i></span>
                                          {{$editid->datetaken}}
                 <input type="date" class="form-control"  name="datetaken"  required  ><br/>
              </div><br/>

                     <br/>
                                     <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="addcategory">Submit</button>
              </div>
            <input type="hidden" name="bikeparteditid" value="{{$editid->id}}"/>
            <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                                </fieldset>
{!! Form::close()  !!}
     </div>
            <script type="application/javascript">
            $(document).ready(function(){

              document.getElementById("Bikes").style.display = "block";
              evt.currentTarget.className += " active";
            });

$("#treeview").hummingbird();
$(".documents").click(function(e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $("#mainbody").load(url);
    });
</script>

@endsection
