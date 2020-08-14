<template>
  <div>
    <MedicalEdit v-if="edit && updated_patient_info !==null" :patient="updated_patient_info" @close="showEditInformation"/>
    <MedicalShow v-else-if="!edit && updated_patient_info !==null" :patient="updated_patient_info" @clickedEdit="showEditInformation"/>
  </div>
</template>

<script>
import MedicalShow from './MedicalInformation/Show'
import MedicalEdit from './MedicalInformation/EditCreate'
export default {
  props: {
    patient: {
      type: Object,
      required: true
    }
  },
  components: {
    MedicalShow,
    MedicalEdit
  },
  data() {
    return {
      host: window.location.origin,
      edit: false,
      updated_patient_info: null
    }
  },
  mounted() {this.getPatientInfo()},
  methods: {
    getPatientInfo(){
        this.$http.get(`${this.host}/api/patients/${this.patient.id}`)
        .then(response => this.updated_patient_info = response.data.patient)
        .catch(error => console.log(error))
    },
    showEditInformation(data) {
      this.edit = !this.edit
      if(!this.edit) this.updated_patient_info = data
    }
  }
}
</script>

<style>

</style>