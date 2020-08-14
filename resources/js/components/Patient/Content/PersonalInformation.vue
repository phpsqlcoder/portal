<template>
  <div>
        <form @submit.prevent="submitPatientInformation">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">First Name</label>
                        <div class="col-md-9">
                            <input type="text" name="fname" class="form-control" placeholder="First" v-model="patientInfo['fname']" required>										
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Gender</label>
                        <div class="col-md-9">
                            <select class="form-control" name="gender" v-model="patientInfo['gender']" required>
                                <option value="" disabled> -Select- </option>
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
                            <input type="text" name="mname" class="form-control" placeholder="Middle" v-model="patientInfo['mname']" required>										
                        </div>
                    </div>
                </div>									
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Date of Birth</label>
                        <div class="col-md-9">
                            <input type="date" name="birthdate" class="form-control" placeholder="dd/mm/yyyy" v-model="patientInfo['birthdate']" required> </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Last Name</label>
                        <div class="col-md-9">
                            <input type="text" name="lname" class="form-control" placeholder="Last" v-model="patientInfo['lname']" required>										
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Civil Status</label>
                        <div class="col-md-9">
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
                </div>
                <!--/span-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Ext Name</label>
                        <div class="col-md-9">
                            <input type="text" name="extname" class="form-control" placeholder="Jr. Sr. III" v-model="patientInfo['extension_name']">										
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Occupation</label>
                        <div class="col-md-9">
                            <input type="text" name="occupation" class="form-control" placeholder="Occuptaion" v-model="patientInfo['occupation']">
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
                            <input type="text" name="referral" class="form-control" placeholder="Referred by" v-model="patientInfo['referral']">										
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                            <textarea name="address" class="form-control" v-model="patientInfo['address']" required></textarea>
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
                        <input type="text" name="contact_no" class="form-control" placeholder="Contact Nos" v-model="patientInfo['contact_no']" required>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <div class="row">
                <div class="col-md-12 button">
                    <button class="btn btn-primary">Next</button>
                </div>
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