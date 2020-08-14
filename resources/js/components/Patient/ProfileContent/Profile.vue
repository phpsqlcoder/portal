<template>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 profile-picture">
                        <div class="col-md-12">
                                    
                            <div class="thumbnail">
                            
                                <img src="#" alt="" style="width: 200px; height: 200px;">
                        
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Full Name:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.fname}} {{patient.mname}} {{patient.lname}} {{patient.extname}}</p>
                            </div>
                            <label class="control-label col-md-2">Civil Status:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.civil_status}} </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Gender:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.gender}} </p>
                            </div>
                            <label class="control-label col-md-2">Date Of Birth:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.birthdate}} ({{ patient.age }} years) </p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Occupation:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.occupation}} </p>
                            </div>
                            <label class="control-label col-md-2">Contact Number:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.contact_no}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Occupation:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.occupation}} </p>
                            </div>
                            <label class="control-label col-md-2">Address:</label>
                            <div class="col-md-4">
                                <p class="form-control-static"> {{patient.address}}</p>
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
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_address}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">No./ Street: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_street_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Brgy./ Subdivision: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_subdivision}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">City/ Town: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_city}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Country: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_country}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Postal Code: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_postal_code}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Telephone Number: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_telephone_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Fax Number: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_fax_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Email: </label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_email}} </p>
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
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_address}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">No./ Street</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_street_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Brgy./ Subdivision</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_subdivision}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">City/ Town</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_city}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Country</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_country}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Postal Code</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_postal_code}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Telephone Number</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_telephone_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Fax Number</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_fax_number}} </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-4">Email</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static"> {{patient.patient_additional_detail.local_email}} </p>
                                            </div>
                                        </div>
                                    </div>
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
                                        <div class="col-md-3 value"> {{patient.info.pmh_hpn}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> DM: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmh_dm}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> BA: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmh_ba}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> CA: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmh_ca}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Heart Disease: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmh_heart_disease}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Operation: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmh_operation}} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well">
                                    <h4>PSHx</h4>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Smoking: </div>
                                        <div class="col-md-3 value"> {{patient.info.psh_smoking}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Alcohol: </div>
                                        <div class="col-md-3 value"> {{patient.info.psh_alcohol}} </div>
                                    </div>
                                    <h4>FMHx</h4>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Similar Lesions: </div>
                                        <div class="col-md-3 value"> {{patient.info.fmh_similar_lesions}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> CA: </div>
                                        <div class="col-md-3 value"> {{patient.info.fmh_ca}} </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="well">
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Allergy: </div>
                                        <div class="col-md-3 value"> {{patient.info.allergy}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Soap: </div>
                                        <div class="col-md-3 value"> {{patient.info.soap}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Shampoo: </div>
                                        <div class="col-md-3 value"> {{patient.info.shampoo}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Lotion: </div>
                                        <div class="col-md-3 value"> {{patient.info.lotion}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Perfume: </div>
                                        <div class="col-md-3 value"> {{patient.info.perfume}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Detergent: </div>
                                        <div class="col-md-3 value"> {{patient.info.detergent}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> LMP: </div>
                                        <div class="col-md-3 value"> {{patient.info.lmp}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> PMP: </div>
                                        <div class="col-md-3 value"> {{patient.info.pmp}} </div>
                                    </div>
                                    <div class="row static-info align-reverse">
                                        <div class="col-md-8 name"> Pregnant/Plans: </div>
                                        <div class="col-md-3 value"> {{patient.info.pregnant_plans}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        patient: {
            type: Object,
            required: true,
        }
    },
}
</script>

<style>

</style>