@extends('layouts.main')

@push('title')
    Manage Classes | {{env('APP_NAME')}}
@endpush

@section('manageClasses-section')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span>{{ucwords(request()->path())}}</h4>
                          <!-- Bootstrap Table with Header - Light -->
                          <div class="card">
                            {{-- <h5 class="card-header">Light Table head</h5> --}}
                            <div class="table-responsive" style="min-height: 13rem;">
                              <table class="table">
                                <thead class="table-light">
                                  <tr>
                                    <th>SN</th>
                                    <th>Class Name</th>
                                    <th>Students</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border">
                                  @php
                                      $i=($classes->currentPage()-1) * $classes->perPage()+1;
                                  @endphp
                                  @foreach ($classes as $className)
                                  <tr data-id="{{$className->classId}}">
                                    <td><strong>{{$i++}}</strong></td>
                                    <td>{{$className->className}}</td>
                                    <td>{{$className->students->count()}}</td>
                                    <td>
                                      <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                          <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item edit-class" href="javascript:void(0);" data-id="{{$className->classId}}" data-classNameForUpdt="{{$className->className}}" data-target="editClassModal"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                          >
                                          <a class="dropdown-item delete-class-btn" href="javascript:void(0);" data-id="{{$className->classId}}"
                                            ><i class="bx bx-trash me-1"></i> Delete</a
                                          >
                                        </div>
                                      </div>
                                    </td>
                                  </tr>                                  
                                  @endforeach
                                </tbody>
                              </table>                              
                            </div>
                          </div>
                          <div class="mt-2">{{$classes->links()}}</div>                          
                          <!-- Bootstrap Table with Header - Light -->

                          <!-- Modal -->
                            <div class="modal fade" id="editClassModal" tabindex="-1" role="dialog" aria-labelledby="editClassModalTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLongTitle">Update Class</h5>
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="success"></div>
                                    <div class="main-body">
                                      <input type="text" id="classNameNew" class="form-control" autocomplete="off">               
                                      <input type="text" id="classId" hidden>
                                  </div>                     
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>            
                          </div>
                      </div>

                      <script>       
                        $(document).ready(function () {
                          $(".delete-class-btn").on('click',function () {
                            let classId= $(this).data('id');
                            let deleteConfirm= confirm("Are you sure to delete this class?");
                            let currentRow= $(this).closest("tr");
                            if(deleteConfirm){
                              $.ajax({
                              url:'/classes/delete/'+classId,
                              type:'delete',
                              dataType:'json',
                              headers:{
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              },
                              success:function(data){
                                console.log(data);              
                                setTimeout(()=>{
                                  currentRow.remove();
                                },200);
                              }            
                            });
                            }          
                          });

                          //to show modal
                          $(".edit-class").click(function(){
                            let classId= $(this).data("id");
                            let classModal= $("#editClassModal");
                            let classNameForUpdt= $(this).attr("data-classNameForUpdt");
                            let modalClase= $(this).data("dismiss");
                            classModal.modal('show');               
                            $(".modal-body #classNameNew").val(classNameForUpdt);                                         
                            $(".modal-body #classId").val(classId);                                         
                          });


                          //to send request to update class
                          $("#editClassModal .btn-primary").click(function(){
                            let className= $("#classNameNew").val();
                            let classId= $("#classId").val();   
                            let selecteRow=$("tr[data-id='"+classId+"']");
                            $.ajax({
                              url:"{{url('/classes/update')}}",
                              type:'post',
                              data:{
                                className:className,
                                classId:classId,
                                _token: "{{ csrf_token() }}",
                              },
                              dataType:'json',
                              success:function(data){
                                console.log(data);
                                if(data.status){
                                  $("#editClassModal .modal-body .success").html("<h4 class='text-center'>"+data.message+"</h4>");
                                  $("#editClassModal .btn").hide();
                                  $("#editClassModal .modal-body .main-body").hide();
                                  setTimeout(function(){
                                    $("#editClassModal").modal('hide');
                                    $("#editClassModal .modal-body .main-body").show();
                                    $("#editClassModal .modal-body .success").html(""); 
                                    $("#editClassModal .btn").show();    
                                    selecteRow.find("td:eq(1)").text(className);
                                  },1000);
                                }
                                
                              }
                            });
                          });


                            //hide modal
                          $("#editClassModal .close, #editClassModal .btn-secondary").click(function(){
                            $("#editClassModal").modal('hide');
                          })
                        });
                      </script>
@endsection