@extends('layouts.admin_app')
@section('content')
<div id="wrapper">

    
	<div class="main-content">
		<div class="row small-spacing">

            <div class="col-xs-9"></div>
            <div class="col-xs-2 mb-2" > <a href="{{route('admin.addPlan')}}" class="btn btn-default"><i class="fa fa-plus"></i> Add Level Plans</a></div>
            <div class="col-xs-1"></div>

			<div class="col-xs-12">
				<div class="box-content">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
							<thead>
								<tr>
									<th data-priority="1">ID</th>
									<th data-priority="2">Level</th>
									<th data-priority="3">Percentage</th>
									<th data-priority="4">Direct</th>
									<th data-priority="5">Action</th>
								</tr>
                            </thead>
                          @if(!empty($plans))
                          
							<tbody>
                                @foreach($plans as $plan)
								<tr>
									<td>{{$plan->id}}</td>
                                    <td>{{$plan->level}}</td>
									<td>{{$plan->percentage}}</td>
									<td>{{$plan->direct}}</td>
                                    <td><a href="editPlan/{{$plan->id}}"><i class="fa fa-edit"></i></a>
                                  <a href="deletePlan/{{$plan->id}}">  <i class="fa fa-trash"></i></a></td>
                                </tr> 
                                @endforeach    
                            </tbody>
                           @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection