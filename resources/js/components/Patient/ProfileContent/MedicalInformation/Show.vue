<template>
    <div class="row">
        <template v-if="patient.patient_medical_information === null">NO DATA</template>
        <template v-else>
            <div class="col-md-12">
                <h5><strong>IMPORTANT: PLEASE READ CAREFULLY</strong></h5>
                <p>Your medical information is very important in assessing your fitness to undergo any treatment or procedure.
                    Please asnwer the following questions truthfully and accurately. All information shall be treated with
                    strict confidentiality.
                </p>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">1. Do you have any existing disease or illness? <strong>{{patient.patient_medical_information.answers.medical_information.question_1}}</strong></label>
                <div class="row" 
                    v-if="patient.patient_medical_information.answers.medical_information.question_1 === 'Yes' 
                    && patient.patient_medical_information.answers.medical_information.diagnosis.length > 0">
                    <div class="col-md-12 inner-column">
                        <label for="control-label">Diagnosis</label>
                        <ul>
                            <li v-for="(diagnosis,index) in patient.patient_medical_information.answers.medical_information.diagnosis" :key="index">
                                {{diagnosis}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.allergies !== null">
                        <label for="control-label">Allergies? <strong>{{(patient.patient_medical_information.answers.medical_information.allergies) ? 'Yes' : 'No'}}</strong></label>
                        <p>{{patient.patient_medical_information.answers.medical_information.allergies_details}}</p>
                        <p>{{patient.patient_medical_information.answers.medical_information.allergies_others}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">2. Have you undergone any surgical procedure/s before? <strong>{{patient.patient_medical_information.answers.medical_information.question_2}}</strong></label>
                <div class="row">
                    <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.question_2 === 'Yes'">
                        <p>{{patient.patient_medical_information.answers.medical_information.question_2_details}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">3. Do you have any history of pacemaker insertion or any metal implants? <strong>{{patient.patient_medical_information.answers.medical_information.question_3}}</strong></label>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">4. Family history? <span v-if="patient.patient_medical_information.answers.medical_information.question_9.length === 0"><strong>None</strong></span></label>
                <div class="row" v-if="patient.patient_medical_information.answers.medical_information.question_9.length > 0">
                    <div class="col-md-12 inner-column">
                        <ul>
                            <li v-for="(diagnosis,index) in patient.patient_medical_information.answers.medical_information.question_9" :key="index">
                                {{diagnosis}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">5. Do you drink alcoholic beverages? <strong>{{patient.patient_medical_information.answers.medical_information.question_4}}</strong></label>
                <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.question_4 === 'Yes'">
                    <p>{{patient.patient_medical_information.answers.medical_information.question_4_details}}</p>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">6. Have you ever taken any regulated drug or controlled substances? <strong>{{patient.patient_medical_information.answers.medical_information.question_5}}</strong></label>
                <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.question_5 === 'Yes'">
                    <p>{{patient.patient_medical_information.answers.medical_information.question_5_details}}</p>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">7. Do you have any history of drug allergy or hypersensitivity? <strong>{{patient.patient_medical_information.answers.medical_information.question_6}}</strong></label>
                <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.question_6 === 'Yes'">
                    <p>{{patient.patient_medical_information.answers.medical_information.question_6_details}}</p>
                </div>
            </div>
            <div class="col-md-12 my-1">
                <label class="control-label">8. Do you have any any history of adverse reactions from any dematological prcedures including chemical peels, hormonal therapy,
                  laser, light, and radiofrequency treatments? <strong>{{patient.patient_medical_information.answers.medical_information.question_7}}</strong>
                </label>
                <div class="col-md-12 inner-column" v-if="patient.patient_medical_information.answers.medical_information.question_7 === 'Yes'">
                    <p>{{patient.patient_medical_information.answers.medical_information.question_7_details}}</p>
                </div>
            </div>
            <div class="col-md-12 my-1" v-if="patient.gender === 'Female'">
                <label class="control-label">9. Is there any possibility that you are pregnant? <strong>{{patient.patient_medical_information.answers.medical_information.question_8}}</strong></label>
            </div>
        </template>
        <div class="col-md-12 my-1">
            <button @click="editInformation" class="btn btn-primary">Edit Details</button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        patient: {
        type: Object,
        required: true
        }
    },
    data() {
        return {
            host: window.location.origin,
            updated_patient_info: {}
        }
    },
    mounted() {},
    methods: {
        editInformation() {
            this.$emit('clickedEdit')
        }
    }
}
</script>

<style lang="scss" scoped>
    .row {
        text-align: justify;
        margin: 0;
    }
    .inner-column {
        padding: 14px;

        
    }
    ul {
            margin: 0px 24px;
        }
</style>