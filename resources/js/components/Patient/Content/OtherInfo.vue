<template>
    <div>
        <h4>PMHx</h4>
        <form @submit.prevent="submitOtherInformation">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">HPN</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_hpn" class="form-control" v-model="patientInfo['pmh_hpn']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">DM</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_dm" class="form-control" v-model="patientInfo['pmh_dm']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">BA</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_ba" class="form-control" v-model="patientInfo['pmh_ba']"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">CA</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_ca" class="form-control" v-model="patientInfo['pmh_ca']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Heart Disease</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_heart_disease" class="form-control" v-model="patientInfo['pmh_heart_disease']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Operation</label>
                        <div class="col-md-9">
                            <input type="text" name="pmh_operation" class="form-control" v-model="patientInfo['pmh_operation']"> </div>
                    </div>
                </div>
            </div>
            <h4>PSHx</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Smoking</label>
                        <div class="col-md-9">
                            <input type="text" name="psh_smoking" class="form-control" v-model="patientInfo['psh_smoking']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Alcohol</label>
                        <div class="col-md-9">
                            <input type="text" name="psh_alcohol" class="form-control" v-model="patientInfo['psh_alcohol']"> </div>
                    </div>
                </div>									
            </div>
            <h4>FMHx</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Similar Lesions</label>
                        <div class="col-md-9">
                            <input type="text" name="fmh_similar_lesions" class="form-control" v-model="patientInfo['fmh_similar_lesions']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">CA</label>
                        <div class="col-md-9">
                            <input type="text" name="fmh_ca" class="form-control" v-model="patientInfo['fmh_ca']"> </div>
                    </div>
                </div>									
            </div>
            <h4>Others</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Allergy</label>
                        <div class="col-md-9">
                            <input type="text" name="allergy" class="form-control" v-model="patientInfo['allergy']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Soap</label>
                        <div class="col-md-9">
                            <input type="text" name="soap" class="form-control" v-model="patientInfo['soap']"> </div>
                    </div>
                </div>		
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Shampoo</label>
                        <div class="col-md-9">
                            <input type="text" name="shampoo" class="form-control" v-model="patientInfo['shampoo']"> </div>
                    </div>
                </div>							
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Lotion</label>
                        <div class="col-md-9">
                            <input type="text" name="lotion" class="form-control" v-model="patientInfo['lotion']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Perfume</label>
                        <div class="col-md-9">
                            <input type="text" name="perfume" class="form-control" v-model="patientInfo['perfume']"> </div>
                    </div>
                </div>		
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Detergent</label>
                        <div class="col-md-9">
                            <input type="text" name="detergent" class="form-control" v-model="patientInfo['detergent']"> </div>
                    </div>
                </div>							
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">LMP</label>
                        <div class="col-md-9">
                            <input type="text" name="lmp" class="form-control" v-model="patientInfo['lmp']"> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">PMP</label>
                        <div class="col-md-9">
                            <input type="text" name="pmp" class="form-control" v-model="patientInfo['pmp']"> </div>
                    </div>
                </div>		
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Pregnant/Plans</label>
                        <div class="col-md-9">
                            <input type="text" name="pregnant_plans" class="form-control" v-model="patientInfo['pregnant_plans']"> </div>
                    </div>
                </div>							
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-3">Fabric Softener</label>
                        <div class="col-md-9">
                            <input type="text" name="fabric_softener" class="form-control" v-model="patientInfo['fabric_softener']"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 button">
                    <button class="btn btn-primary" @click="previousPage">Previous</button>
                    <button class="btn btn-primary">Submit</button>
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
            required: true
        }
    },
    methods: {
        previousPage() {
            this.$emit('clickedPrevious')
        },
        submitOtherInformation() {
            this.$emit('submit', 'done')
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

        button {
            margin: 0px 10px;
        }
    }
</style>