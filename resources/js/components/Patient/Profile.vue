<template>
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
                            <div class="">
                                <vs-tabs>
                                    <template v-for="page in pages">
                                        <vs-tab :key="page.id" :label="page.name">
                                            <div class="con-tab-ejemplo">
                                                <component :is="page.component" :patient="patient"></component>
                                            </div>
                                        </vs-tab>
                                    </template>
                                </vs-tabs>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</template>

<script>
import Profile from './ProfileContent/Profile'
import MedicalInformation from './ProfileContent/MedicalInformation'
import Appointments from './ProfileContent/Appointment'
import LabResult from './ProfileContent/LabResult'
import Medicines from './ProfileContent/Medicine'
export default {
    props:{
        patient: {
            type: Object,
            required: true,
        }
    },
    components: {
        Profile,
        MedicalInformation,
        Appointments,
        LabResult,
        Medicines
    },
    data() {
        return {
            pages: [
                {
                    id: 1,
                    name: 'Profile',
                    component: 'Profile'
                },
                {
                    id: 2,
                    name: 'Medical Information',
                    component: 'MedicalInformation'
                },
                {
                    id: 3,
                    name: 'Appointments',
                    component: 'Appointments'
                },
                {
                    id: 4,
                    name: 'Lab Results',
                    component: 'LabResult'
                },
                {
                    id: 5,
                    name: 'Medicines',
                    component: 'Medicines'
                },
                
            ]
        }
    },
    mounted() {
        console.log(this.patient)
    }
}
</script>

<style>

</style>