<template>
  <div>
        <form @submit.prevent="submitPatientInformation">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="control-label">First Name <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" name="fname" class="form-control" placeholder="First" v-model="patientInfo['fname']" required>										
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Middle Name <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" name="mname" class="form-control" placeholder="Middle" v-model="patientInfo['mname']" required>										
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Last Name <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" name="lname" class="form-control" placeholder="Last" v-model="patientInfo['lname']" required>										
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Ext Name</label>
                            <div class="">
                                <input type="text" name="extname" class="form-control" placeholder="Jr. Sr. III" v-model="patientInfo['extension_name']">										
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-md-3">
                            <label class="control-label">Date of Birth <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="date" name="birthdate" class="form-control" placeholder="dd/mm/yyyy" v-model="patientInfo['birthdate']" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Gender <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="radio" name="gender" value="Male" v-model="patientInfo['gender']" required>
                                <label>Male</label>
                                <input type="radio" class="margin-left-40" name="gender" value="Female" v-model="patientInfo['gender']" required>
                                <label>Female</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Civil Status <span class="text-danger">*</span></label>
                            <div class="">
                                <select class="form-control" name="civil_status" v-model="patientInfo['civil_status']" required>
                                    <option value="" disabled> -Select- </option>
                                    <option value="Married">Married </option>
                                    <option value="Single">Single </option>
                                    <option value="Widowed">Widowed  </option>
                                    <option value="Separated">Separated  </option>
                                    <option value="Divorced">Divorced  </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Contact Number <span class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" name="contact_no" class="form-control" placeholder="Contact number" v-model="patientInfo['contact_no']" required>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-md-6">
                            <label class="control-label">Occupation</label>
                            <div class="">
                                <input type="text" name="occupation" class="form-control" placeholder="Occuptaion" v-model="patientInfo['occupation']">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Images</label>
                            <div class="">
                                <input type="file" name="images[]" multiple="multiple" class="form-control">										
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-md-6">
                            <label class="control-label">Address <span class="text-danger">*</span></label>
                            <div class="">
                                <textarea name="address" class="form-control" placeholder="Street/ Lot/ Subdivision/ City/ Province" v-model="patientInfo['address']" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Referral</label>
                            <div class="">
                                <input type="text" name="referral" class="form-control" placeholder="Referred by" v-model="patientInfo['referral']">										
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Do you have a foreign address?</label>
                            <div class="">
                                <input type="radio" name="foreign_address" value="true" v-model="patientInfo['foreign_address']" required>
                                <label>Yes</label>
                                <input type="radio" class="margin-left-40" name="foreign_address" value="false" v-model="patientInfo['foreign_address']" required>
                                <label>No</label>										
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-30">
                        <div class="col-md-12 button">
                            <button class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>               
                <!--/span-->
            </div>
        </form>
  </div>
</template>

<script>
export default {
    props: {
        patientInfo: {
            type: Object,
            required: true,
        }
    },
    data() {
        return {
            foreign_address: false,
        }
    },
    methods: {
        submitPatientInformation() {
            this.$emit('submit')
        }
    }
}
</script>

<style lang="scss" scoped>
    .row {
        margin: 10px;
    }

    .button {
        display: flex;
        justify-content: flex-end;
    }
</style>