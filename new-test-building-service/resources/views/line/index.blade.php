@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		
        
        <div class="col-md-12">
       <div class="row">
          <div class="col-md-10"><h4>Gestion des lines </h4></div>
           @if(Auth::user()->role == 1 || Auth::user()->role == 2 )
        <div class="col-md-2"> <a href="{{route('lines.create')}}"><button class="btn btn-success pull-right"><i class="fa fa-plus"></i></button></a></div>
        @endif
       </div>

       

        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>#ID</th>
                    <th>Num. Ligne</th>
                     <th>Compagnie</th> 
                     <th>Nbr arrets</th>
                     <th>Details</th>
                      @if(Auth::user()->role == 1 || Auth::user()->role == 2 )
                      <th>Action</th>
                      @endif
                   </thead>
    <tbody>
    @foreach($lines as $line)
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>{{$line->id}}</td>
    <td>{{$line->numero_line}}</td>
    <td>{{$line->companieName}}</td>
    <td>{{$line->nombre_arret}}</td>
    <td>{{$line->details}}</td>
     @if(Auth::user()->role == 1 || Auth::user()->role == 2 )
    <td><p class="t" data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-edit"></span></button></p> <p class="t" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
  @endif
    </tr>
@endforeach
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="fa fa-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="fa fa-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="fa fa-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="fa fa-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="fa fa-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
@endsection
