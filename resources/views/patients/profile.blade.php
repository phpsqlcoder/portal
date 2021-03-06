@extends('layouts.master')
@section('page-title')
{{$patient->fullname}}
@endsection
@section('content')
	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- <patient-profile :patient="{{$patient}}"></patient-profile> --}}
    <div class="row patient-profile">
        <div class="col-md-12">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Profile </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_6_1" data-toggle="tab"> Profile </a>
                                </li>
                                <li>
                                    <a href="#medical_information" data-toggle="tab"> Medical Information </a>
                                </li>
                                <li>
                                    <a href="#tab_6_2" data-toggle="tab"> Appointments </a>
                                </li>                                
                                <li>
                                    <a href="#tab_6_4" data-toggle="tab"> Lab Results </a>
                                </li>
                                <li>
                                    <a href="#tab_6_5" data-toggle="tab"> Medicines </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_6_1">                                    
                                    <form class="form-horizontal" role="form">
                                        <div class="form-body">                                    
                                            <h3 class="form-section">Patient Info</h3>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3 profile-picture">
                                                                <div class="col-md-12">
                                                                        
                                                                    <div class="thumbnail">
                                                                    
                                                                        <img src="..." alt="" style="width: 200px; height: 200px;">
                                                                
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Full Name:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->fullname}} </p>
                                                                    </div>
                                                                    <label class="control-label col-md-3">Civil Status:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->civil_status}} </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Gender:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->gender}} </p>
                                                                    </div>
                                                                    <label class="control-label col-md-3">Date Of Birth:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->birthdate}} ({{ $patient->age }} years) </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Occupation:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->occupation}} </p>
                                                                    </div>
                                                                    <label class="control-label col-md-3">Contact Number:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->contact_no}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="control-label col-md-3">Occupation:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->occupation}} </p>
                                                                    </div>
                                                                    <label class="control-label col-md-3">Address:</label>
                                                                    <div class="col-md-3">
                                                                        <p class="form-control-static"> {{$patient->address}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="form-section">Local Address</h3>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Address: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_address}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">No./ Street: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_street_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Brgy./ Subdivision: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_subdivision}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">City/ Town: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_city}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Country: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_country}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Postal Code: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_postal_code}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Telephone Number: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_telephone_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Fax Number: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_fax_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Email: </label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->local_email}} </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3 class="form-section">Foreign Address</h3>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Address</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_address}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">No./ Street</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_street_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Brgy./ Subdivision</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_subdivision}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">City/ Town</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_city}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Country</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_country}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Postal Code</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_postal_code}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Telephone Number</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_telephone_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Fax Number</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_fax_number}} </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="control-label col-md-4">Email</label>
                                                                            <div class="col-md-8">
                                                                                <p class="form-control-static"> {{$patient->patientAdditionalDetail->foreign_email}} </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        
                                                    </div>
                                                </div>
                                            </div>                                           
                                            <h3 class="form-section">Other Info</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="well">
                                                    <h4>PMHx</h4>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> HPN: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_hpn}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> DM: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_dm}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> BA: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_ba}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> CA: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_ca}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Heart Disease: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_heart_disease}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Operation: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmh_operation}} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="well">
                                                        <h4>PSHx</h4>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Smoking: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->psh_smoking}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Alcohol: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->psh_alcohol}} </div>
                                                        </div>
                                                        <h4>FMHx</h4>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Similar Lesions: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->fmh_similar_lesions}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> CA: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->fmh_ca}} </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="well">
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Allergy: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->allergy}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Soap: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->soap}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Shampoo: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->shampoo}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Lotion: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->lotion}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Perfume: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->perfume}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Detergent: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->detergent}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> LMP: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->lmp}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> PMP: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pmp}} </div>
                                                        </div>
                                                        <div class="row static-info align-reverse">
                                                            <div class="col-md-8 name"> Pregnant/Plans: </div>
                                                            <div class="col-md-3 value"> {{$patient->info->pregnant_plans}} </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn green">
                                                                <i class="fa fa-pencil"></i> Edit</button>
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="medical_information">
                                    <patient-medical-information :patient="{{$patient}}"></patient-medical-information>
                                </div>
                                <div class="tab-pane fade" id="tab_6_2">
									<iframe src="/transaction/patient/list/{{$patient->id}}" frameborder="0" width="100%" height="1200" scrollbar="auto"></iframe>
                                </div>
                                <div class="tab-pane fade" id="tab_6_3">
                                    <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                                        skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                                        biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_6_4">
                                    <iframe src="/patient/upload/{{$patient->id}}" frameborder="0" width="100%" height="800" scrollbar="auto"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
  
@endsection

@section('pagejs')
    <script src="{{ asset('/assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>
@endsection

@section('jscripts')
   

  
@endsection