<template>
    <div class="row patients-create m-0">
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
                            <div class="form-body">
                                <div class="page-title" v-if="!data_submitted">
                                    <h3 class="form-section">{{current_page.name}}</h3>
                                    <!-- <div>
                                        <a @click="previousPage"><i class="icon-arrow-left font-blue"></i></a>
                                        <a @click="nextPage"><i class="icon-arrow-right font-blue"></i></a>
                                    </div> -->
                                </div>
                                <div class="row" v-if="!data_submitted">
                                    <div class="col-md-12 required-text"><span class="text-danger">* Required</span></div>
                                </div>
                                <div class="row m-0" v-if="data_submitted">
                                    <div class="col-md-12">
                                        <MedicalInformation :patient="patient"/>
                                    </div>
                                </div>
                                <template v-else v-for="page in pages">
                                    <component v-if="current_page.page === page.id" :key="page.id" :is="page.component" :patientInfo="patientInfo" @clickedPrevious="previousPage" @submit="nextPage"></component>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
                    
        </div>
    </div>
</template>

<script>
import PersonalInformation from './Content/PersonalInformation'
import LocalAddress from './Content/LocalAddress'
import ForeignAddress from './Content/ForeignAddress'
import EmergencyContact from './Content/EmergencyContact'
import OtherInfo from './Content/OtherInfo'
import MedicalInformation from './ProfileContent/MedicalInformation/EditCreate'
    export default {
        props: ['auth'],
        components: {
            PersonalInformation,
            LocalAddress,
            ForeignAddress,
            EmergencyContact,
            OtherInfo,
            MedicalInformation
        },
        data() {
            return {
                host: window.location.origin,
                path: window.location.pathname,
                current_page: {
                    page: 1,
                    name: 'Patient Information',
                    component: 'PersonalInformation'
                },
                pages: [
                    {
                        id: 1,
                        name: 'Patient Information',
                        component: 'PersonalInformation'
                    },
                    {
                        id: 2,
                        name: 'Local Address',
                        component: 'LocalAddress'
                    },
                    {
                        id: 3,
                        name: 'Foreign Address',
                        component: 'ForeignAddress'
                    },
                    {
                        id: 4,
                        name: 'Emergency Contact Information',
                        component: 'EmergencyContact'
                    },
                    {
                        id: 5,
                        name: 'Other Information',
                        component: 'OtherInfo'
                    }   
                ],
                patientInfo: {},
                error: [],
                data_submitted: false,
                patient: {},
            }
        },
        mounted() {
            if(this.path === '/patient/signup') {
                this.pages.pop()
            }
        },
        methods: {
            previousPage() {
                if(this.current_page.page > 1) {
                    if(this.current_page.page === 4 && this.patientInfo.foreign_address === 'false') {
                        this.current_page.page -= 2
                    } else {
                        this.current_page.page -= 1
                    }
                    this.current_page = {...this.current_page, name: this.pages[this.current_page.page-1].name, component: this.pages[this.current_page.page-1].component}
                }
            },
            nextPage(data) {
                if(this.current_page.page < this.pages.length) {
                    if(this.current_page.page === 2 && this.patientInfo.foreign_address === 'false') {
                        this.current_page.page += 2
                    } else {
                        this.current_page.page += 1
                    }
                    this.current_page = {...this.current_page, name: this.pages[this.current_page.page-1].name, component: this.pages[this.current_page.page-1].component}
                } else {
                    this.$swal({
                        title: 'Save Patient?',
                        text: "Please double check the details before submitting",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Save'
                        }).then((result) => {
                        if (result.value) {
                            console.log(this.auth)
                            this.patientInfo['user_id'] = (this.auth != undefined) ? this.auth.id : null;
                            this.$http.post(`${this.host}/api/patients`, this.patientInfo)
                            .then(response => this.patient = response.data.patient)
                            .catch(error => console.log(error))
                            this.$swal(
                            'Saved!',
                            'Patient saved successfully.',
                            'success'
                            )
                            
                            if(this.auth != undefined) {
                                setTimeout(() => {
                                    window.location.href = `${this.host}/patients/create`
                                }, 1000)
                            } else {
                                setTimeout(() => {
                                    // window.location.href = `${this.host}/patient/signup`
                                    this.data_submitted = true;
                                }, 1000)
                            }

                        }
                    })
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .page-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0px 10px 20px;
    }
    .required-text {
        margin: 0px 30px;
    }
</style>