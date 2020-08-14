@extends('layouts.master')

@section('page-title')
Patient List
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
	<patient-create :auth="{{Auth::user()}}"></patient-create>
    {{-- <div class="row patients-create">
        <div class="col-md-12">
                <div class="portlet-body">
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption font-dark">
								<i class="icon-settings font-dark"></i>
								<span class="caption-subject bold uppercase">New Patient</span>
							</div>
							<div class="tools"> </div>
						</div>
						<div class="portlet-body">
						<form action="/patients" class="form-horizontal" method="post" enctype='multipart/form-data'>
						@csrf
							<div class="form-body">
								<h3 class="form-section">Person Info</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">First Name</label>
											<div class="col-md-9">
												<input type="text" name="fname" class="form-control {{ ($errors->has('fname')) ? 'is-invalid' : '' }}" placeholder="First" value="{{ old('fname') }}">										
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Gender</label>
											<div class="col-md-9">
												<select class="form-control {{ ($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender">
													<option value=""> -Select- </option>
													<option value="Male" {{(old('gender') == 'Male') ? 'selected' : ''}}>Male</option>
													<option value="Female" {{(old('gender') == 'Female') ? 'selected' : ''}}>Female</option>
												</select>												
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Middle Name</label>
											<div class="col-md-9">
												<input type="text" name="mname" class="form-control {{ ($errors->has('mname')) ? 'is-invalid' : '' }}" placeholder="Middle" value="{{ old('mname') }}">										
											</div>
										</div>
									</div>									
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Date of Birth</label>
											<div class="col-md-9">
												<input type="date" name="birthdate" class="form-control {{ ($errors->has('birthdate')) ? 'is-invalid' : '' }}" placeholder="dd/mm/yyyy" value="{{ old('birthdate') }}"> </div>
										</div>
									</div>
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Last Name</label>
											<div class="col-md-9">
												<input type="text" name="lname" class="form-control {{ ($errors->has('lname')) ? 'is-invalid' : '' }}" placeholder="Last" value="{{ old('lname') }}">										
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Civil Status</label>
											<div class="col-md-9">
												<select class="form-control {{ ($errors->has('civil_status')) ? 'is-invalid' : '' }}" name="civil_status" value="{{ old('civil_status') }}">
													<option value=""> -Select- </option>
													<option value="Married" {{(old('civil_status') == 'Married') ? 'selected' : ''}}>Married </option>
													<option value="Single" {{(old('civil_status') == 'Single') ? 'selected' : ''}}>Single </option>
													<option value="Widowed" {{(old('civil_status') == 'Widowed') ? 'selected' : ''}}>Widowed  </option>
													<option value="Separated" {{(old('civil_status') == 'Separated') ? 'selected' : ''}}>Separated  </option>
													<option value="Divorced" {{(old('civil_status') == 'Divorced') ? 'selected' : ''}}>Divorced  </option>
												</select>
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Ext Name</label>
											<div class="col-md-9">
												<input type="text" name="extname" class="form-control" placeholder="Jr. Sr. III" value="{{ old('extname') }}">										
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Occupation</label>
											<div class="col-md-9">
												<input type="text" name="occupation" class="form-control" placeholder="Jr. Sr. III" value="{{ old('occupation') }}">
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Referral</label>
											<div class="col-md-9">
												<input type="text" name="referral" class="form-control" placeholder="Referred by" value="{{ old('referral') }}">										
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Address</label>
											<div class="col-md-9">
												<textarea name="address" class="form-control {{ ($errors->has('address')) ? 'is-invalid' : '' }}">{{ old('address') }}</textarea>
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Images</label>
											<div class="col-md-9">
												<input type="file" name="images[]" multiple="multiple" class="form-control">										
											</div>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Contact No:</label>
											<div class="col-md-9">
											<input type="text" name="contact_no" class="form-control {{ ($errors->has('contact_no')) ? 'is-invalid' : '' }}" placeholder="Contact Nos" value="{{ old('contact_no') }}">	
											</div>
										</div>
									</div>
									<!--/span-->
								</div>
								<h3 class="form-section margin-bottom-40">Local Address</h3>
								<div class="row p-1">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label col-md-1">Local Address</label>
											<div class="col-md-11">
												<input type="text" name="local_address" class="form-control {{ ($errors->has('local_address')) ? 'is-invalid' : '' }}" value="{{ old('local_address') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">No./ Street</label>
											<div class="col-md-11">
												<input type="text" name="local_street_number" class="form-control {{ ($errors->has('local_street_number')) ? 'is-invalid' : '' }}" value="{{ old('local_street_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Brgy./ Subdivision</label>
											<div class="col-md-11">
												<input type="text" name="local_subdivision" class="form-control {{ ($errors->has('local_subdivision')) ? 'is-invalid' : '' }}" value="{{ old('local_subdivision') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">City/ Town</label>
											<div class="col-md-11">
												<input type="text" name="local_city" class="form-control {{ ($errors->has('local_city')) ? 'is-invalid' : '' }}" value="{{ old('local_city') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Country</label>
											<div class="col-md-11">
												<input type="text" name="local_country" class="form-control {{ ($errors->has('local_country')) ? 'is-invalid' : '' }}" value="{{ old('local_country') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Postal Code</label>
											<div class="col-md-11">
												<input type="text" name="local_postal_code" class="form-control {{ ($errors->has('local_postal_code')) ? 'is-invalid' : '' }}" value="{{ old('local_postal_code') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Telephone No.</label>
											<div class="col-md-11">
												<input type="text" name="local_telephone_number" class="form-control {{ ($errors->has('local_telephone_number')) ? 'is-invalid' : '' }}" value="{{ old('local_telephone_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Fax No.</label>
											<div class="col-md-11">
												<input type="text" name="local_fax_number" class="form-control" value="{{ old('local_fax_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Email</label>
											<div class="col-md-11">
												<input type="text" name="local_email" class="form-control {{ ($errors->has('local_email')) ? 'is-invalid' : '' }}" value="{{ old('local_email') }}">
											</div>
										</div>
									</div>
								</div>
								
								<div class="form-section margin-bottom-40 foreign-address">
									<h3>Foreign Address</h3>
									<label class="switch">
										<input type="checkbox" id="foreign_address_checkbox">
										<span class="slider round"></span>
									  </label>
								</div>
								<div class="row foreign-address-form" hidden>
									<div class="col-md-12">
										<div class="form-group row">
											<label class="control-label col-md-1">Foreign Address</label>
											<div class="col-md-11">
												<input type="text" name="foreign_address" class="form-control" value="{{ old('foreign_address') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">No./ Street</label>
											<div class="col-md-11">
												<input type="text" name="foreign_street_number" class="form-control" value="{{ old('foreign_street_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Brgy./ Subdivision</label>
											<div class="col-md-11">
												<input type="text" name="foreign_subdivision" class="form-control" value="{{ old('foreign_subdivision') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">City/ Town</label>
											<div class="col-md-11">
												<input type="text" name="foreign_city" class="form-control" value="{{ old('foreign_city') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Country</label>
											<div class="col-md-11">
												<input type="text" name="foreign_country" class="form-control" value="{{ old('foreign_country') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Postal Code</label>
											<div class="col-md-11">
												<input type="text" name="foreign_postal_code" class="form-control" value="{{ old('foreign_postal_code') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Telephone No.</label>
											<div class="col-md-11">
												<input type="text" name="foreign_telephone_number" class="form-control" value="{{ old('foreign_telephone_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Fax No.</label>
											<div class="col-md-11">
												<input type="text" name="foreign_fax_number" class="form-control" value="{{ old('foreign_fax_number') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-1">Email</label>
											<div class="col-md-11">
												<input type="text" name="foreign_email" class="form-control" value="{{ old('foreign_email') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-2">Preferred Mailing Address</label>
											<div class="col-md-3 d-flex preferred-info">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" value="{{ old('fname') }}">
													<label class="form-check-label" for="inlineRadio1">Philippine Address</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" value="{{ old('fname') }}">
													<label class="form-check-label" for="inlineRadio2">Foreign Address</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-section">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row">
												<label class="control-label col-md-3"><strong>Person to notify in case of Emergency</strong></label>
												<div class="col-md-5">
													<input type="text" name="emergency_contact_person" class="form-control {{ ($errors->has('emergency_contact_person')) ? 'is-invalid' : '' }}" value="{{ old('emergency_contact_person') }}">
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3"><strong>Contact Number</strong></label>
												<div class="col-md-5">
													<input type="text" name="emergency_contact_number" class="form-control {{ ($errors->has('emergency_contact_number')) ? 'is-invalid' : '' }}" value="{{ old('emergency_contact_number') }}">
												</div>
											</div>
										</div>
									</div>
								</div>
								<h3 class="form-section margin-bottom-40">Other Info</h3>
								<h4>PMHx</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">HPN</label>
											<div class="col-md-9">
												<input type="text" name="pmh_hpn" class="form-control" value="{{ old('pmh_hpn') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">DM</label>
											<div class="col-md-9">
												<input type="text" name="pmh_dm" class="form-control" value="{{ old('pmh_dm') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">BA</label>
											<div class="col-md-9">
												<input type="text" name="pmh_ba" class="form-control" value="{{ old('pmh_ba') }}"> </div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">CA</label>
											<div class="col-md-9">
												<input type="text" name="pmh_ca" class="form-control" value="{{ old('pmh_ca') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Heart Disease</label>
											<div class="col-md-9">
												<input type="text" name="pmh_heart_disease" class="form-control" value="{{ old('pmh_heart_disease') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Operation</label>
											<div class="col-md-9">
												<input type="text" name="pmh_operation" class="form-control" value="{{ old('pmh_operation') }}"> </div>
										</div>
									</div>
								</div>
								<h4>PSHx</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Smoking</label>
											<div class="col-md-9">
												<input type="text" name="psh_smoking" class="form-control" value="{{ old('psh_smoking') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Alcohol</label>
											<div class="col-md-9">
												<input type="text" name="psh_alcohol" class="form-control" value="{{ old('psh_alcohol') }}"> </div>
										</div>
									</div>									
								</div>
								<h4>FMHx</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Similar Lesions</label>
											<div class="col-md-9">
												<input type="text" name="fmh_similar_lesions" class="form-control" value="{{ old('fmh_similar_lesions') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">CA</label>
											<div class="col-md-9">
												<input type="text" name="fmh_ca" class="form-control" value="{{ old('fmh_ca') }}"> </div>
										</div>
									</div>									
								</div>
								<h4>Others</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Allergy</label>
											<div class="col-md-9">
												<input type="text" name="allergy" class="form-control" value="{{ old('allergy') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Soap</label>
											<div class="col-md-9">
												<input type="text" name="soap" class="form-control" value="{{ old('soap') }}"> </div>
										</div>
									</div>		
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Shampoo</label>
											<div class="col-md-9">
												<input type="text" name="shampoo" class="form-control" value="{{ old('shampoo') }}"> </div>
										</div>
									</div>							
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Lotion</label>
											<div class="col-md-9">
												<input type="text" name="lotion" class="form-control" value="{{ old('lotion') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Perfume</label>
											<div class="col-md-9">
												<input type="text" name="perfume" class="form-control" value="{{ old('perfume') }}"> </div>
										</div>
									</div>		
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Detergent</label>
											<div class="col-md-9">
												<input type="text" name="detergent" class="form-control" value="{{ old('detergent') }}"> </div>
										</div>
									</div>							
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">LMP</label>
											<div class="col-md-9">
												<input type="text" name="lmp" class="form-control" value="{{ old('lmp') }}"> </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">PMP</label>
											<div class="col-md-9">
												<input type="text" name="pmp" class="form-control" value="{{ old('pmp') }}"> </div>
										</div>
									</div>		
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Pregnant/Plans</label>
											<div class="col-md-9">
												<input type="text" name="pregnant_plans" class="form-control" value="{{ old('pregnant_plans') }}"> </div>
										</div>
									</div>							
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label col-md-3">Fabric Softener</label>
											<div class="col-md-9">
												<input type="text" name="fabric_softener" class="form-control" value="{{ old('fabric_softener') }}"> </div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div>
									<div class="col-md-6"> </div>
								</div>
							</div>
						</form>
						</div>
					</div>
                </div>
                       
        </div>
    </div> --}}
  
@endsection



@section('jscripts')
   <script>
	   function hideForeignAddress() {
		   var foreignAddressCheckbox = $("#foreign_address_checkbox").val()
		   if($("#foreign_address_checkbox").is(":checked")) {
			$(".foreign-address-form").show()
		   } else {
			$(".foreign-address-form").hide()
		   }
	   }

	   $("#foreign_address_checkbox").change(hideForeignAddress)
   </script>

  
@endsection