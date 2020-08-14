<template>
    <div class="row patients-create">
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
                            <form>
                                <div class="form-body">
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">First Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="fname" class="form-control" placeholder="First">										
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Gender</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="gender">
                                                        <option value=""> -Select- </option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>												
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Middle Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="mname" class="form-control" placeholder="Middle">										
                                                </div>
                                            </div>
                                        </div>									
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth</label>
                                                <div class="col-md-9">
                                                    <input type="date" name="birthdate" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Last Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="lname" class="form-control" placeholder="Last">										
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Civil Status</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="civil_status">
                                                        <option value=""> -Select- </option>
                                                        <option value="Married">Married </option>
                                                        <option value="Single">Single </option>
                                                        <option value="Widowed">Widowed  </option>
                                                        <option value="Separated">Separated  </option>
                                                        <option value="Divorced">Divorced  </option>
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
                                                    <input type="text" name="extname" class="form-control" placeholder="Jr. Sr. III">										
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Occupation</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="occupation" class="form-control" placeholder="Jr. Sr. III">
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
                                                    <input type="text" name="referral" class="form-control" placeholder="Referred by">										
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Address</label>
                                                <div class="col-md-9">
                                                    <textarea name="address" class="form-control"></textarea>
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
                                                <input type="text" name="contact_no" class="form-control" placeholder="Contact Nos">	
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <h3 class="form-section margin-bottom-40">Local Address</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Local Address</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">No./ Street</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_street_number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Brgy./ Subdivision</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_subdivision" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">City/ Town</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_subdivision" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Country</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_subdivision" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Telephone No.</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_subdivision" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Postal Code</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_postal_code" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Fax No.</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_fax_number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-1">Email</label>
                                                <div class="col-md-11">
                                                    <input type="text" name="local_email" class="form-control">
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Local Address</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_address" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">No./ Street</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_street_number" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Brgy./ Subdivision</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_subdivision" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">City/ Town</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_subdivision" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Country</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_subdivision" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Telephone No.</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_subdivision" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Postal Code</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_postal_code" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Fax No.</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_fax_number" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">Email</label>
                                                        <div class="col-md-11">
                                                            <input type="text" name="local_email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-2">Preferred Mailing Address</label>
                                                <div class="col-md-3 d-flex preferred-info">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1">
                                                        <label class="form-check-label" for="inlineRadio1">Philippine Address</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2">
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
                                                        <input type="text" name="emergency_contact_person" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3"><strong>Contact Number</strong></label>
                                                    <div class="col-md-5">
                                                        <input type="text" name="emergency_contact_number" class="form-control">
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
                                                    <input type="text" name="pmh_hpn" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">DM</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmh_dm" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">BA</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmh_ba" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">CA</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmh_ca" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Heart Disease</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmh_heart_disease" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Operation</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmh_operation" class="form-control"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>PSHx</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Smoking</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="psh_smoking" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Alcohol</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="psh_alcohol" class="form-control"> </div>
                                            </div>
                                        </div>									
                                    </div>
                                    <h4>FMHx</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Similar Lesions</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="fmh_similar_lesions" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">CA</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="fmh_ca" class="form-control"> </div>
                                            </div>
                                        </div>									
                                    </div>
                                    <h4>Others</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Allergy</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="allergy" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Soap</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="soap" class="form-control"> </div>
                                            </div>
                                        </div>		
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Shampoo</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="shampoo" class="form-control"> </div>
                                            </div>
                                        </div>							
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Lotion</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="lotion" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Perfume</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="perfume" class="form-control"> </div>
                                            </div>
                                        </div>		
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Detergent</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="detergent" class="form-control"> </div>
                                            </div>
                                        </div>							
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">LMP</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="lmp" class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">PMP</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pmp" class="form-control"> </div>
                                            </div>
                                        </div>		
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Pregnant/Plans</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="pregnant_plans" class="form-control"> </div>
                                            </div>
                                        </div>							
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fabric Softener</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="fabric_softener" class="form-control"> </div>
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
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
